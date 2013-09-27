
<?php
	require 'config.php';
	
$result=mysqli_query($conn,'Select * from login');

	echo $_POST['password'];
     
	/*while($row=mysql_fetch_array[$result])	
		{
			echo $row['username'].' '.$row['password'];
			echo '<br>'
		}*/

	mysqli_close($conn);	
	

?>