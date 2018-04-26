<!DOCTYPE html>
<html>
<head>
    <title>Mark's Blog</title>
    <link href="../css/StyleSheet.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../res/mainPg/markphotofavicon.ico">
<style>
    .show {display:inline-block;}
    .showInfo {display:inline-block;}
    /* Slideshow container */
#slideshow-container {
  max-width: 1800px;
  position: relative;
  margin-left: auto;
  margin-right: auto;
  margin-bottom: 30px;
}
.Slides{
  display: none;
}
.dot{
  cursor:pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;   
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  
  border-radius: 0 3px 3px 0;
}
/* Slideshow css */
/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}
.activeDOT{
    background-color: #717171;
    height:25px;
    width:25px;
    margin-top:15px;
    
}
.ImageCenter{
    display: block;
    margin-left: auto;
    margin-right: auto;
}

</style>
</head>
<body>
    <section>
        <header>
            <a href="../html/index.php">
                <img id = "logo" class = "scalePic" src="../res/mainPg/Untitled8.png" alt="Main Logo" align="left" />
            </a>
            <h1>Wedding Photography, Photo Booth, and Videography</h1>
            <h2 id = "title">Dayton, Cincinnati, and Columbus</h2>
            <nav class="menu">
                <ul>
                    <li><a href="index.php"class = "menuLink">Home</a></li>
                         <li><div class = "dropdown">
                            <button class = "dropbtnInfo">Photos</button>
                                <div id="infoDropdown" class="dropdown-content-info">
                                    <a href="../html/photosMain.php"class = "menuLink drop">Weddings</a>
                                    <a href="../html/headshots.php"class = "menuLink drop">Headshots</a>
                                    <a href="../html/RealEstate.php"class = "menuLink drop">Real Estate</a>
                                    <a href ="../html/Modeling.php" class = "menuLink drop">Modeling</a>
                              </div>  
                        
                        </div>
                    </li>
                    <li><a href="videosMain.php"class = "menuLink">Videos</a></li>
                    <li><a class="active"href="blogMain.php">Blog</a></li>
                        <li><div class="dropdown">
                          <button onclick="infoFunct()" class = "dropbtnInfo">Information</button>
                              <div id="infoDropdown" class="dropdown-content-info">
                                    <a href="infoMain.php"class = "menuLink">Contact</a>
                                    <a href="pricing.php"class = "menuLink">Pricing</a>
                                    <a href="testimonials.php"class = "menuLink">Testimonials</br>and Reviews</a>
                              </div>
                        </div>
                    </li>
                </ul>
            </nav>         
            </br>
        </header>
    </section>
    <section id = "SlideShow">
        <div id = "slideshow-container">
            <div class = "Slides fade">
               <img class = "ImageCenter scalePic" src = "../res/mainPg/mainPic (12)" width = "500"> 
            </div>
            <div class = "Slides fade">
               <img class = "ImageCenter scalePic" src = "../res/pic2.jpg" width = "500"> 
            </div>
            <div class = "Slides fade">
               <img class = "ImageCenter scalePic" src = "../res/modeling/modeling (3).jpg" width = "500"> 
            </div>
            <div class = "Slides fade">
               <img class = "ImageCenter scalePic" src = "../res/modeling/modeling (10).jpg" width = "500"> 
            </div>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span> 
            <span class="dot" onclick="currentSlide(2)"></span> 
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
        </div>
        <script>
var slideIndex = 1;
showSlidesManual(slideIndex);
showSlidesAuto();
function plusSlides(n) {
  showSlidesManual(slideIndex += n);
}

function currentSlide(n) {
  showSlidesManual(slideIndex = n);
}

function showSlidesManual(n) {
  var i;
  var slides = document.getElementsByClassName("Slides");
  var dots = document.getElementsByClassName("dot");
  
  if (n > slides.length) {
	  slideIndex = 1;
  }    
  if (n < 1) {
	  slideIndex = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" activeDOT", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " activeDOT";
}

</script>
    </section>
	</br>
<section id = "blogposts">
</br>
	<style>
		.blogdescription{
			padding: 20px 1000px 20px 100px;
			left: 0px;
			display: block;
		}
		.caption{
			font-size: 1.4em;
			font-weight: bold;
		}
		.title{
			font-weight: bold;
			font-size: 2.0em;
		}

	</style>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "marksphoto";
$conn = new mysqli($servername, $username, $password, $dbname);
$photoCounter = 0;
$increment = 1;
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT blogText, blogTitle, blogPhoto FROM blogEntry";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
    /*echo "<table><tr><th>Customer Reviews</th></tr>";*/
    while($row = $result->fetch_assoc()) {
		
		echo "<p class = 'title'>" . $row["blogTitle"]. "</p>";
		/*echo $row["blogPhoto"];*/
      /*  echo "<tr><td>" . $row["review"]. "</td></tr>";*/
		/*echo "<img class = 'blogdescription scalePic' src = '../res/pic.jpg'>";*/
		 /*echo"<p class = 'title'>" . $row["blogTitle"]. "</p>"*/
		 
		 if($photoCounter == 0 || $photoCounter == 4){
			 echo "<img class = 'blogdescription scalePic' src = '../res/pic.jpg'>";
			  echo "</br>";
		 }
		 if($photoCounter == 1 || $photoCounter == 5){
			 echo "<img class = 'blogdescription scalePic' src = '../res/blog/5863696.jpg' width= '500px'>";
			  echo "</br>";
		 }
		 if($photoCounter == 2 || $photoCounter == 6){
			 echo"<img class = 'blogdescription scalePic' src = '../res/blog/9192802.jpg' width= '500px'>";
			 echo "</br>";
		 }
		 if($photoCounter == 3 || $photoCounter == 7){
			 echo"<img class = 'blogdescription scalePic' src = '../res/blog/2448004.jpg' width = '500px'>";
			  echo "</br>";
		 }
		 
		/* echo $photoCounter;*/
		echo "<p class = 'caption'>" . $row["blogText"]. "</p>";
		 $photoCounter ++;

    }
    echo "</table>";
} else {
    echo "No current blog posts";
}

$conn->close();
?>
</br>
</br>
 
        </div>
    </section>
<footer>
    </br>
    <p><a class ="handle" href="http://twitter.com/photografer003" target="_blank"><img id ="twit" src="../res/mainPg/twitterLogo.png" alt="Twitter Logo" href="http://twitter.com/photografer003" target ="_blank" width="50" height="50" />@photografer003</a></p>
</footer>
</body>
</html>