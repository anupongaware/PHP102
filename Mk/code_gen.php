<?php

// Create Database function
function createMysqlConnection()
{
    $servername = "localhost";
    $username = "root";
    $password = "passw0rd";
    $dbname = "mk";

    //create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    //check connection

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $conn->query("SET NAMES UTF8");
    return $conn;
}


// Create Table function
function createTable($sql)
{
    $conn = createMysqlConnection();
    if ($conn->multi_query($sql) === TRUE) {
    } else {
        echo "Error: " . $sql . "<br/>" . $conn->error;
    }

    $conn->close();
}


// Show column from product function
function showColumn($table_name)
{
    $conn = createMysqlConnection();

    $sql = "SHOW FULL COLUMNS FROM $table_name";
    $result = $conn->query($sql);

    $columns = array();


    if ($result->num_rows > 0) {
        // Field Type Collation Null Key Default Extra Privileges Comment
        while ($row = $result->fetch_assoc()) {
            $column_row = array(
                "Field" => $row["Field"],
                "Type" => $row["Type"],
                "Collation" => $row["Collation"],
                "Null" => $row["Null"],
                "Key" => $row["Key"],
                "Default" => $row["Default"],
                "Extra" => $row["Extra"],
                "Privileges" => $row["Privileges"],
                "Comment" => $row["Comment"]
            );
            array_push($columns, $column_row);
        }
    } else {
        echo "0 results";
    }

    $conn->close();
    return $columns;
}


//Get table name form table.txt function
function getTableName($file_table)
{
    $lines = explode("\n", $file_table);
    $table_name_temp = explode(" ", $lines[0]);
    $table_name_temp = $table_name_temp[count($table_name_temp) - 1];
    $table_name = substr($table_name_temp, 1, strlen($table_name_temp) - 4);
    return $table_name;
}


function clear()
{
    $structure = "output/";
    $files = glob($structure . "*"); //get all file names

    foreach ($files as $file) { //iterate files
        if (is_file($file)) {
            unlink($file); //delete file
        }
        if (is_dir($file)) {
            rmdir($file);
        }
    }
    if (is_dir($structure)) {
        rmdir($structure);
    }
}

// Create file index.php function
function generalCodeFileIndex($table_name)
{
    $structure = "output/";
    $template_dir = "template/";
    if (!mkdir($structure, 0777, true)) {
        die("Failed to creatr folders");
    }

    $toSearch = array("{{TABLE_NAME}}");
    $toReplace = array($table_name);

    $template_content = file_get_contents($template_dir . 'index.php') or die("Unable to open file!");
    $file = fopen($structure . 'index.php', 'w') or die("Unable to open file!");
    $template_content_replace = str_replace($toSearch, $toReplace, $template_content);
    $content_out = $template_content_replace;
    fwrite($file, $content_out);
    fclose($file);
}


// <------------------ Run Script Stage --------------------->

$file_table = file_get_contents('table.txt') or die("Unable to open file!");
$table_name = getTableName($file_table);
echo $file_table;

//Create table from text in table.txt
createTable($file_table);

//Show column of table 
// $columns = showColumn($table_name);
// print_r($columns);

//Create new index.php
// clear(); //Clear files and folders before
// generalCodeFileIndex($table_name);
