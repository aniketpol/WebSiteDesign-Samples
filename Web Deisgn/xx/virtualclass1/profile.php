

<link rel="stylesheet" href="style.css" type="text/css" />
<?php include 'config.php' ?>
<div id="timeline">
	<div id = "logout" style="width:80px;height:30px;background-color:#f23ee4">
		<p><a href="localhost/virtualclass/"><b>Logout</b></a><p>
	</div>
     <div id="profile_pic">
         <img src="pict_logo.jpg" width="200px" height="200px;"/>
	</div>
	</div>
	
	  <?php 
	  $log=$_GET['lid'];
	  $result = mysqli_query($conn,"select * from all_details where login_id=$log");
	  while($data = mysqli_fetch_array($result))
	  {
		  echo "<div id='personal_info'>";
	  echo "<p><b>Name:</b>".$data['fname']." ".$data['lname']."</p>";
	  echo "<p><b>Gender:</b>".$data['gender']."</p>";
	  echo "<p><b>Date of Birth:</b>".$data['dob']."</p>";
	  echo "<p><b>Email:</b>".$data['emailid']."</p>";
	  echo "<p><b>Aggregate Percentage (%): </b>".$data['agg']."%"."</p>";
	  echo "<p><b>Profession :</b>".$data['profession']."</p>";
	  
	  }
	   /*echo $_SESSION['login_id'].'kjddj';
	   $uid=$_SESSION['login_id'];
	   echo $uid;
		$sql="select * from login where login_id=$uid";
		mysqli_query($conn,$sql) or die("cannot perform");
		*/
		?>
	</div>
		