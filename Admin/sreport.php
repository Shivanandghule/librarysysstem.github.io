
<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Student Reoprt</title>
  </head>
  <body>
    <fieldset>
      <legend> Enter Student Details</legend>
      <form action="sreport.php" method="post">
        <tr>
        <td>PRN &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : &nbsp &nbsp &nbsp</td> <td><input type="text" name="prn"size="30"><br><br></td>
        </tr>
        <tr>
        <td>Student Name &nbsp &nbsp &nbsp : &nbsp &nbsp &nbsp </td> <td><input type="text" name="name"size="30"><br><br></td>
      </tr>
      <tr>
      <td height="40"><input type="submit" name= "submit" value="submit"></td>
      </tr>
      </form>
      </fieldset>
      <br><br>
      <center><button style='height: 40px; width: 12 auto;0px;' onclick="window.location.href='studentreport.php'">Full Report</button></center>
  </body>
</html>


<?php

   include'dbcon.php';

   if(isset($_POST['submit']))
   {
       $PRN = $_POST['prn'];
       $name = $_POST['name'];
      $result = mysqli_query($con,"SELECT * FROM `Student`,`Login` WHERE `Student`.`PRN`=`Login`.`PRN` AND `Student`.`PRN`='$PRN' && `Login`.`PRN`='$PRN' || `Student`.`Student Name`='$name' ");

      echo "<table border='1' style='width=100px'>
      <tr>
      <td>PRN</td>
      <td>Student Name</td>
      <td>Faculty</td>
      <td>Class</td>
      <td>Contact No</td>
      <td>Year of adm</td>
      <td>Issued Books</td>
      </tr>";

      while($row = mysqli_fetch_array($result))
      {
        echo "<tr>";
        echo "<td>" . $row['PRN'] . "</td>";
        echo "<td>" . $row['Student Name'] . "</td>";
        echo "<td>" . $row['Faculty'] . "</td>";
        echo "<td>" . $row['Class'] . "</td>";
        echo "<td>" . $row['contact'] . "</td>";
        echo "<td>" . $row['Year_of_Admission'] . "</td>";
        echo "<td>" . $row['numbooks'] . "</td>";
        echo"</tr>";
        $r=$row['PRN'];
      }
      echo "</table>";
      echo "<br>";
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <body>
    <br><br>
    <center><button style='height: 40px; width: 70px;' onclick="window.location.href='streport.php?id=<?php echo "$r";?>'">Print</button></center>
  </body>
</html>
<?php include 'footer.php'; ?>
