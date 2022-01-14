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
<img src="../../img/Agronomy.jpeg" height="200px" width="150px"><br><br>
<div class="title">
Name :	Introduction to Agronomy: <br> Food, Crops, and Environment <br>
Authors :	Craig C. Sheaffer, Kristine M Moncada <br>
Country : America <br>
Language : English <br>
Subjects : Horticulture <br>
Publisher : Cengage Learning, 2012 <br>
</div>
</body>
</html>
