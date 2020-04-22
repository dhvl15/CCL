<<?php 

//$conn = mysqli_connect("127.0.0.1", "root", "", "wd");
$conn = mysqli_connect("us-cdbr-iron-east-01.cleardb.net", "bfa2a557a3ad14", "69ba10e2", "heroku_a5da83056c5ca5c");
session_start();
$logic_finalcount = 0;
$q1 = array();
$q1["g"] = $_POST['RadioGroup7'];
$q1["h"] = $_POST['RadioGroup8'];

if($q1["g"] == "g")
 {
    $logic_finalcount = $logic_finalcount+1;
    
 }
  if($q1["h"] == "h")
 {
    $logic_finalcount = $logic_finalcount+1;
 }

$logic_finalcount2 = $_SESSION['logic_counter'] + $logic_finalcount;
$_SESSION['logic_counter'] = $logic_finalcount2;
echo $_SESSION['logic_counter'];
echo "string";
echo $logic_finalcount;
header('location:index4.html')
?>
