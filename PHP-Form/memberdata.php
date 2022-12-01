<?php
// echo "ชิ่อ คือ " . $_POST["firstname"] . "<br/>";
// echo "นามสกุล คือ " . $_POST["lastname"] . "<br/>";
// echo "เพศ คือ " . $_POST["sex"] . "<br/>";
// echo "การศึกษา คือ " . $_POST["education"] . "<br/>";
// echo "ที่มาจากเพื่อน คือ " . $_POST["source_friend"] . "<br/>";
// echo "ที่มาจากกูเกิ้ล คือ " . $_POST["source_google"] . "<br/>";
// echo "ที่มาจากทีวี คือ " . $_POST["source_tv"] . "<br/>";
// echo "คอมเม้น คือ " . $_POST["comment"] . "<br/>";


$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$sex = isset($_POST["sex"]) ? $_POST["sex"] : "";
$education = $_POST["education"];
$source_friend = isset($_POST["source_friend"]) ? $_POST["source_friend"] : "";
$source_google = isset($_POST["source_google"]) ? $_POST["source_google"] : "";
$source_tv = isset($_POST["source_ty"]) ? $_POST["source_ty"] : "";
$comment = $_POST["comment"];

echo "ชื่อ คือ $firstname <br/>";
echo "นามสกุล คือ $lastname <br/>";

switch ($sex) {
    case "1":
        echo "เพศชาย <br/>";
        break;
    case "2":
        echo "เพศหญิง <br/>";
        break;
    default:
        echo "ไม่ได้ระบุ <br/>";
        break;
}

switch ($education) {
    case "1":
        echo "ระดับการศึกษาสูงสุด คือ ต่ำกว่าปริญญาตรี <br/>";
        break;
    case "2":
        echo "ระดับการศึกษาสูงสุด คือ ปริญญาตรี <br/>";
        break;
    case "3":
        echo "ระดับการศึกษาสูงสุด คือ ปริญญาโท <br/>";
        break;
    case "4":
        echo "ระดับการศึกษาสูงสุด คือ ปริญญาเอก <br/>";
        break;
}

if ($source_friend == "1" && $source_google == "2" && $source_tv == "3") {
    echo "ทราบเว็บไซต์นี้ จาก 'เพื่อน', 'google', 'Tv' <br/>";
} elseif ($source_friend == "1" && $source_google == "2") {
    echo "ทราบเว็บไซต์นี้ จาก 'เพื่อน', 'google' <br/>";
} elseif ($source_google == "2" && $source_tv == "3") {
    echo "ทราบเว็บไซต์นี้ จาก 'google', 'Tv' <br/>";
} elseif ($source_friend == "1" && $source_tv == "3") {
    echo "ทราบเว็บไซต์นี้ จาก 'เพื่อน', 'Tv' <br/>";
} elseif ($source_friend  == "1") {
    echo "ทราบเว็บไซต์นี้ จาก 'เพื่อน'<br/>";
} elseif ($source_google == "2") {
    echo "ทราบเว็บไซต์นี้ จาก 'google'<br/>";
} elseif ($source_tv == "3") {
    echo "ทราบเว็บไซต์นี้ จาก 'TV'<br/>";
}

echo "คอมเม้น คือ " . $_POST["comment"] . "<br/>";
