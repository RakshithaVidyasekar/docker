<?php
session_start();
	$_SESSION;


	include("connection.php");
	include("function.php");

	$user_data=check_login($con);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Vision Vogue</title>
</head>
<body>

	<a href="logout.php">Logout</a>
	<div style="text-align:center;margin-top:40px;"><img  src="logo.jpg"></div>

<div style="text-align:center;margin-top:40px;">
<a style="padding-right:20px;" href="home.html">Home</a>
<a style="padding-right:20px;"href="shop.html">Shop</a>
<a style="padding-right:20px;"href="vision.html">Our Vision</a>

</div>

<h1 style="font-size:50px;text-align:center;">VisionVogue</h1>

<p style="font-size:20px;text-align:center;line-height:30px;margin-bottom:30px;"> Step into the realm of Vision Vogue, where style and clarity converge!<br> Embrace the latest eyewear trends and innovative lens technology designed for ultimate comfort and precision. <br>Elevate your style, enhance your vision – Vision Vogue, where chic meets clarity in every glance.</p>

<hr style="width:80%;">

<h1 style="font-size:40px;text-align:center;">Our color palettes</h1>

<img style="width:410px;" src="img3.jpeg">
<img style="width:410px;"src="img2.jpeg">
<img style="width:410px;"src="img4.jpeg">

<h1 style="font-size:50px; text-align:center;">Begin</h1>

<div style="text-align:center;">
<video src="video.mp4 " controls/>
</div>


	<br>
</body>
</html>