

<link rel="stylesheet" href="style.css" type="text/css" />
<?php include 'config.php' ?>
<div id="timeline">
     <div id="profile_pic">
         <img src="pic.png" width="200px" height="200px;"/>
	</div>
	</div>
	<div id="personal_info">
	  <b>Name:</b
	  <?php 
	  if(!isset($_SESSION)){
			session_start();
		}
	   echo $_SESSION['login_id'].'kjddj';
		//$sql="select * from login where login_id=$_SESSION['login_id']";
		//mysqli_query($conn,#sql) or die("cannot perform");
		?>
	</div>
		