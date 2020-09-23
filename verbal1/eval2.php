<<?php 

//$conn = mysqli_connect("127.0.0.1", "root", "", "wd");
//$conn = mysqli_connect("us-cdbr-iron-east-01.cleardb.net", "bfa2a557a3ad14", "69ba10e2", "heroku_a5da83056c5ca5c");
$conn = mysqli_connect("us-cdbr-east-02.cleardb.com", "b207cf51f7f376", "95a19b5b", "heroku_ec8d6bfe8530fc1");

session_start();
$verbal_finalcount = 0;
$q1 = array();
$q1["e"] = $_POST['RadioGroup5'];
$q1["f"] = $_POST['RadioGroup6'];

if($q1["e"] == "e")
 {
    $verbal_finalcount = $verbal_finalcount+1;
    
 }
  if($q1["f"] == "f")
 {
    $verbal_finalcount = $verbal_finalcount+1;
 }

$verbal_finalcount2 = $_SESSION['verbal_counter'] + $verbal_finalcount;
$_SESSION['verbal_counter'] = $verbal_finalcount2;
echo $_SESSION['verbal_counter'];
echo "string";
echo $verbal_finalcount;
header('location:index3.html')
?>
