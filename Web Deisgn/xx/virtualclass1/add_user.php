
<?php
   include 'config.php';
   //echo $_POST["date"];
   
   $m_name= $_POST["month"];
   $key = array_search($m_name, $arr);
   $dob=$_POST["year"].'-'.$key.'-'.$_POST["date"];
 
   $rand1=rand();
   $sql1="insert into all_details(login_id,emailid,fname,lname,pwd,gender,dob,profession) values('$rand1','$_POST[email]','$_POST[fname]','$_POST[lname]','$_POST[pwd]','$_POST[sex]','$dob','$_POST[type]')";
   mysqli_query($conn,$sql1) or die("Could not insert");
    echo "<script type='text/javascript'>\n";
	echo "alert('Thankyou for using Virtual Classroom !!!');\n";
	echo "</script>";
	include("./index.php")
	

?>