<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Book Report</title>
  </head>
  <body>
    <fieldset>
      <legend> Enter Book Details</legend>
      <form action="breport.php" method="post">
        <tr>
        <td>Book Code:</td> <td><input type="text" name="code"size="30"><br><br></td>
        </tr>
      <tr>
      <td height="40"><input type="submit" name= "submit" value="submit"></td>
      </tr>
      </form>
      </fieldset>
      <center><button style='height: 40px; width: 12 auto;0px;' onclick="window.location.href='bookreport.php'">Full Report</button></center>
  </body>
</html>


<?php

   include'dbcon.php';
   //print_r($_POST);

   if(isset($_POST['submit']))
   {
      echo $code = $_POST['code'];
      $result = mysqli_query($con,"SELECT * FROM `book`,`Booksissued`,`Student` WHERE `book`.`Code`=`Booksissued`.`Code` AND `Student`.`PRN`=`Booksissued`.`PRN` AND `book`.`Code`='$code' AND`Booksissued`.`Code`='$code'    ");
     echo "<table border='1' style='width=100px'>
      <tr>
      <th>book Code</th>
      <th>book name</th>
      <th>Author</th>
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
    }
    mysqli_close($con);
?>
<center><button style='height: 40px; width: 12 auto;0px;' onclick="window.location.href='breport1.php?code=<?php echo"$code"; ?>'">print</button></center>
<?php include 'footer.php'; ?>
