<?php 

//$conn = mysqli_connect("127.0.0.1", "root", "", "wd");
$conn = mysqli_connect("us-cdbr-iron-east-01.cleardb.net", "bfa2a557a3ad14", "69ba10e2", "heroku_a5da83056c5ca5c");
session_start();
$verbal_finalcount = 0;
$q1 = array();
$q1["1"] = $_POST['RadioGroup1'];
$q1["2"] = $_POST['RadioGroup2'];
if($q1["1"] == "a")
 {
    $verbal_finalcount = $verbal_finalcount+1;
    
 }
  if($q1["2"] == "b")
 {
    $verbal_finalcount = $verbal_finalcount+1;
 }
$_SESSION['verbal_counter'] = $verbal_finalcount;
echo $verbal_finalcount;
header("location: index1.html")
?>
