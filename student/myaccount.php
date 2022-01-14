<?php
	//Start session
		session_start();
				 //print_r($_SESSION);
				 if(isset($_SESSION['name']))
				 {
					// echo"hii";
				 }
				 else
				 {
					 header('location : ../index.php');
				 }
	//Unset the variables stored in session
	//unset($_SESSION['SESS_username']);
	//unset($_SESSION['SESS_password']);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>My Account</title>
  </head>
  <body bgcolor="#566d7e">
	<fieldset>  <legend> My Account</legend>
      <h1><img src="../img/login.jpeg" alt="log" height="150px" width="120px">
      <?php

	echo "<h1>Welcome \t";
	echo $_SESSION['name']."</h1>";

 	?>
      </h1>
      <?php
        include 'dbcon.php';
        echo "<h2>PRN :".$prn=$_SESSION['PRN']."</h2>";
        $Q=$prn;
        $num=mysqli_query($con,"select * from Login where PRN='$Q'");
        while ($rw=mysqli_fetch_array($num))
	{
	
		$books=$rw['numbooks'];
	}        
        if($books<1)
        {
        	echo"<br><center><h2>No Book Issued</h2></center>";
        }
        else
        {
        $qry="SELECT * FROM `BooksManagement`,`book`,`Login` WHERE `BooksManagement`.`Code`=`book`.`Code` AND `BooksManagement`.`B_id`=`Login`.`PRN` AND `PRN`='$Q'";
        $result=mysqli_query($con,$qry);
        //print_r($result);
        while ($row=mysqli_fetch_array(mysqli_query($con,$qry)))
        {
          echo "<i><h2> <p>No of books Issued : ".$row['numbooks']."</p><h2></i>";
          echo"<table border='1'>
        <tr>
          <th>Book Code</th>
          <th>Book</th>
          <th>Book Name </th>
          <th>Issued Date</th>
          <th>Returned Date</th>
        </tr>";
      echo "  <tr><BR>";
          echo "<td>".$row['Code']."</td>";
          echo "<td><img src='../img/".$row['book']."'height='200px'width='150px'></td>";
          echo "<td>".$row['Bookname']."</td>";
          echo "<td>".$row['Issuedate']."</td>";
          echo "<td>".$row['Returndate']."</td>";
        echo "</tr>";
      }
      }
        ?>
      </table>
      <br><br><br><br>
      </fieldset>
  </body>
</html>
<?php include 'footer.php'; ?>
