


<?php

 //$link = mysqli_connect("localhost", "root", "", "wd");
$link = mysqli_connect("us-cdbr-iron-east-01.cleardb.net", "bfa2a557a3ad14", "69ba10e2", "heroku_a5da83056c5ca5c");	

	if ($link)
	{
		echo ".............success.................";
	}
	else
	{
		echo ".............fail....................";
	}

	$name= mysqli_real_escape_string($link, $_POST['name']);
    $cl = mysqli_real_escape_string($link, $_POST['collegename']);
    $phno = mysqli_real_escape_string($link, $_POST['phonenumber']);
    $em = mysqli_real_escape_string($link, $_POST['email']);
    $p = mysqli_real_escape_string($link, $_POST['pass']);
 	
 	$sql = "INSERT INTO details (full_name,college_name,ph_no,email,password) VALUES ('$name','$cl','$phno','$em','$p')";
	if(mysqli_query($link, $sql))
	{
    	echo "Records added successfully.";
	} 
	else
	{
    	echo "ERROR: Could not able to execute $sql." . mysqli_error($link);
	}	
	header('location:login.html')
?>
