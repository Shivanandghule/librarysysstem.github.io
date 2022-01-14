<?php
	//Start session
	session_start();
			 //print_r($_SESSION);
			 if(isset($_SESSION['name']))
			 {
				 //echo"hii";
			 }
			 else
			 {
				 header('location : ../index.php');
			 }
?>
<!DOCTYPE html>
<html xml:lang="EN" lang="EN" dir="ltr">

<head>
	<title>COLLEGE LIBRARY Management SYSTEM</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta http-equiv="imagetoolbar" content="no" />
	<style>
   a {
   font-size:25px;
   text-decoration:none;
   }
   button {
   background-color: white;
   border:none;
   }
   button:hover {
   background-color: yellow;
   color: red;
	}
	input {
		border-width: thick;
		height: 40px;
	}

	.dropdown {
	  overflow: hidden;
	}

	.dropdown .dropbtn {
	  cursor: pointer;
	  font-size: 25px;
	  color: #000080;
	  background-color: white;
	  font-family: inherit;
	  margin: 0;
	}

	.navbar a:hover, .dropdown:hover .dropbtn, .dropbtn:focus {
	  background-color: red;
	}

	.dropdown-content {
	  display: none;
	  background-color: #f9f9f9;
	  min-width: 160px;
	  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	  z-index: 1;
	}

	#Student{
		position: absolute;
		left:350px;
	}

	#book{
		position: absolute;
		left:130px;
	}
	.dropdown-content a {
	  float: none;
	  color: brown;
	  text-decoration: none;
	  display: block;
	  text-align: center;
	}

	.dropdown-content a:hover {
	  background-color: yellow;
	}

	.show {
	  display: block;
	}
	.sticky
	{
	  position: -webkit-sticky;
	  position: sticky;
	  top:0;
	}
	  .toright
	  {
	    position: absolute;
	    right:16px;
	    text-align: right;

	  }
	  a.active
	  {
	    background-color: ;
	  }
		th{
			font-size:20px;
			padding: 10px;
		}
		td{

			padding:10px;
		}


	</style>
</head>


<!--###################################################################################################################################-->
<body id="top" bgcolor="#87cefa">
	<div class="wrapper row1">
	<fieldset style="border-color:#A04000;border-width: 1px; background-color: #806517;">
		<div id="header" class="clear">
		<div  id="home">
		<font size="400" COLOR="white">Admin Dashboard</font>

	<div align="right"><button><a href="logout.php"style="text-align:right;">Logout</a></button>
	</div>
	</div>
	</div>
	</div>
	<!--####################################################################################################### -->
		<ul>
		<button><a href="index.php"><font size=5>Home</font></a></button>
			<li class="dropdown"style="display:inline">
		  <button class="dropbtn" onclick="book()" onmouseout="none">Manage books

		  </button>
		  <li class="dropdown-content" id="book">
		    <a href="addbooks.php">Add Books</a>
		    <a href="booksearch.php">Search books</a>
		    <a href="breport.php">Report</a>
		  </li>
		</li>
		  <li class="dropdown"style="display:inline">
		  <button class="dropbtn" onclick="Student()" onmouseout="none">Manage Student
		  </button>
		  <li class="dropdown-content" id="Student">
				<a href="search.php">Search</a>
		    <a href="issuebook.php">Issue Books</a>
		    <a href="bookreturn.php">Return Books</a>
				<a href="sreport.php">student Reoprt</a>
			</li>
		<li style="display:inline"><button><a href="onlinebooks.php">Online Books</a></button></li>
		<li style="display:inline"><button><a href="aboutus.php">About Us</a></button></li>
		</ul>
		</div>
	</fieldset>
<!--################################################################################################################################## -->




	<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function book() {
  document.getElementById("book").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var book = document.getElementById("book");
    if (book.classList.contains('show')) {
      book.classList.remove('show');
    }
  }
}
function Student() {
  document.getElementById("Student").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var Student = document.getElementById("Student");
    if (admin.classList.contains('show')) {
      admin.classList.remove('show');
    }
  }
}
</script>
<br>
<br>
</body>
</html>
