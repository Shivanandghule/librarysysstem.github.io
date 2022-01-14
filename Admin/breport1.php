
<center><fieldset style='width: 70%; border-width:5px;'><h1 align='center'>Student-Book Report</h1><p align='left'>
<?php

   include'dbcon.php';
   //echo "hii";
   //print_r($_GET);
   echo"";
   /*if(isset($_POST['submit']))
   {*/
     $code =$_GET['code'];
    $result = mysqli_query($con,"SELECT * FROM `book`,`Booksissued`,`Student` WHERE `book`.`Code`=`Booksissued`.`Code` AND `Student`.`PRN`=`Booksissued`.`PRN` AND `book`.`Code`='$code' AND`Booksissued`.`Code`='$code'    ");
  //  print_r($result);


while($row1 = mysqli_fetch_array($result))
{
echo "<b>Book Code </b>:  &nbsp  &nbsp ".$row1['Code']."<br><br>";
echo "<b>Book Name  </b>:  &nbsp &nbsp".$row1['Bookname']."<br><br>" ;
echo "<b>Author </b>:   &nbsp &nbsp".$row1['Author']."<br><br>";
echo"</p>";
echo "<br>";
echo"<table border='1' align='left' cellpadding='10px'>
   <tr>
   <th>PRN</th>
   <th>Student Name</th>
   <th>Faculty</th>
   <th>Class</th>
   <th>Year of admission</th>
   <th>Issued Date</th>
   <th>Return date</th>
   </tr>";
echo "<tr>";
  echo "<td>" . $row1['PRN'] . "</td>";
  echo "<td>" . $row1['Student Name'] . "</td>";
  echo "<td>" . $row1['Faculty'] . "</td>";
  echo "<td>" . $row1['Class'] . "</td>";
  echo "<td>" . $row1['Year_of_Admission'] . "</td>";
  echo "<td>" . $row1['Issued Date'] . "</td>";
  echo "<td>" . $row1['Return Date'] . "</td>";
  echo"</tr>";
}

echo "</table>";
echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
echo "";

mysqli_close($con);
?>
</center>
</fieldset>
<center><button onclick='window.print();return false;' style='height: 40px; width: 70px;'>Print </button>
<button id='btn1'onclick="window.location.href='breport.php'" style='height: 40px; width: 70px;'class='hide'> Back </button>
</center>
