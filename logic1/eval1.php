<?php 

//$conn = mysqli_connect("127.0.0.1", "root", "", "wd");
//$conn = mysqli_connect("us-cdbr-iron-east-01.cleardb.net", "bfa2a557a3ad14", "69ba10e2", "heroku_a5da83056c5ca5c");
$conn = mysqli_connect("us-cdbr-east-02.cleardb.com", "b207cf51f7f376", "95a19b5b", "heroku_ec8d6bfe8530fc1");
session_start();
$logic_finalcount = 0;
$q1 = array();
$q1["c"] = $_POST['RadioGroup3'];
$q1["d"] = $_POST['RadioGroup4'];

if($q1["c"] == "c")
 {
    $logic_finalcount = $logic_finalcount+1;
    
 }
  if($q1["d"] == "d")
 {
    $logic_finalcount = $logic_finalcount+1;
 }
$logic_finalcount2 = $_SESSION['logic_counter'] + $logic_finalcount;
$_SESSION['logic_counter'] = $logic_finalcount2;
echo $logic_finalcount;
header("location:index2.html")
?>
