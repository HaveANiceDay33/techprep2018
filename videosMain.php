<!DOCTYPE html>
<html>
<head>
    <title>Mark's Camera Bag</title>
	<meta charset="utf-8" />
    <meta name="keywords" content="Wedding photography, photo booth, Dayton, videography, cheap, deals, pictures, photography"/>
    <link href="../css/StyleSheet.css" rel="stylesheet" />
    <!-- <link href ="/css/videoStyle.css" rel ="stylesheet" /> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="../res/mainPg/markphotofavicon.ico">
<style>
    .show {display:inline-block;}
    .showInfo {display:inline-block;}
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
                    <li><a href="videosMain.php" class = "active">Videos</a></li>
                    <li><a href="blogMain.php"class = "menuLink">Blog</a></li>
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
     <h2 class = "galleryHead">Videos</h2>
    <section id = "videoStream">
	</br>
	</br>
		<div class = "videos">
						<video width="1520px" autoplay mute loop">
					<source src="../res/videos/video (6).mp4" type="video/mp4">
				</video>
								<video width="760px" controls poster = "../res/thumbnails/poster 1.png">
					<source src="../res/videos/video (1).mp4" type="video/mp4">
				</video>
								<video width="760px" controls poster = "../res/thumbnails/poster 2.png">
					<source src="../res/videos/video (2).mp4" type="video/mp4">
				</video>
								<video width="760px" controls poster = "../res/thumbnails/poster 3.png">
					<source src="../res/videos/video (3).mp4" type="video/mp4">
				</video>

								<video width="760px" controls poster = "../res/thumbnails/poster 4.png">
					<source src="../res/videos/video (4).mp4" type="video/mp4">
				</video>
								<video width="760px" controls poster = "../res/thumbnails/poster 5.png">
					<source src="../res/videos/video (5).mp4" type="video/mp4">
				</video>
				
								<video width="760px" controls poster = "../res/thumbnails/poster 6.png">
					<source src="../res/videos/video (7).mp4" type="video/mp4">
				</video>
        </div>    
       
    </section>
   <footer>
        </br>
        <p><a class ="handle" href="http://twitter.com/photografer003" target="_blank"><img id ="twit" src="../res/mainPg/twitterLogo.png" alt="Twitter Logo" href="http://twitter.com/photografer003" target ="_blank" width="50" height="50" />@photografer003</a></p>
       
     </footer> 
</body>
</html>