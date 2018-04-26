<!DOCTYPE html>
<html>
<head>
    <title>Yulei and Chris</title>
    <!-- <link href="/css/photosMain.css" rel="stylesheet" /> -->
    <link href = "../css/StyleSheet.css" rel = "stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="icon" href="/res/mainPg/Untitled8.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../res/mainPg/markphotofavicon.ico">


<script language = "JavaScript">
var password;
var pas1 = "christopherfoundAmerica";

password = prompt('Enter your password to continue:');
if(password == pas1)
	alert('Correct, hit ok to continue');
else{
	alert('Incorrect, hit ok to go back.');
	window.location = "../photosMain.php";
}
</script>




<style>
    .dropbtn{
        background-color:#ccdb79;
        border: 2px solid #000000;
    }
    .show {display:inline-block;}
    .showInfo {display:inline-block;}
</style>
</head>
<body>
    <section>
        <header>
            <a href="../index.php">
                <img id = "logo" src="../res/mainPg/Untitled8.png" alt="Main Logo" align="left" />
            </a>
            <h1>Wedding Photography, Photo Booth, and Videography</h1>
            <h2 id = "title">Dayton, Cincinnati, and Columbus</h2>
             <nav class="menu">
                <ul>
                    <li><a href="../index.php" class = "menuLink">Home</a></li>
                             <li><div class = "dropdown">
                            <button class = "dropbtnInfo">Photos</button>
                                <div id="infoDropdown" class="dropdown-content-info">
                                    <a href="../photosMain.php"class = "menuLink drop">Weddings</a>
                                    <a href="../headshots.php"class = "menuLink drop">Headshots</a>
                                    <a href="../RealEstate.php"class = "menuLink drop">Real Estate</a>
                                    <a href ="../Modeling.php" class = "menuLink drop">Modeling</a>
                              </div>  
                        
                        </div>
                    </li>
                    <li><a href="../videosMain.php"class = "menuLink">Videos</a></li>
                    <li><a href="../blogMain.php"class = "menuLink">Blog</a></li>
                        <li><div class="dropdown">
                          <button onclick="infoFunct()" class = "dropbtnInfo">Information</button>
                              <div id="infoDropdown" class="dropdown-content-info">
                                    <a href="../infoMain.php"class = "menuLink">Contact</a>
                                    <a href="../pricing.php"class = "menuLink">Pricing</a>
                                    <a href="../testimonials.php"class = "menuLink">Testimonials</br>and Reviews</a>
                              </div>
                        </div>
                    </li>
             
                </ul>
            </nav> 
            
            </br>
            </br>
        </header>
    </section>
        <h2 class = "galleryHead">Yulei and Chris</h2>
        <section id = "photoStream">
        <div class = "row">
            <div class = "column">
                <img class = "scalePic" src = "../res/yulei/chris (1).jpg" width = "300px">
				<img class = "scalePic" src = "../res/yulei/chris (2).jpg" width = "300px">
				<img class = "scalePic" src = "../res/yulei/chris (3).jpg" width = "300px">
				<img class = "scalePic" src = "../res/yulei/chris (4).jpg" width = "300px">
				<img class = "scalePic" src = "../res/yulei/chris (5).jpg" width = "300px">
            </div>
             <div class = "column">
               <img class = "scalePic" src = "../res/yulei/chris (6).jpg" width = "300px">
				<img class = "scalePic" src = "../res/yulei/chris (7).jpg" width = "300px">
				<img class = "scalePic" src = "../res/yulei/chris (8).jpg" width = "300px">
				<img class = "scalePic" src = "../res/yulei/chris (9).jpg" width = "300px">
				<img class = "scalePic" src = "../res/yulei/chris (10).jpg" width = "300px">
            </div>
             <div class = "column">
               <img class = "scalePic" src = "../res/yulei/chris (11).jpg" width = "300px">
				<img class = "scalePic" src = "../res/yulei/chris (12).jpg" width = "300px">
				<img class = "scalePic" src = "../res/yulei/chris (13).jpg" width = "300px">
				<img class = "scalePic" src = "../res/yulei/chris (14).jpg" width = "300px">
				<img class = "scalePic" src = "../res/yulei/chris (15).jpg" width = "300px">
				<img class = "scalePic" src = "../res/yulei/chris (16).jpg" width = "300px">
            </div>
             <div class = "column">
               <img class = "scalePic" src = "../res/yulei/chris (17).jpg" width = "300px">
				<img class = "scalePic" src = "../res/yulei/chris (18).jpg" width = "300px">
				<img class = "scalePic" src = "../res/yulei/chris (19).jpg" width = "300px">
				<img class = "scalePic" src = "../res/yulei/chris (20).jpg" width = "300px">
				<img class = "scalePic" src = "../res/yulei/chris (21).jpg" width = "300px">
            </div>
            
        </div>
    </section>
    <footer>
       </br>
	<div class = "download">
        <a href = "../res/yuleiZip" class = "downloadLink" download>Download these photos!</a>
    </div>
	</br>
    <p><a class ="handle" href="http://twitter.com/photografer003" target="_blank"><img id ="twit" src="../res/mainPg/twitterLogo.png" alt="Twitter Logo" href="http://twitter.com/photografer003" target ="_blank" width="50" height="50" />@photografer003</a></p>
</footer>
    </body>
</html>
    