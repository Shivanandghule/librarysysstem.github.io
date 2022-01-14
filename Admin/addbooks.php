<?php include 'header.php'; ?>
<html>
<head>
  <style media="screen">
    th,td{
      column-span: 4;
    }
  </style>
</head>
<body>
<h2>ENTER BOOK DETAILS</h2>
<fieldset>
<table>
<form action="add.php" method="POST"enctype="multipart/form-data">

<legend><h1>Book Information:</h1></legend>
<tr>
<th>Book Code:</th> <td><input type="text" name="bookcode"size="50"required><br><br></td>
</tr>
<tr>
<th>Book Name: </th> <td><input type="text" name="bookname"size="50"required><br><br></td>
</tr>
<tr>
<th>Publication: </th> <td> <input type="text" name="publication"size="50"required><br><br></td>
</tr>
<tr>
<th>Author Name: </th> <td>
<input type="text"name="author"size="50"required><br><br></td>
</tr>
<tr>
<th> category: </th> <td>
<input type="text"name="category"size="50"required><br><br></td>
</tr>
<tr>
<th>No of copies: </th> <td>
<input type="text"name="copies"size="50"required><br><br></td>
</tr>
<tr>
  <th>
  <h3>Upload image</h3></th>
  <td><fieldset>
 <input type="file"name="image"required>
  <br>
  </fieldset>
</td>
</tr>
<tr>
<td font-size="50"height="40"colspan="3"><center><input type="submit" name= "submit" value="submit"></td>
</center>
</tr>
</form>
</table>
</fieldset>
</body>
</html>
<?php include 'footer.php'; ?>

<?php
	//print_r($_POST);
	include'dbcon.php';
	/*$code=$_POST['bookcode'];
	$name= $_POST['bookname'];
	$author= $_POST['author'];
	$publication= $_POST['publication'];
	 $cat=$_POST['category'];
	 $copies= $_POST['copies'];

echo $book=$_POST['image'];
*/
 //echo $tempname=$_FILES['image']['tmp_name'];

 //move_uploaded_file($tempname,"../img/$image");


$sql="INSERT INTO `book`(`Code`, `Bookname`, `Author`, `Publication`, `Category`, `copies`, `book`) VALUES ('10003', 'gfgfgfgfgh', 'ffgfgfhgv', 'fffggg', 'jkkkkj', 'ghghh','agri_eco.jpg')";
$d=mysqli_query($con,$sql);
print_r($d);
/*if (!mysqli_query($con,$sql))
{
	?>

	<script>
		alert("error in book addition");
		window.open('addbooks.php?Aid=<?php echo $name;?>','_self');
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
}*/
mysqli_close($con);
?>
