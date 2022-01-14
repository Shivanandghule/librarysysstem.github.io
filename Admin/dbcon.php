<?php


$con=mysqli_connect('localhost','root','','library');

if($con==false)
{
	echo"Connection is not done";
}
else {
	echo "done";
}


?>
