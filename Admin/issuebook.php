<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>issue book</title>
  </head>
  <body>
    <fieldset>
      <legend>
        <h1>Assign Book</h1>
      </legend>
      <form action="issuebook.php" method="post">
        <tr>
        <td>PRN:</td> <td><input type="text" name="prn"size="30"></td><br><br>
        </tr>
        <tr>
        <td>book Code: </td> <td><input type="text" name="bookid"size="30"><br><br></td>
      </tr>
      <tr>
      <td height="40"><input type="submit" name= "submit" value="submit"></td>
      </tr>
      </form>
      </fieldset>
  </body>
</html>


<?php
if(isset($_REQUEST['submit']))
{
  include'dbcon.php';
  print_r($_POST);
   echo $prn=$_POST['prn'];
  echo $bookid=$_POST['bookid'];
  $result = mysqli_query($con,"SELECT * FROM Login WHERE PRN='$prn'");
  print_r($result);
while($row = mysqli_fetch_array($result))
{
  print_r($row);
 $id=$row['prn'] ;
 $username= $row['username'];
 $password= $row['password'];
 echo $numbooks=$row['numbooks'];
}
if($numbooks>3)
{
  ?>

  <script>
  alert("cannot issue book limit exceed");
  window.open('booksearch.php','_self');
  </script>

  <?php
}
else
{
  echo $id=$_POST['prn'];
 echo $bid=$_POST['bookid'];
    echo $idate=date('y-m-d');
    echo $rdate=Date('y:m:d', strtotime('+15 days'));

    $sql="INSERT INTO `BooksManagement`(`Code`, `B_id`, `Issuedate`, `Returndate`) VALUES ('$bid','$id','$idate','$rdate')";
        $sql1=mysqli_query($con,"UPDATE Login SET numbooks=numbooks+1 WHERE PRN='$id'");

        $sql2=mysqli_query($con,"UPDATE book SET copies=copies-1 WHERE Code='$bid'");
        $sql3=mysqli_query($con,"INSERT INTO `Booksissued`(`PRN`, `Code`, `Issued Date`, `Return Date`) VALUES ('$bid','$id','$idate','$rdate')");
        $qry3="INSERT INTO `Booksissued`(`PRN`, `Code`, `Issued Date`, `Return Date`) VALUES ('$id','$bid','$idate','$rdate')";
          $sql4=mysqli_query($con,$qry3);

  if (!mysqli_query($con,$sql))
        {
          ?>

          <script>
            alert("error in connection");
            window.open('issuebook.php','_self');
          </script>

          <?php
        }
        else
        {
          ?>

          <script>
            alert("Issued book Successfully");
            window.open('search.php','_self');
          </script>

          <?php
        }
  }
mysqli_close($con);
}
?>
<?php include 'footer.php'; ?>
