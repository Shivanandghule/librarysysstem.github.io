<?php
require '../include/connection.php';
$result = mysqli_query($con,"SELECT * FROM student");
while($row = mysqli_fetch_array($result))
{
$libid=$row['libid'] ;
$regno= $row['regno'] ;
$name= $row['stuname'] ;
$branch= $row['branch'] ;
$semester= $row['semester'] ;
$section= $row['section'] ;
$yearofadm= $row['yearofadm'];
$email=$row['email'];
$username= $row['username'];
$password= $row['password'];
}
mysqli_close($con);
?>
<?php
require '../include/connection1.php';
$admin="admin@soelibrary.com";
$sql="INSERT INTO student(Libid,regno,stuname,branch,semester,section,yearofadm)
VALUES
('$libid','$regno','$name','$branch','$semester','$section','$yearofadm')";
$result="INSERT INTO studentlogin(logid,username,password,numbooks)
VALUES
('$libid','$username','$password','')";
if (!mysqli_query($connection,$sql))
{
die('Error1: ' . mysqli_error($connection));
}
else if (!mysqli_query($connection,$result))
{
die('Error2: ' . mysqli_error($connection));
}
else
mail($email,"registrationdetails","you are registered pls login with ur email id and
password","From: $admin\n");
echo"added 1 record";
mysqli_close($connection);
?>
<?php
require '../include/connection.php';
$result = mysqli_query($con,"SELECT * FROM student");
while($row = mysqli_fetch_array($result))
{
$libid=$row['libid'] ;
$regno= $row['regno'] ;
$name= $row['stuname'] ;
$branch= $row['branch'] ;
$semester= $row['semester'] ;
$section= $row['section'] ;
Division Of Computer Science And Engineering
Page 37Library Management System
$yearofadm= $row['yearofadm'];
$email=$row['email'];
$username= $row['username'];
$password= $row['password'];
}
$sql=mysqli_query($con,"DELETE FROM student WHERE libid='$libid'");
mysqli_close($con);
?>
