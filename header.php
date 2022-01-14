<?php
	//Start session
	session_start();
	//Unset the variables stored in session
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
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
	 b{
		 align: left;
	 }
   button {
		 font-size: 25px;
   background-color: white;
   border:none;
   }
	.search {
		border-width: thick;
		height: 40px;
		width:70%;
	}

	/*assign full width inputs*/
	.user{
		width: 100%;
		padding: 12px 20px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		box-sizing: border-box;
	}

	 set a hover effect for the button
	button:hover {
		opacity: 0.8;
	}

	/*set extra style for the cancel button*/
	.cancelbtn {
		width: auto;
		padding: 10px 18px;
		background-color: #f44336;
	}

	/*centre the display image inside the container*/
	.imgcontainer {
		text-align: center;
		margin: 24px 0 12px 0;
		position: relative;
	}

	/*set image properties*/
	img.avatar {
		width: 30%;
		border-radius: 50%;
	}

	/*set padding to the container*/
	.container {
		padding: 16px;
	}

	/*set the forgot password text*/
	span.psw {
		float: right;
		padding-top: 16px;
	}

	/*set the Modal background*/
	.modal {
		display: none;
		position: fixed;
		z-index: 1;
		left: 0;
		top: 0;
		width: 100%;
		height: 100%;
		overflow: auto;
		background-color: rgb(0, 0, 0);
		background-color: rgba(0, 0, 0, 0.4);
		padding-top: 5px;
	}

	/*style the model content box*/
	.modal-content {
		background-color: #fefefe;
		margin: 5% auto 15% auto;
		border: 1px solid #888;
		width: 40%;
	}

	/*style the close button*/
	.close {
		position: absolute;
		right: 25px;
		top: 0;
		color: #000;
		font-size: 35px;
		font-weight: bold;
	}

	.close:hover,
	.close:focus {
		color: red;
		cursor: pointer;
	}

	/* add zoom animation*/
	.animate {
		-webkit-animation: animatezoom 0.6s;
		animation: animatezoom 0.6s
	}

	@-webkit-keyframes animatezoom {
		from {
			-webkit-transform: scale(0)
		}
		to {
			-webkit-transform: scale(1)
		}
	}

	@keyframes animatezoom {
		from {
			transform: scale(0)
		}
		to {
			transform: scale(1)
		}
	}

	@media screen and (max-width: 100px) {
		span.psw {
			display: block;
			float: none;
		}
		.cancelbtn {
			width: 100%;
		}
	}
	.sear {
		background-image: url(img/search.jpeg);
		background-size: cover;
		width: 40px;
		height: 40px;
	}
	</style>
</head>


<!--###################################################################################################################################-->
<body id="top" bgcolor="#87cefa">
	<header>
	<div class="wrapper row1">
	<fieldset style="border-color:#A04000;border-width: 1px; background-color: #806517;">
		<div id="header" class="clear">
		<div  id="home">
		<font size="300" COLOR="#OOOO80">LIBRARY SYSTEM</font>
	<div align="right">


<!--##################################################################################################################################-->


<img src="img/login.jpeg"height="25"width="25">
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

	<div id="id01" class="modal">

		<form class="modal-content animate" action="student/login.php"method="post">
			<div class="imgcontainer">
				<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
				<img src="img/login.jpeg" alt="Avatar" class="avatar">
			</div>

			<div class="container">
				<label align="left"><b>Username</b></label>
				 &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
				<input class="user" type="text" placeholder="Enter Username" name="uname" required>

				<label align="left"><b>Password</b></label>
				&nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
				<input class="user" type="password" placeholder="Enter Password" name="psw" required>

				<input type="submit" value="Login"name="Login"/> &nbsp &nbsp &nbsp &nbsp  &nbsp
	&nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp
			</div>

			<div class="container" style="background-color:#f1f1f1">
				<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
				&nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp
			</div>
		</form>
	</div>

	<script>
		var modal = document.getElementById('id01');
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}
	</script>

	<!--#############################################################################################################################-->
		 &nbsp / &nbsp
	<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Register</button>

		<div id="id02" class="modal">

			<form class="modal-content animate" action="student/register.php"method="post">
				<div class="imgcontainer">
					<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">×</span>
					<img src="img/login.jpeg" alt="Avatar" class="avatar">
				</div>

				<div class="container">
					<label><b>PRN</b></label>
					&nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
					<input class="user" type="text" placeholder="Enter PRN" name="PRN" required>
					<label><b>Username</b></label>
					&nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
					<input class="user" type="text" placeholder="Enter Username" name="uname1" required>

					<label><b>Password</b></label>
					&nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
					<input class="user" type="password" placeholder="Enter Password" name="psw1" required>

					<input type="submit" value="Register"name="Register"/>&nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp

				</div>

				<div class="container" style="background-color:#f1f1f1">
					<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
				</div>
			</form>
		</div>

		<script>
			var modal1 = document.getElementById('id02');
			window.onclick = function(event) {
				if (event.target == modal1) {
					modal.style.display = "none";
				}
			}
		</script>
<!--#################################################################################################################################-->
	</div>
	</div>
	</div>
	</div>
	<!--####################################################################################################### -->
		<ul>
		<li style="display:inline"><button><a href="index.php"><font size=5>Home</a></button></li>
			<!--##################################################################################################################################-->


			<button onclick="document.getElementById('id03').style.display='block'" style="width:auto; color: #8B008B">Admin Login</button>

				<div id="id03" class="modal">

					<form class="modal-content animate" action="Admin/login.php"method="post">
						<div class="imgcontainer">
							<span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">×</span>
							<img src="img/login.jpeg" alt="Avatar" class="avatar">
						</div>

						<div class="container">
							<label align="left"><b>Username</b></label>
							 &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
							<input class="user" type="text" placeholder="Enter Username" name="uname2" required>

							<label align="left"><b>Password</b></label>
							&nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
							<input class="user" type="password" placeholder="Enter Password" name="psw2" required>
							&nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp
							<input type="submit" value="Login"name="Login2"/>

						</div>

						<div class="container" style="background-color:#f1f1f1">
							<button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</button>
						</div>
					</form>
				</div>

				<script>
					var modal = document.getElementById('id03');
					window.onclick = function(event) {
						if (event.target == modal) {
							modal.style.display = "none";
						}
					}
				</script>
		<li style="display:inline"><button><a href="newarrivals.php">New Arrivals</a></button></li>
		<li style="display:inline"><button><a href="onlinebooks.php">Online Books</a></button></li>
		<li style="display:inline"><button><a href="questionpaper.php">QuestionPaper</a></button></li>
		<li style="display:inline"><button><a href="aboutus.php">About Us</a></button></li>
		</ul>
	</div>
	</fieldset>
<!--################################################################################################################################## -->
		<br>
		<form action="search.php" method="post">
		<center><input class="search" type="text"size="30" placeholder="Search for books"name="search">
			 <button type="submit" class="sear"></button>
			</center>
			</form>
		</header>
		<br><br>
</body>
