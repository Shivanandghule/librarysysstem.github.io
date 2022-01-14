<?php

   include'dbcon.php';
        echo "<h1>Student Report</h1>";
      $result = mysqli_query($con,"SELECT * FROM `Student`,`Login` WHERE `Student`.`PRN`=`Login`.`PRN` ");

      echo "<table border='1' style='width=100px'>
      <tr>
      <th>PRN</th>
      <th>Student Name</th>
      <th>Faculty</th>
      <th>Class</th>
      <th>Contact No</th>
      <th>Year of adm</th>
      <th>Issued Books</th>
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
      }

?>
