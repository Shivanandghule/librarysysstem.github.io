<?php
	include('dbcon.php');

	if(isset($_POST['Login']))
	{
		echo $username=$_POST['uname'];
		echo $password=$_POST['psw'];


		//echo $username="Akansha1212";
		//echo $password="AB123456";
		$qry="SELECT * FROM Login WHERE username='$username'AND password='$password'";
		 $run=mysqli_query($con,$qry);
		 print_r($run);
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
			 echo $_SESSION['PRN']=$member['PRN'];
			 echo $_SESSION['name'] = $member['username'];
			 echo $_SESSION['password'] = $member['password'];
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
