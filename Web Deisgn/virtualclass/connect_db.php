<!-This file is used to connect to server-->

<?php

$mysql_server="localhost";
$mysql_username="root";
$mysql_pwd="";
$db_name="sample";

$conn=mysqli_connect($mysql_server,$mysql_username,$mysql_pwd,$db_name);

	if(!$conn)
		{
		echo 'Could not Connect';
		}
	else{
			echo 'Connected to Sample';
		}
		

?>
