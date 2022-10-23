<!-- PHP Code -->
<?php 

// setting up initial 
$show = isset($_GET['show']) ? $_GET['show'] : "0";
$hidden = isset($_GET['hidden']) ? $_GET['hidden'] : "";
$state = isset($_GET['state']) ? $_GET['state'] : "";
$state2 = isset($_GET['state2']) ? $_GET['state2'] : "";


//Get numbers and operator
$one = isset($_GET['1'])?$_GET['1']:"";
$two = isset($_GET['2']) ?$_GET['2']:"";
$three = isset($_GET['3']) ?$_GET['3']:"";
$four = isset($_GET['4']) ?$_GET['4']:"";
$five = isset($_GET['5']) ?$_GET['5']:"";
$six = isset($_GET['6']) ?$_GET['6']:"";
$seven = isset($_GET['7']) ?$_GET['7']:"";
$eigth = isset($_GET['8']) ?$_GET['8']:"";
$nine = isset($_GET['9']) ?$_GET['9']:"";
$plus = isset($_GET['+']) ?$_GET['+']:"";
$minus = isset($_GET['-']) ?$_GET['-']:"";
$multiply = isset($_GET['*']) ?$_GET['*']:"";
$divide = isset($_GET['/']) ?$_GET['/']:"";
$equal = isset($_GET['=']) ?$_GET['=']:"";

// function press number
function pressNumber($number){
    global $show, $state, $state2;
    if($show == 0 || ($state !="" && $state2 != "1"))
    {
        $show = $number; 
        if($state != "")
        {
            $state2 = "1";  
        }
    }else{
        $show .= $number;
    }
}


// condition for checking value while press
if(isset($_GET["0"]))
{  
    pressNumber(0);
}else if($one)
{
    pressNumber(1);
}
else if($two)
{  
    pressNumber(2);
}
else if($three)
{
    pressNumber(3);
}
else if($four)
{
    pressNumber(4);
}
else if($five)
{
    pressNumber(5);
}
else if($six)
{
    pressNumber(6);
}
else if($seven)
{
    pressNumber(7);   
}
else if($eigth)
{
    pressNumber(8);
}
else if($nine)
{
    pressNumber(9);   
}
else if($plus)
{
    $state = "+";
    $state2 ="";
    $hidden =$show;
}
else if($minus)
{
    $state = "-";
    $state2 ="";
    $hidden =$show;
}
else if($multiply)
{
    $state = "*";
    $state2 ="";
    $hidden =$show;
}
else if($divide)
{
    $state = "/";
    $state2 ="";
    $hidden =$show;
}
else if($equal)
{
    if($state == "+")
    {
        $show = $hidden + $show;
    } elseif ($state == "-")
    {
        $show = $hidden - $show;
    } elseif ($state == "*")
    {
        $show = $hidden * $show;
    }elseif($state =="/")
    {
        $show = $hidden / $show;
    }
    $state ="";
    $state2="";
    $hidden="";
}
else
{
    $show ="0";
    $state ="";
    $state2 ="";
    $hidden ="";
}
?>


<!-- HTML Code -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculator</title>
</head>
<body>
    <div class="header">
        <h1>Calculator By PHP</h1>
    </div>
    <section class="section">
        <div class="container">
            <form action="" method="get" >
                <table height="280">
                    <tr class="input-sum">
                        <td colspan="4">
                            <input type="text" name="show" value="<?php echo $show; ?>"></input>
                            <input type="hidden" name="hidden" value="<?php echo $hidden ?>" ></input>
                            <input type="hidden" name="state" value="<?php echo $state ?>" ></input>
                            <input type="hidden" name="state2" value="<?php echo $state2 ?>" ></input>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="submit" name ="7" value="7"></td>
                        <td><input type="submit" name ="8" value="8"></td>
                        <td><input type="submit" name ="9" value="9"></td>
                        <td><input type="submit" name ="/" value="/"></td>  
                    </tr>
                    <tr>
                        <td><input type="submit" name="4" value="4"></td>
                        <td><input type="submit" name="5" value="5"></td>
                        <td><input type="submit" name="6" value="6"></td>
                        <td><input type="submit" name="*" value="*"></td>  
                    </tr>
                    <tr>
                        <td><input type="submit" name="1" value="1"></td>
                        <td><input type="submit" name="2" value="2"></td>
                        <td><input type="submit" name="3" value="3"></td>
                        <td><input type="submit" name="-" value="-"></td>  
                    </tr>
                    <tr>
                        <td><input type="submit" name="0" value="0"></td>
                        <td><input type="submit" name="=" value="="></td>
                        <td><a href="index.php"><input type="button"name="c" value="C"></a></td>
                        <td><input type="submit" name="+" value="+"></td>  
                    </tr>
                </table>
            </form>
        </div>
    </section>
    
</body>
</html>