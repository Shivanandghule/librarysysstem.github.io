<?php
	//Start session
		session_start();
				 print_r($_SESSION);
				 if(isset($_SESSION['name']))
				 {
					 echo"hii";
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
<img src="/library/img/agri_eco.jpg" height="200px" width="150px"><br><br>
<div class="title">
Name : Agricultural economics  <br>
Author: S Subba Reddy; <br>P Raghu Ram;
 T V Neelakanta Sastry;<br> I Bhavani Devi <br>
Country : India <br>
Language : English <br>
Subject : Agriculture <br>
Publisher: New Delhi : Oxford and IBH, 2016.
</div>

<form action="agro_echo.php" method="post">
  <input type="submit" name="submit"value="Reserve Book">
</form>
</body>
</html>
<?php
  include 'dbcon.php';
      $sid= $_SESSION['PRN'];
      $result=mysqli_query($con,"");
 ?>
