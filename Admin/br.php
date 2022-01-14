<?php

   include'dbcon.php';
   print_r($_POST);
   echo"<center>
   <fieldset border='2' style='width: 70%'>
   <h1 align='center'>Student-Book Report</h1>
   <p align='left'>";
   if(isset($_POST['submit']))
   {
      echo $code = $_POST['code'];
      $result = mysqli_query($con,"SELECT * FROM `book`,`Booksissued`,`Student` WHERE `book`.`Code`=`Booksissued`.`Code` AND `Student`.`PRN`=`Booksissued`.`PRN` AND `book`.`Code`='$code' AND`Booksissued`.`Code`='$code'    ");



while($row = mysqli_fetch_array($result))
{
echo "Book Code :  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp".;
echo "Book Name  :   &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp";
echo "Author :  <br>";
echo"</p>";
}
echo"<table border='1' align='left' cellpadding='10px'>";
  echo "<table border='1' style='width=100px'>
   <tr>
   <th>PRN</th>
   <th>Student Name</th>
   <th>Faculty</th>
   <th>Class</th>
   <th>Year of admission</th>
   <th>Issued Date</th>
   <th>Return date</th>
   </tr>";

while($row = mysqli_fetch_array($result))
{

echo "<tr>";
  echo "<td>" .$code= $row['Code'] . "</td>";
  echo "<td>" . $row['Bookname'] . "</td>";
  echo "<td>" . $row['Author']."</td>";
  echo "<td>" . $row['PRN'] . "</td>";
  echo "<td>" . $row['Student Name'] . "</td>";
  echo "<td>" . $row['Faculty'] . "</td>";
  echo "<td>" . $row['Class'] . "</td>";
  echo "<td>" . $row['Year_of_Admission'] . "</td>";
  echo "<td>" . $row['Issued Date'] . "</td>";
  echo "<td>" . $row['Return Date'] . "</td>";
  echo"</tr>";
}
echo "</table>";
echo "<br>";
echo "</table>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<button onclick="window.print();return false;" style="height: 40px; width: 70px;">Print </button>
</center>
</fieldset>";
}
mysqli_close($con);
?>
