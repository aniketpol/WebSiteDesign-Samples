
<script type="text/javascript" src="jquery.easy-ticker.js"></script>
<script type="text/javascript" src="jquery.js"></script>
	
	<script type="text/javascript">
    $(document).ready(function(){
	$('.news').easyTicker({
	direction: 'down',
	easing: 'easeOutBounce',
	mousePause: 1,
	speed: 'fast',
	interval: 4000,
	visible: 4
	});
});
</script>

	<head>
	<?php include 'config.php' ?>
	<link rel="stylesheet" href="style.css" type="text/css" />
	
	
	</head>
	
	<body style="background:url(background.png) repeat;" >
    
		<div id="main_frame">
			<div id="title">
				<img src="title1.png" style="padding-left:50px; float:left; " />
		         <? echo '';
				 ?>
	         </div>
             <?php
			 $logina=$login;
		echo "<div id='menu'>";
		echo  "<a href='profile.php?lid=".$logina."' style='text-decoration:none;'><div class='menu_list'>Profile</div></a>";
		echo  "<a href='h.php?id=2' action='syllabus.php'style='text-decoration:none;'><div class='menu_list'>Syllabus</div></a>";
		echo   "<a href='h.php?id=3' style='text-decoration:none;'><div class='menu_list'>Time-Table</div></a>";
		echo	"<a href='h.ref?id=4' style='text-decoration:none;'><div class='menu_list'>Lectures</div></a>";
           
		   ?>
		     <div class="news">
	          <ul>
				<li class="vnews"><a href="http://punetech.com/tech-companies-in-pune-that-have-recently-raised-funding/" target="_blank">Tech companies in Pune that have recently raised funding</a></li>
				<li class="vnews"><a href="http://punetech.com/call-for-speakers-gnunify-2013-3-day-open-source-technologies-conference/" target="_blank">Call for Speakers:GNUnify 2013 3day open-source technologies conference</a></li>
				<li class="vnews"><a href="http://www.meetup.com/backpackers-pune/events/102776682/" target="_blank">Weekend Camping at Parnakuti near Lavasa</a></li>
				<li class="vnews"><a href="http://www.meetup.com/PASE-Pune-Area-Scala-Enthusiasts/events/105553822/" target="_blank">Discuss on Advanced topics like Scala Actors</a></li>
	 	
			   </ul>
	         </div>
		   
		</div>
		<div id="show_main">
		 <?php 
		 $id=$_GET['id'];
		  switch ($id)
			{
				case 1:
                include 'profile.php';
				break;

				case 2:
					echo '<object data="1fe.pdf" type="application/pdf" width="100%" height="100%" style="float:left;"></object>';
				break;

				case 3:
					include 'lecture.php';
					break;
				case 4:
					include 'table.php';
					break;
				 default:
				echo "<b><center>Welcome to Virtual class !!!!!</center></b>";
				}
		    ?>
		
	     
		</div>-->
		</div>	
	</body>

