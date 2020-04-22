<<?php 

//$conn = mysqli_connect("127.0.0.1", "root", "", "wd");
$conn = mysqli_connect("us-cdbr-iron-east-01.cleardb.net", "bfa2a557a3ad14", "69ba10e2", "heroku_a5da83056c5ca5c");
session_start();
$finalcount = 0;
$q1 = array();
$q1["g"] = $_POST['RadioGroup7'];
$q1["h"] = $_POST['RadioGroup8'];

if($q1["g"] == "g")
 {
    $finalcount = $finalcount+1;
    
 }
  if($q1["h"] == "h")
 {
    $finalcount = $finalcount+1;
 }

$finalcount2 = $_SESSION['counter'] + $finalcount;
$_SESSION['counter'] = $finalcount2;
echo $_SESSION['counter'];
echo "string";
echo $finalcount;
header('location:index4.html')
?>
