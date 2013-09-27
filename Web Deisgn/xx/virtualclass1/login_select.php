<html>

<body>

<?php
$con=mysqli_connect("localhost","root","","sample");
//Check connection
   if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  $uname=$_POST["username"];
  $pass=$_POST["password"];

$result = mysqli_query($con,"select * from all_details where emailid='$uname' and pwd='$pass'");
$data = mysqli_fetch_array($result);
$numrows = mysqli_num_rows($result);
if ($numrows == 0) 
{ 
	echo "<script type='text/javascript'>\n";
	echo "alert('Incorrect Username/Password');\n";
	echo "</script>";
	include("./index.php");
}
else
{
	echo "<script type='text/javascript'>\n";
	echo "alert('Successfully Logged In');\n";
	echo "</script>";
	$login = $data['login_id'];
    include "./h.php";
  }
?>

</body>

</html>