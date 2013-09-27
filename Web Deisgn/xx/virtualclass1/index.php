<!--This is main page-->
<!Doctype html> 
<html lang="en">
	<head>
		<title>Virtual Classroom</title>
		<link rel="stylesheet" href="style.css" type="text/css"/>
		<meta charset="utf8"/>
		<?php 
					
			function createDropdownYear() {
				
				echo '<select style="margin-top:5px;  font-size:16px;" name="year"><option value="">Year</option>';
				for ($i=1995; $i<=2013; $i++) 
				echo '<option value="'.$i.'">'.$i.'</option>';

				
				echo '</select>';
				}
				function createDropdownDate() {
				
				echo '<select style="margin-top:5px;  font-size:16px;" name="date"><option value="">Date</option>';
				for ($i=1; $i<=31; $i++) 
				echo '<option value="'.$i.'">'.$i.'</option>';

				
				echo '</select>';
				}
				$arr=array('Jan','Feb','Mar','Apr','May','Jun','July','Aug','Sept','Oct','Nov','Dec');
			
			function createDropdownMonth($arr) {

				echo '<select style="margin-top:5px;  font-size:16px;" name="month"><option value="">Month</option>';
				foreach ($arr as $key => $value) {
				echo '<option value="'.$value.'">'.$value.'</option>';
				}
					echo '</select>';

					} 
				
		?> 
		
		<script type="text/javascript">
			var image1=new Image()
			image1.src="first.gif"
			var image2=new Image()
			image2.src="second.gif"
			var image3=new Image()
			image3.src="five.gif"
         </script>
	</head>
	
<body >
	
	<div id="title">
		<img src="title1.png" style="padding-left:150px; float:left;" />
			<div id="user_login">
			<form action="login_select.php" method='POST'>
			Email or Phone :&nbsp <input type="text" name="username" size="24"> &nbsp
			Password :&nbsp <input type="password" name="password">&nbsp&nbsp
			<input type="submit" value="Log In">
	         </form>
			</div>
	</div>		

	<div id="middle">	
		<div id="info">
				<img src="first.gif" name="slide" width="550" height="300" />
			<script>
				var step=1
				function slideit(){
				//if browser does not support the image object, exit.
				if (!document.images)
				return
				document.images.slide.src=eval("image"+step+".src")
				if (step<3)
				step++	
				else
				step=1
			setTimeout("slideit()",2500)
			}
			slideit()
			</script>
			
		 </div>
		
     <div id="signup">
       <h1>Sign Up!</h1>
			<form action='add_user.php' method="POST" style="float:left;">
				<input id="ip_text" type="text" placeholder="First Name" style="height:23px;" name="fname">
					<input type="text"  placeholder="Last Name" style="height:23px;" name="lname"><br>
					<input type="text"  placeholder="Email" style="height:23px; width:385px;margin-top:10px;" name="email"><br>
					<input type="text"  placeholder="Re-enter Email" style="height:23px; width:385px;margin-top:10px;"><br>
					<input type="password"  placeholder="New Password" style="height:23px; width:385px;margin-top:10px;" name="pwd"><br>
					<b style="font-size:20px; margin-top:20px;">Birthday:</b><br>
				  
				 <!-- <select style="margin-top:5px; font-size:16px;">
					<option value="1">Month :</option>
				   </select>-->
				   
				   <?php createDropdownDate();?>
					
				    <!--<select style="margin-top:5px;  font-size:16px;">
						<option value="1">Day:</option>
				   </select>-->
				   <?php createDropdownMonth($arr);?>
					
				    
					<?php createDropdownYear();?>
					<!--<select style="margin-top:5px;  font-size:16px;">
						<option value="3">Year :</option>
				   </select>-->
				  
				   <br>
				 
				<input type="radio" name="sex" value="m" style="margin-top:15px;" class="gender"> Male
				<input type="radio" name="sex" value="f" style="font-size:19px;" class="gender">Female	
				<br>
				<input type="radio" name="type" value="student" style="margin-top:15px;" class="gender"> Student
				<input type="radio" name="type" value="professor" style="font-size:19px;" class="gender">Professor	
				<br>
				<input type="submit"  value="Sign Up"  style="margin-top:10px; width:100px; height:40px; background:url(xy.png); border:none; font-size:16px; font-weight:bold;">
				  
				   
				 
				
			</form>
		
	</div>
	
	</div>
	<?php include 'footer.html'; ?>
</body>

</html>	

