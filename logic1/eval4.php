<?php 

//$link = mysqli_connect("127.0.0.1", "root", "", "wd");
$link = mysqli_connect("us-cdbr-iron-east-01.cleardb.net", "bfa2a557a3ad14", "69ba10e2", "heroku_a5da83056c5ca5c");	
session_start();
$logic_finalcount = 0;
$q1 = array();
$q1["i"] = $_POST['RadioGroup9'];
$q1["j"] = $_POST['RadioGroup10'];

if($q1["i"] == "i")
 {
    $logic_finalcount = $logic_finalcount+1;
    
 }
  if($q1["j"] == "j")
 {
    $logic_finalcount = $logic_finalcount+1;
 }

$logic_finalcount2 = $_SESSION['logic_counter'] + $logic_finalcount;
$_SESSION['logic_counter'] = $logic_finalcount2;
echo $_SESSION['logic_counter'];

	if (isset($_SESSION['email']))
	{
   	$email1 = $_SESSION['email'];
	}
	$sql = "UPDATE details SET logic = '$logic_finalcount2' WHERE email = '$email1'";
   if(mysqli_query($link, $sql))
	{
    	echo "Records added successfully.";
	} 
	else
	{
    	echo "ERROR: Could not able to execute $sql." . mysqli_error($link);
	}
	header('location:next1.html')

?>
