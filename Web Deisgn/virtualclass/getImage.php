
<?php
	include 'config.php';
	$id = 200;
	$sql = "SELECT pic FROM profile_pic WHERE idpic=$id";
	$result = mysql_query("$sql");
	$row = mysql_fetch_row($result);
	
	header("Content-type: image/jpg");
	echo $row['pic'];


?>