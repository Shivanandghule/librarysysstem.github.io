
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
        <h1>book Manage</h1>
      </legend>
      <h2>enter details</h2>
      <form action="bookreturn.php" method="post">
        <tr>
        <td>PRN &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp : &nbsp &nbsp &nbsp</td> <td><input type="text" name="prn"size="30" required><br><br></td>
        </tr>
        <tr>
        <td>book Code &nbsp &nbsp &nbsp:&nbsp &nbsp &nbsp </td> <td><input type="text" name="code"size="30" required><br><br></td>
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
 $id=$_POST['prn'];
 $bid=$_POST['code'];
$result = mysqli_query($con,"SELECT * FROM `BooksManagement` WHERE `Code`='$bid' && `B_id`='$id' ");

while ($row=mysqli_fetch_array($result))
{
  echo $Idate=$row['Issuedate'];
   echo $Rdate=$row['Returndate'];

}

if ($Rdate>$Idate+15)
{
  ?>
  <script>
  alert('you need to Pay fine Rs.150');
  </script>
  <?php
}

$rowcount=mysqli_num_rows($result);
if($rowcount>0)
{
  $sql=mysqli_query($con,"UPDATE `Login` SET `numbooks`=`numbooks`-1 WHERE `PRN`='$id' ");
  $sql1=mysqli_query($con,"UPDATE `book` SET `copies`=`copies`+1 WHERE `Code`='$bid'");
  $sql2=mysqli_query($con,"DELETE FROM `BooksManagement` WHERE `Code`='$bid' && `B_id`='$id'");

    ?>
    <script>
    alert('book return Successfully');
    window.open('index.php','_self')
    </script>
    <?php
}
else
?>
<script>
alert('no book issued');
window.open('index.php','_self')
</script>
<?php
mysqli_close($con);
}
?>
<?php include 'footer.php'; ?>
