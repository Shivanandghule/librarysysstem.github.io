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
<img src="../..//img/Origin_of_Species.jpg" height="200px" width="150px"><br><br>
<div class="title">
  Name : Origin Of Species <br>
  Author : Charles Darwin <br>
  Country : United Kingdom of <br>
            Great Britain and Ireland <br>
  Language : English <br>
  Subject : Natural selection <br>
            Evolutionary biology <br>
  Published : 24 November 1859[2] <br> (John Murray) <br>
</div>
</body>
</html>
