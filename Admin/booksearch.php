<?php include 'header.php'; ?>
<html>
<body>
<h2>ENTER BOOK DETAILS</h2>
<table>
<form action="booksearch.php" method="POST">
<legend>Book Information:</legend>
<tr>
<td>Book Code:</td> <td><input type="text" name="bookcode"
size="30"><br><br></td>
</tr>
<tr>
<td>Book Name: </td> <td><input type="text" name="bookname"
size="30"><br><br></td>
</tr>
<tr>
<td>Publication: </td> <td> <input type="text" name="publication"
size="30"><br><br></td>
</tr>
<tr>
<td>Author Name: </td> <td>
<input type="text"name="authorname"
size="30"><br><br></td>
</tr>
<tr>
<td height="40"><input type="submit" name= "submit" value="submit"></td>
</tr>
</form>
</table>
</body>
</html>
<?php
include'dbcon.php';
if (isset($_POST['submit']))
{
$code=$_POST['bookcode'];
$name=$_POST['bookname'];
$aname=$_POST['authorname'];
$publication=$_POST['publication'];
$result = mysqli_query($con,"SELECT * FROM book WHERE code = '$code' ||
bookname = '$name' || author = '$aname' || publication = '$publication'");


echo "<table border='1'>
<tr>
<th>Book code</th>
<th>Book Name</th>
<th>Author</th>
<th>Publication</th>
<th>Subject</th>
<th>No of Books</th>
<th></th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['Code'] . "</td>";
echo "<td>" . $row['Bookname'] . "</td>";
echo "<td>" . $row['Author'] . "</td>";
echo "<td>" . $row['Publication'] . "</td>";
echo "<td>" . $row['Category'] . "</td>";

echo "<td>" . $cp=$row['copies'] . "</td>";

  if($cp<1)
  {
    $avail="Unavailable";
  }
  else
  {
      $avail="<a href='issuebook.php'>issue books</a>";
  }

echo "<td>" . $avail. "</td>";
echo "</tr>";
}
echo "</table>";
}
mysqli_close($con);
   include 'footer.php';
?>
