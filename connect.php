


<?php
//$link = mysqli_connect("127.0.0.1", "root", "", "wd");
$link = mysqli_connect("us-cdbr-iron-east-01.cleardb.net", "bfa2a557a3ad14", "69ba10e2", "heroku_a5da83056c5ca5c");	

	if ($link)
	{
		echo ".............success.................";
	}
	else
	{
		echo ".............fail....................";
	}	
?>
