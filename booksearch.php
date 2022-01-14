
<h2>ENTER BOOK DETAILS</h2>
<table>
<form action="advancesearchresult.php" method="POST">
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
<td><p>Click the submit</p></td>
</tr>
<tr>
<td height="40"><input type="submit" name= "submit" value="submit" action=
"insertaccount.php"></td>
</tr>
</form>
</table>
</body>
</html>
<?php
	include 'dbcon.php';

$code=$_POST['bookcode'];
$name=$_POST['bookname'];
$aname=$_POST['authorname'];
$publication=$_POST['publication'];
$result = mysqli_query($con,"SELECT * FROM books WHERE code = '$code' ||
bookname = '$name' || author = '$aname' || publication = '$publication'");
echo "<table border='1'>
<tr>
<th>Book code</th>
<th>Book Name</th>
<th>Author</th>
<th>Publication</th>
<th>Subject</th>
<th>No of Books</th>
</tr>";
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['code'] . "</td>";
echo "<td>" . $row['bookname'] . "</td>";
echo "<td>" . $row['author'] . "</td>";
echo "<td>" . $row['publication'] . "</td>";
echo "<td>" . $row['subject'] . "</td>";
echo "<td>" . $row['numberofbooks'] . "</td>";
echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
