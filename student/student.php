<!DOCTYPE html>
<html xml:lang="EN" lang="EN" dir="ltr">
<head>
<title>SOE LIBRARY INFORMATION SYSTEM</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="../styles/layout.css" type="text/css" />
<!-- Homepage Specific Elements -->
<script type="text/javascript" src="../scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="../scripts/jquery-ui-
1.7.2.custom.min.js"></script>
<script type="text/javascript" src="../scripts/jquery.tabs.setup.js"></script>
<!-- End Homepage Specific Elements -->
</head>
<body id="top">
<div class="wrapper row1">
Division Of Computer Science And Engineering
Page 41Library Management System
<div id="header" class="clear">
<div class="fl_left">
<h1><a href="homepage.php">SOE LIBRARY MANAGEMENT
SYSTEM</a></h1>
<p></p>
</div>
<div class="fl_right">
<ul>
<li><a
href="http://localhost/xampp/project/library/homepage.php">Home</a></li>
<li><a
href="http://localhost/xampp/project/library/contact/Contactus.php">Contact
Us</a></li>
<li><a
href="http://localhost/xampp/project/library/egateway/egateway.php">E-
Gateway</a></li>
<li><a
href="http://localhost/xampp/project/library/studentlogin/studentlogin.php">Student
Login</a></li>
<li ><a
href="http://localhost/xampp/project/library/teachrlogin/teacherlogin.php">Teacherl
ogin</a></li>
<li><a
href="http://localhost/xampp/project/library/admin/adminlogin.php">Adminlogin</a
></li>
</ul>
<form action="#" method="post" id="sitesearch">
<fieldset>
<strong>Search:</strong>
<input type="text" value="Search Our webiste for books;"
onfocus="this.value=(this.value=='Search Our website for books;')? '' : this.value ;"
/>
<input type="image" src="../images/search.gif" id="search" alt="Search" />
</fieldset>
</form>
</div>
</div>
</div>
<!--
####################################################################
################################### -->
<div class="wrapper row2">
<div class="rnd">
<!-- ###### -->
<div id="topnav">
Division Of Computer Science And Engineering
Page 42Library Management System
<ul>
<li class="active"><a href="homepage.php">Home</a></li>
<li><a href="newarrivals.php">New Arrivals</a></li>
<li><a href="onlinebooks.php">Online Books</a></li>
<li><a href="egallery.php">E Gallery</a></li>
<li><a href="questionpaper.php">Question Paper</a></li>
<li><a href="aboutus.php">About Us</a></li>
<li><a href="bookissue.php">Book Issue </a></li>
<li class="last"><a href="#"></a></li>
</ul>
</div>
<!-- ###### -->
</div>
</div>
<!--
####################################################################
################################### -->
<div class="wrapper">
<div id="featured_slide" class="clear">
<!-- ###### -->
<div class="overlay_left"></div>
<div id="featured_content">
<div class="featured_box" id="fc1"><img src="../images/demo/slider/1.gif"
alt="" />
<div class="floater">
<h2>All ABOUT SOE LIBRARY</h2>
<p>School oF Engineering Library or the S.O.E library is one of the finest
library in kerela having a good collection of books related to various subjects</p>
<p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
</div>
</div>
<div class="featured_box" id= "fc2"><img src="../images/demo/slider/2.gif"
alt="" />
<div class="floater">
<h2>Existence</h2>
<p>School oF Engineering library came into existence in year 1995 and from
then on it has been a premier source of information for college students</p>
<p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
</div>
</div>
<div class="featured_box" id="fc3"><img src="../images/demo/slider/3.gif"
alt="" />
<div class="floater">
<h2>Collection</h2>
<p>School of Engineering Library has a collection of over 25000 books
related to various subjects in engineering</p>
Division Of Computer Science And Engineering
Page 43Library Management System
<p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
</div>
</div>
<div class="featured_box" id="fc4"><img src="../images/demo/slider/4.gif"
alt="" />
<div class="floater">
<h2>E-Repository</h2>
<p>School oF Engineering Library has a collection of 6000 cds and 2800
online journals and also has a section where teachers upload their lectures notes and
student can download them.</p>
<p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
</div>
</div>
<div class="featured_box" id="fc5"><img src="../images/demo/slider/5.gif"
alt="" />
<div class="floater">
<h2>Latest News and events</h2>
<p></p>
<p class="readmore"><a href="#">Click here to go to latest news
page;</a></p>
</div>
</div>
</div>
<ul id="featured_tabs">
<li><a href="#fc1">All About The Library</a></li>
<li><a href="#fc2">Existence</a></li>
<li><a href="#fc3">Collection of Books</a></li>
<li><a href="#fc4">E-Repository</a></li>
<li class="last"><a href="#fc5">Latest News &amp; Events</a></li>
</ul>
<div class="overlay_right"></div>
<!-- ###### -->
</div>
</div>
<!--
####################################################################
################################### -->
<div class="wrapper row3">
<div class="rnd">
<div id="container" class="clear">
<!--
####################################################################
################################### -->
<div id="homepage" class="clear">
<!-- ###### -->
<div id="left_column">
Division Of Computer Science And Engineering
Page 44Library Management System
<h2>Sugeestion</h2>
<div class="imgholder"><a href="#"><img
src="../images/images/suggestions.jpg" alt="" /></a></div>
<h2>Book request</h2>
<div class="imgholder"><a href="#"><img
src="../images/images/bookrequest1.jpg" alt="" /></a></div>
<h2>Account creation</h2>
<div class="imgholder"><a href="#"><img
src="../images/images/account.jpg" alt="" /></a></div>
<h2>Photos</h2>
<div class="imgholder"><a href="#"><img src="../images/images/photos.jpg"
alt="" /></a></div>
</div>
<!-- ###### -->
<div id="latestnews">
<h2>ENTER YOUR DETAILS</h2>
<p><span class="error">* required field.</span></p>
<table>
<form action="insertaccount.php" method="POST">
<legend>Student Information:</legend>
<tr>
<td>Library Id:</td> <td><input type="text" name="libid" size="30">
<span class="error">* </span><br><br></td>
</tr>
<tr>
<td>Registration No: </td> <td><input type="text" name="regno" size="30">
<span class="error">* </span><br><br></td>
</tr>
<tr>
<td>Name: </td> <td> <input type="text" name="stuname" size="30">
<span class="error">* </span><br><br></td>
</tr>
<tr>
<td>Branch: </td> <td> <select name="branch" size="1" tabindex="7">
<option selected="selected">Computer Science</option>
<option>Electronics & Communication</option>
<option>Electrical & Electronics</option>
<option>Mechanical</option>
<option>Safety & Fire</option>
<option>Civil</option>
<option>Information Technology</option>
</select>
<span class="error">* </span><br><br></td>
Division Of Computer Science And Engineering
Page 45Library Management System
</tr>
<tr>
<td>Semester: </td> <td><select name="semester" size="1" tabindex="8">
<option selected="selected">1&2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
</select>
<span class="error">* </span><br><br></td>
</tr>
<tr>
<td>Section: </td> <td><select name="section" size="1" tabindex="2">
<option selected="selected">A</option>
<option>B</option>
</select>
<span class="error">* </span><br><br></td>
</tr>
<tr>
<td>Year of adm:</td> <td> <input type="text"name="yearofadm" size="30">
<span class="error">* </span><br><br></td>
</tr>
<tr>
<td>Email:</td> <td> <input type="email"name="email" size="30">
<span class="error">* </span><br><br></td>
</tr>
<tr>
<td>Username:</td> <td> <input type="text"name="username" size="30">
<span class="error">* </span><br><br></td>
</tr>
<tr>
<td>Password:</td> <td> <input type="password"name="password" size="30">
<span class="error">* </span><br><br></td>
</tr>
<tr>
<td><p>Click the submit</p></td>
</tr>
<tr>
<td height="40"><input type="submit" name= "submit" value="submit" action=
"insertaccount.php"></td>
</tr>
</form>
</table>
Division Of Computer Science And Engineering
Page 46Library Management System
</div>
<!-- ###### -->
<!-- ###### -->
</div>
<!--
####################################################################
################################### -->
<!--
####################################################################
################################### -->
<div id="academiclinks" class="clear">
<h2>Quickly Find What You Are Looking For</h2>
<div class="linkbox">
<ul>
<li><a
href="http://localhost/xampp/project/library/homepage.php">&raquo;
Home</a></li>
<li><a
href="http://localhost/xampp/project/library/studentlogin/studentlogin.php">&raquo
; Student Login</a></li>
<li><a
href="http://localhost/xampp/project/library/teacherlogin/teacherlogin.php">&raquo
; Teacher Login</a></li>
<li><a
href="http://localhost/xampp/project/library/adminlogin/adminlogin.php">&raquo;
Adminlogin</a></li>
<li><a
href="http://localhost/xampp/project/library/newarrivals/newarrivals.php">&raquo;
New Arrivals</a></li>
<li><a
href="http://localhost/xampp/project/library/onlinebooks/onlinebooks">&raquo;
Online Books</a></li>
<li><a
href="http://localhost/xampp/project/library/egallery/egallery.php">&raquo; E-
Gallery</a></li>
<li><a
href="http://localhost/xampp/project/library/aboutus/aboutus.php">&raquo; About
Us</a></li>
<li><a
href="http://localhost/xampp/project/library/contactus/contactus.php">&raquo;
Contact Us</a></li>
Division Of Computer Science And Engineering
Page 47Library Management System
<li><a
href="http://localhost/xampp/project/library/questionpaper/questionpaper.php">&ra
quo; Question Papers</a></li>
<li><a
href="http://localhost/xampp/project/library/latestnews/latestnews.php">&raquo;
Latest Events & News</a></li>
</ul>
</div>
<!--
####################################################################
################################### -->
</div>
</div>
</div>
<!--
####################################################################
################################### -->
<!--
####################################################################
################################### -->
<div class="wrapper">
<div id="copyright" class="clear">
<p class="fl_left">Copyright &copy; 2013 - All Rights Reserved for SOE
LIBRARY-</p>
</div>
</div>
</body>
</html>
<?php
// define variables and set to empty values
$libidErr = $regnoErr = $stunameErr = $branchErr = $semesterErr = $sectionErr =
$yearofadmErr = $usernameErr = $passwordErr = "";
$libid = $regno = $stuname = $branch = $semester = $section = $yearofadm =
$username = $password = "";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
if (empty($_POST["libid"]))
{$libidErr = "libid is required";
echo $libidErr;
include("createaccount.php");
}
Division Of Computer Science And Engineering
Page 48Library Management System
else
{$libid= test_input($_POST["libid"]);}
if (empty($_POST["regno"]))
{$regnoErr = "Registration number is required";
echo $regnoErr;
include("createaccount.php");
}
else
{$regno = test_input($_POST["regno"]);}
if (empty($_POST["stuname"]))
{ $stunameErr = "student name is required";
echo $stunameErr;
include("createaccount.php");
}
else
{$stuname = test_input($_POST["stuname"]);}
if (empty($_POST["branch"]))
{$branchErr = " branch is required" ;
echo $branchErr;
include("createaccount.php");
}
else
{$branch = test_input($_POST["branch"]);
}
if (empty($_POST["semester"]))
{$semesterErr = "semester is required";
echo $semesterErr;
include("createaccount.php");
}
else
{$semester = test_input($_POST["semester"]);}
if (empty($_POST["section"]))
{$sectionErr = "section is required";
echo $sectionErr;
include("createaccount.php");
}
else
{$section = test_input($_POST["section"]);}
Division Of Computer Science And Engineering
Page 49Library Management System
if (empty($_POST["yearofadm"]))
{$yearofadmErr = "year of adm. is required";
echo $yearofadmErr;
include("createaccount.php");
}
else
{$yearofadm = test_input($_POST["yearofadm"]);
}
if (empty($_POST["username"]))
{$usernameErr = "username is required";
echo $usernameErr;
include("createaccount.php");
}
else
{$username = test_input($_POST["username"]);
}
if (empty($_POST["password"]))
{$passwordErr = "password is required";
echo $passwordErr;
include("createaccount.php");
}
else
{$password = test_input($_POST["password"]);}
}
function test_input($data)
{
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>
<?php
$con=mysqli_connect("localhost","root","","admin");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
Division Of Computer Science And Engineering
Page 50Library Management System
$sql="INSERT INTO
student(libid,regno,stuname,branch,semester,section,yearofadm,email,username,pass
word)
VALUES
('$_POST[libid]','$_POST[regno]','$_POST[stuname]','$_POST[branch]','$_POST[s
emester]','$_POST[section]','$_POST[yearofadm]','$_POST[email]','$_POST[userna
me]','$_POST[password]')";
if (!mysqli_query($con,$sql))
{
die('Error: ' . mysqli_error($con));
}
echo "wait for conformation";
mysqli_close($con);
?>
