<?php
  include 'header.php';
 ?>
 <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 900px;
  height: 70%;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
.news {
  background-color: #DCDCDC;
  display: inline-block;
}
legend {
  background-color: white;
}
.new {
  height: 350px;
  width: 100%;
  align-items: center;
}
</style>
</head>
<body>
<br><br>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="img/b1.jpeg" style="width:900px;height:400px">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="img/b2.jpg" style="width:900px;height:400px">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="img/b3.jpeg" style="width:900px;height:400px">
  <div class="text"></div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<fieldset>
<?php
	include 'dbcon.php';

$srh=$_POST['search'];
//echo $srh="computer";
$result = mysqli_query($con,"SELECT * FROM book");
echo "hii";
while($row = mysqli_fetch_array($result))
{
echo "<table>";
echo "<tr>";
echo "<td rowspan='5'><img src=img/".$row['book']." style='max-width:220px;height:250px' align='right'></td>";
echo "</tr>";
echo "<tr>";
echo "<th>Book Name</th><td>" . $row['Bookname'] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Author</th><td>" . $row['Author'] ."</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Publication</th><td>" . $row['Publication'] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Subject</th><td>" . $row['Category'] . "</td>";
echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</fieldset>
<center>
<fieldset style="width:90%;border-style: solid;border-width: 4px; height:400px">
  <legend>&nbsp Latest News and Announcement &nbsp</legend>
<marquee behavior="scroll" direction="up" scrolldelay="-15" class="new">
<a href="news.php">
  <fieldset class="news">
  	<p>
  	<b>&raquo;</b> विद्यार्थी सुरक्षा विमा, विद्यार्थी कल्याण निधी, विद्यार्थी आरोग्य सेवा योजना, आपत्कालीन निधी, विद्यापीठ क्रीडा मंडळ व शारीरिक शिक्षण मंडळ निधी, नोंदणी शुल्क, संगणक शुल्क व विकास निधीतील विद्यापीठ हिस्सा ऑनलाईन पद्धतीने पाठविण्याच्या मुदतवाढीबाबत.	5/19/2021	Attachment
    </p>
    <p>
  	 <b>&raquo;</b> मोडी लिपी आणि कागदपत्रे प्रमाणपत्र ऑनलाइन अभ्यासक्रम इतिहास विभाग ०१ जून ते ०१ जुलै २०२१.	5/19/2021	Attachment
  	</p>
  	<p>
  	<b>&raquo;</b> Eligibility last Date for Professional Courses for the Academic Year 2020-2021.	5/17/2021	Attachment
  	</p>
  	<p>
  	<b>&raquo;</b> Department of Zoology is organizing an International Symposium on 'Advances in Comparative Endocrinolog and Behavioural Ecology' From 1st-3rd July 2021..	5/16/2021
  	</p>
  	<p>
  	<b>&raquo;</b> Dates of Commencement and Conclusion of terms of U.G./P.G. Courses for the Academic Year 2021-22 For affiliated Colleges/recognised Institutes.	5/14/2021	Attachment
  	</p>
  	<p>
  	<b>&raquo;</b> Dates of Commencement and Conclusion of terms of U.G. /P.G. Courses for the Academic Year 2021-22 For University Departments..	5/14/2021	Attachment
  	</p>
  	<p>
  	<b>&raquo;</b> कोरोना विषाणू (COVID-19) प्रसारावरील प्रतिबंधात्मक उपाययोजना - विद्यापीठ कार्यालयातील शिक्षक / अधिकारी / सेवक यांच्या उपस्थितीवर मर्यादितकालावधीसाठी निर्बंध आणणेबाबत. (Break The Chain)	5/14/2021	Attachment
  	</p>
  	<p>
  	<b>&raquo;</b> विद्यापीठातील विविध विभागांमध्ये टिपणीद्वारे/रिटेनरशिप तत्वावर हंगामी/कंत्राटी स्वरुपात करण्यात आलेल्या नियुक्त्यांबाबत.	5/14/2021	Attachment
  	</p>
  	<p>
  	<b>&raquo;</b> Survey of scientific publication practices among SPPU researchers.	5/10/2021	Attachment
  	</p>
  	<p>
  	<b>&raquo;</b>	Survey of scientific publication practices among SPPU researchers.	5/10/2021	Attachment
  	</p>
  	<p>
  	<b>&raquo;</b>	सुधारित अंशराशीकरनाच लाभ मिळण्यासाठीचा विकल्प सादर करणेबाबत....	3/13/2021	Attachment
  	</p>
  	</fieldset>
  </a>
</marquee>
</fieldset>
</center>
</body>
</html>
<?php include_once 'footer.php'; ?>
