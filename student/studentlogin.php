<?php
//Start session
session_start();
//Unset the variables stored in session
unset($_SESSION['SESS_username']);
unset($_SESSION['SESS_password']);
?>
<?php
session_start();
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="library"; // Database name
$tbl_name="studentlogin"; // Table name
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");
// username and password sent from form
$myusername=$_POST['username'];
$mypassword=$_POST['password'];
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and
password='$mypassword'";
$result=mysql_query($sql);
// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
if($count>0)
{ session_regenerate_id();
$member = mysql_fetch_assoc($result);
$_SESSION['SESS_username'] = $member['username'];
$_SESSION['SESS_password'] = $member['password'];
session_write_close();
header("location:studentlogin1.php");
exit();
}else {
//Login failed
$errmsg_arr[] = 'user name and password not found';
$errflag = true;
if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
session_write_close();
header("location: login.php");
exit();
}
}
?>
