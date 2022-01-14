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
<img src="../..//img/0000EducatPsy.png" height="200px" width="150px"><br><br>
<div class="title">
Name : Educational Psychology <br>
Author : Kelvin Seifert, University of Manitoba <br>
          Rosemary Sutton, Cleveland State University <br>
Country : Canada <br>
Language: English <br>
Subject  : Psychology <br>
Publisher: University of Manitoba
</div>
</body>
</html>
