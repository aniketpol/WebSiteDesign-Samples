<!doctype html>
<!--This is my Home Page -->
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Home|  FeToBe</title>
</head>

<body>
<script language="javascript">
function cleartxt()
{
	document.getElementById("search").value=" ";
}

</script>


<div id="main_header">
<div id="header_wrape">
<div id="title">
<a href="about.html"  style="float:right;"><img  src="about.jpg" align="right"></a>
</div>
<hr/>

<div id="menu">
<li><a href="#">Home</a><a href="#">FE</a></li>
<li><a href="#">SE</a></li>
<li><a href="#">TE</a></li>
<li><a href="#">BE</a><a href="#">Projects</a></li>
<li><a href="#">Placement</a></li>
</div>
<div id="head_back">

<div id="head_bottom">

LOOKING FOR SOMETHING ?

<form  style="padding-top:10px; " onClick="clear();">
Search:
  <input  id="search" type="text" value="Enter a Keyword" style="font-weight:lighter" onClick="cleartxt();">
<input type="button"  style=" background-color:#000; color:#FFF; border:none;" value="Go" onClick="cleartxt();" >
</form>


</div>

<div id="line">
</div>
<div id="news">

<font color="#FFFFFF" >NEWS & EVENTS<br></font>
<img src="news.png" width="80px" style="float:left;">
<font size="3"> Stay updated with latest happening across all collages and courses</font>
</div>

<div id="line1">
</div>

<div id="ebook">
<font  color="#FFFFFF"><b>E-BOOK STORE</b></font>
<br>

<img src="ebook.jpg" width="70px" style="float:left;">

<font  size="3" color="#CCC" style="float:none; padding-left:10px;">Download all types of </font><font color="#CCC" style="padding-left:10px;">E-books for free </font>
</div>

</div>

</div>
</body>

</html>