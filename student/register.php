<?php

	if (isset($_POST['Register']))
	{

		include 'dbcon.php';

		echo "<br>";
		echo $PRN=$_POST['PRN'];
		echo $uname=$_POST['uname1'];
		echo $pass=$_POST['psw1'];
		echo $books=0;

		$rgt="INSERT INTO `Login`(`PRN`, `username`, `password`, `numbooks`) VALUES ('$PRN','$uname','$pass','$books')";
		$row=mysqli_query($con,$rgt);

		if($row<1)
		{
			?>
			<script>
					alert("register failed");
					window.open('../index.php','_self');

			</script>
			<?php
		}
		else
		{
			?>
			<script>
					alert("register successful");
					window.open('../index.php','_self');

			</script>
			<?php
		}
	}
?>
