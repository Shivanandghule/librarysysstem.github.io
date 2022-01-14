<?php
include 'dbcon.php';
  //print_r($_POST);
  //print_r($_FILES);
  echo $code=$_POST['bookcode'];
	echo $name= $_POST['bookname'];
	echo $author= $_POST['author'];
	echo $publication= $_POST['publication'];
	 echo $cat=$_POST['category'];
	 echo $copies= $_POST['copies'];
	 
	 echo $image= $_FILES['image']['name'];

	$tempname=$_FILES['image']['tmp_name'];

	move_uploaded_file($tempname,"../books/$image");

  $sql=mysqli_query($con,"INSERT INTO `book`(`Code`, `Bookname`, `Author`, `Publication`, `Category`, `copies`, `book`) VALUES ('$code','$name','$author','$publication','$cat','$copies','$image')");

if ($sql==false)
{
	?>

	<script>
		alert("error in book addition");
		window.open('addbooks.php','_self');
	</script>
	<?php
}
else {
	?>

	<script>
		alert("book added Successfully");
		window.open('addbooks.php?Aid=<?php echo $name;?>','_self');
	</script>
	<?php
}
mysqli_close($con);
?>
