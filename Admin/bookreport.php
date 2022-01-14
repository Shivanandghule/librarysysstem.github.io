<html>
<head>
<title>Books Report</title>
</head>
<body>
<center>
<fieldset border="2" style="width: 80%">
  <h1 align="center"> Book Report</h1>

<?php

 include'dbcon.php';
$result=mysqli_query($con,"SELECT * FROM book");
$count=mysqli_num_rows($result);
echo "<center>";
echo "<table border='1' style='width=100px'>
<tr>
<th>Book Id</th>
<th>Book</th>
<th>Name</th>
<th>Publication</th>
<th>Author</th>
<th>Subject</th>
<th>Number Of Books</th>
</tr>";
while($count>0)
{
while($row = mysqli_fetch_array($result))
{
  echo "<tr>";
  echo "<td>" . $row['Code'] . "</td>";
  echo "<td><img height='150px'width=120px src=../img/" . $row['book'] . "></td>";
  echo "<td>" . $row['Bookname'] . "</td>";
  echo "<td>" . $row['Publication'] . "</td>";
  echo "<td>" . $row['Author'] . "</td>";
  echo "<td>" . $row['Category'] . "</td>";
  echo "<td>" . $row['copies'] . "</td>";
  echo "</tr>";

}
$count=$count-1;
}
echo "</table>";
echo "</center>";

mysqli_close($con);

?>
<br>
<br>
<br>
<br>
<br>
<br>
<button name="prt" onclick="window.print();return false;" style="height: 40px; width: 70px;">Print </button>
<button id='btn1'onclick="window.location.href='breport.php'" style='height: 40px; width: 70px;'class='hide'> Back </button>

</center>
</fieldset>
</body>
</html>
