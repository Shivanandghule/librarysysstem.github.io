<?php include 'header.php'; ?>
<html>
<body>

<fieldset>
  <legend><h1>SEARCH STUDENT </h1></legend>
<table>
<form action="search.php" method="POST">
<h2>Student Information:</h2>
<tr>
<td>PRN :</td> <td><input type="text" name="prn"size="30"><br><br></td>
</tr>
<tr>
<td>Student Name: </td> <td><input type="text" name="sname"
size="30"><br><br></td>
</tr>
<tr>
<td height="40"><input type="submit" name= "submit" value="submit"></td>
</tr>
</form>
</table>
</fieldset>
</body>
</html>
<?php

include'dbcon.php';
if (isset($_POST['submit']))
 {
$PRN=$_POST['prn'];
$name=$_POST['sname'];
$result = mysqli_query($con,"SELECT * FROM `Student`,`Login` WHERE `Student`.`PRN`=`Login`.`PRN` AND `Student`.`PRN`='$PRN' && `Login`.`PRN`='$PRN' || `Student`.`Student Name`='$name' ");

echo "<table border='1'>
<tr>
<th>PRN</th>
<th>Student Name</th>
<th>Class</th>
<th>Faculty</th>
<th>Contact</th>
<th>AdmissionYear</th>
<th>username</th>
<th>books</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['PRN'] . "</td>";
echo "<td>" . $row['Student Name'] . "</td>";
echo "<td>" . $row['Class'] . "</td>";
echo "<td>" . $row['Faculty'] . "</td>";
echo "<td>" . $row['contact'] . "</td>";
echo "<td>" . $row['Year_of_Admission'] . "</td>";
echo "<td>" . $row['username'] . "</td>";
echo "<td>" . $row['numbooks'] . "</td>";
echo "</tr>";
}
echo "</table>";
}
mysqli_close($con);
   include 'footer.php';
?>
