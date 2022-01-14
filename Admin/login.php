<?php
	include('dbcon.php');
	//print_r($_POST);
	if(isset($_POST['Login2']))
	{
		//print_r($_POST);
		echo $username=$_POST['uname2'];
		echo $password=$_POST['psw2'];

		//echo $username="shiva";
		//echo $password="shiva";
		$qry="SELECT * FROM Admin WHERE username='$username'AND password='$password'";
		  $run=mysqli_query($con,$qry);
			print_r('$run');
		 echo $row=mysqli_num_rows($run);

		 if($row<1)
		 {
			 ?>
			 <script>
			 alert('username or password not match');
			 window.open('../index.php','_self');
			 </script>
			 <?php

		 }
		 else
		 {
			 session_start();
			 session_regenerate_id();
			 $member = mysqli_fetch_array($run);
			 echo $_SESSION['name'] = $member['username'];
			 echo $_SESSION['pass'] = $member['password'];
			 session_write_close();
			 ?>
			 <script>
			 alert('Login Successfully');
			 window.open('index.php','_self');
			 </script>
			 <?php
			//header('location:index.php');
		}
	}
?>
