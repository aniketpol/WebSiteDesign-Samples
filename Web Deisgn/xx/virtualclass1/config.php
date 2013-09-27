

<?php

$mysql_server="localhost";
$mysql_username="root";
$mysql_password="";
$mysql_db="sample";
$login_userid;
$arr=array(1 =>'Jan',2 =>'Feb',3=>'Mar',4=>'Apr',5 =>'May',6 =>'Jun',7 =>'July',8 =>'Aug',9 =>'Sept',10 =>'Oct',11 =>'Nov',12 =>'Dec');
			
$conn=mysqli_connect($mysql_server,$mysql_username,$mysql_password,$mysql_db);

if(!$conn)
  echo 'Could Not cconnect to'.$mysql_db;
else
	//echo 'Connected to '.$mysql_db 


?>


