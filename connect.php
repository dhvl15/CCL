


<?php
//$link = mysqli_connect("127.0.0.1", "root", "", "wd");
//$link = mysqli_connect("us-cdbr-iron-east-01.cleardb.net", "bfa2a557a3ad14", "69ba10e2", "heroku_a5da83056c5ca5c");	
$link = mysqli_connect("us-cdbr-east-02.cleardb.com", "b207cf51f7f376", "95a19b5b", "heroku_ec8d6bfe8530fc1");	

	if ($link)
	{
		echo ".............success.................";
	}
	else
	{
		echo ".............fail....................";
	}	
?>
