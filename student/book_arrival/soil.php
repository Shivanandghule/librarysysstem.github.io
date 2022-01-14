<?php
	//Start session
		session_start();
				 //print_r($_SESSION);
				 if(isset($_SESSION['name']))
				 {
					// echo"hii";
				 }
				 else
				 {
					 header('location : ../index.php');
				 }
	//Unset the variables stored in session
	//unset($_SESSION['SESS_username']);
	//unset($_SESSION['SESS_password']);
?>
<html>
<head>
<title></title>
<style>
.title {
font-size:25;
color: #583759;
text-align: left;
}
</style>
</head>
<body bgcolor="#ada96e">
<img src="../..//img/Fundamentals-Of-Soil-Science-2nd-Edition_146823.jpg" height="200px" width="150px"><br><br>
<div class="title">
Name : Fundamentals of soil Science <br>
Author : Tolanur S <br>
Country  : India  <br>
Language : English <br>
Subject  : Agriculture  <br>
Publisher : CBS PUBLICATION
</div>
</body>
</html>
