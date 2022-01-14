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
    <title></title>
  </head>
  <body bgcolor="#c8b560">
    <table>
    <tr>
    <td>
    <a href="book_arrival/origin.php" class="image1" target="info"><img src="../img/Origin_of_Species.jpg" height="200px" width="150px"></a>
    </td>
    <td> <h2>Origin of Species</h2> </td>
  </tr>
  <tr>
    <td>
    <a href="book_arrival/java.php" class="image2" target="info"><img src="../img/java.jpeg" height="200px" width="150px"> </a>
    </td>
    <td> <h2>Effective Java</h2> </td>
    </tr>
    <tr>
    <td>
     <a href="book_arrival/agri_eco.php" class="image3" target="info"><img src=" ../img/agricultural Eco.jpg" height="200px" width="150px"> </a>
    </td>
    <td> <h2>Agricultural economics</h2> </td>
  </tr>
    <tr>
    <td>
      <a href="book_arrival/agronomy.php" class="image4" target="info"><img src=" ../img/Agronomy.jpeg" height="200px" width="150px"> </a>
    </td>
    <td> <h2>Introduction to Agronomy</h2> </td>
    </tr>
    <tr>
    <td>
     <a href="book_arrival/edu_psy.php" class="image5" target="info"><img src=" ../img/0000EducatPsy.png" height="200px" width="150px"> </a>
    </td>
    <td> <h2>Educational Psychology</h2> </td>
  </tr>
    <tr>
    <td>
     <a href="book_arrival/soil.php" class="image6" target="info"><img src=" ../img/Fundamentals-Of-Soil-Science-2nd-Edition_146823.jpg" height="200px" width="150px"> </a>
    </td>
    <td> <h2>Fundamentals of Soil Science</h2> </td>
    </tr>
    	</table>
  </body>
</html>
