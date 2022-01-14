<?php include 'header.php'; ?>
<?php
	include 'dbcon.php';

$srh=$_POST['search'];
//echo $srh="computer";
$result = mysqli_query($con,"SELECT * FROM book WHERE Code = '$srh' || Bookname = '$srh' || Author = '$srh' || Publication = '$srh'|| Category='$srh'");
echo "hii";
while($row = mysqli_fetch_array($result))
{
echo "<table>";
echo "<tr>";
echo "<td rowspan='5'><img src=img/".$row['book']." style='max-width:220px;height:250px' align='right'></td>";
echo "</tr>";
echo "<tr>";
echo "<th>Book Name</th><td>" . $row['Bookname'] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Author</th><td>" . $row['Author'] ."</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Publication</th><td>" . $row['Publication'] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Subject</th><td>" . $row['Category'] . "</td>";
echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
<?php include 'footer.php'; ?>
