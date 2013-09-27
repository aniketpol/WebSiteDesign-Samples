
<?php
   include 'config.php';
   //echo $_POST["date"];
   
   $m_name= $_POST["month"];
   $key = array_search($m_name, $arr);
   $dob=$_POST["year"].'-'.$key.'-'.$_POST["date"];
 
   $rand1=rand();
   $sql1="insert into login(login_id,username,password) values('$rand1','$_POST[email]','$_POST[pwd]')";
   mysqli_query($conn,$sql1) or die("Could not insert");
	
	$rand2=rand();
    $sql2="Insert into person(person_id,first_name,last_name,email_id,gender,dob,profession) values('$rand2','$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[sex]','$dob','$_POST[type]')";
    mysqli_query($conn,$sql2) or die("Could not insert");
   
	$rand3=rand();
    $sql3="Insert into person_login(person_id,login_id) values('$rand2','$rand1')";
    mysqli_query($conn,$sql3) or die("Could not insert");
	echo '<script type="text./javascript">
			alert("Account is Created");
				</script>';


?>