
<?php
  include 'dbcon.php';
     $PRN=$_GET['id'];
echo"<center><fieldset border='2' style='width: 65%'><h1 align='center'> Student Report</h1><p align='left'>";
$qry=mysqli_query($con,"SELECT * FROM `Student`,`Login`,`Booksissued`,`book` WHERE `Student`.`PRN`=`Login`.`PRN` AND`Student`.`PRN`=`Booksissued`.`PRN`AND `Login`.`PRN`=`Booksissued`.`PRN`AND`Booksissued`.`Code`=`book`.`Code` AND `Student`.`PRN`='$PRN' AND`Login`.`PRN`='$PRN' AND`Booksissued`.`PRN`='$PRN'");
//print_r($qry);
while($row=mysqli_fetch_array($qry))
{
  //print_r($row);
  echo "<br>";
echo"<b>PRN No</b> &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp :&nbsp &nbsp".$row['PRN']."<br><br>";
echo"<b>Student Name</b>  &nbsp &nbsp &nbsp:&nbsp &nbsp ".$row['Student Name']. "<br><br>";
echo"<b>Class</b>  &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp :&nbsp &nbsp".$row['Class']."<br><br>";
echo"<b>Faculty </b> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : &nbsp &nbsp".$row['Faculty']."<br><br>";
echo"<b>No of Books </b>&nbsp &nbsp &nbsp &nbsp &nbsp:&nbsp &nbsp ".$row['numbooks']."<br><br>";
echo"</p>
<table border='1' align='left' cellpadding='10px'>
<tr>
<th>Book Code</th>
<th>Book</th>
<th>Book Name</th>
<th>Issued Date</th>
<th>Returned Date</th>
</tr>";

echo"<tr>";
echo"<td>".$row['Code']."</td>";
echo"<td><img height='150px' width='120px' src=../img/".$row['book']."></td>";
echo"<td>".$row['Bookname']."</td>";
echo"<td>".$row['Issued Date']."</td>";
echo"<td>".$row['Return Date']."</td>";
echo"</tr>";
echo"</table><br>";
}

echo"<br><br> <br> <br> <br> <br> <br> <br> <br> <br><br><br><br><br>";
?>

<button id='btn'onclick='window.print();return false;' style='height: 40px; width: 70px;'class='btn'>Print </button>
<button id='btn1'onclick="window.location.href='sreport.php'" style='height: 40px; width: 70px;'class='hide'> Back </button>
</center>
</fieldset>
</body>
</html>
