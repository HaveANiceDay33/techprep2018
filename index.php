<!DOCTYPE html>
<html>
<head>
    <title>Mark's Camera Bag</title>
	<meta charset="utf-8" />
    <meta name="keywords" content="Wedding photography, photo booth, Dayton, videography, cheap, deals, pictures, photography"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="icon" href="../res/mainPg/markphotofavicon.ico">
    <link href="../css/StyleSheet.css" rel="stylesheet" />
   <!-- <link href ="/css/home.css" rel ="stylesheet" /> 
               -->
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
    .show {display:inline-block;}
    .showInfo {display:inline-block;}
 
</style>
</head>
<body>
    <section>
        <header>
            <a href="../html/index.php">
                <img class = "scalePic" id = "logo" src="../res/mainPg/Untitled8.png" alt="Main Logo" align="left" />
            </a>
            <h1>Wedding Photography, Photo Booth, and Videography</h1>
            <h2 id = "title">Dayton, Cincinnati, and Columbus</h2>
            <nav class="menu">
                <ul>
                   <li><a href="index.php" class = "active">Home</a></li>
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
                    <li><a href="blogMain.php"class = "menuLink">Blog</a></li>
                    <li><div class="dropdown">
                          <button class = "dropbtnInfo">Information</button>
                              <div id="infoDropdown" class="dropdown-content-info">
                                    <a href="infoMain.php"class = "menuLink drop">Contact</a>
                                    <a href="pricing.php"class = "menuLink drop">Pricing</a>
                                    <a href="testimonials.php"class = "menuLink drop">Testimonials</br>and Reviews</a>
                              </div>
                        </div>
                    </li>
             
                </ul>
            </nav> 
            
        </br>
        </header>
    </section>
 
    <article id="mainBody">
       <div id = "introAndPics">
        <div id = "photoMainL">
            <div class = "mainRow row">
                <div class = "mainColumn column">
                    <img class = "scalePic" src = "../res/mainPg/mainPic (1).jpg" width = "250px">
					<img class = "scalePic" src = "../res/mainPg/mainPic (2).jpg" width = "250px">
					<img class = "scalePic" src = "../res/mainPg/mainPic (3).jpg" width = "250px">
					<img class = "scalePic" src = "../res/mainPg/mainPic (4).jpg" width = "250px">
					<img class = "scalePic" src = "../res/mainPg/mainPic (5).jpg" width = "250px">
                </div>
            </div>
        </div>
        <div id = "intro">
      
       
            <p id = "schpeel">Mark's Photo & Video is based in Dayton, Ohio just minutes east of downtown Dayton. 
            We offer photography, video, and photo booth services for weddings, events and corporations 
            in Dayton, Columbus, and Cincinnati, Ohio at a reasonable price.
            I have a rich background in the fine art of photography and video
             - literally 1,000's of hours working in and studying photography and video, 
            composition and Photoshop. My degree in technology from the University of
             Dayton and experience in photography and film production have given me a
             unique ability to frame, capture, and present an image in the most beautiful way.
            Our photo booths are state of the art photo machines built by a photographer,
             not a vending machine company. They are not webcams with florescent lights 
            and ink jet printers. Every component is professional grade photography equipment.
             When you rent a photo booth from us your photos will be not only fun but produce
             gorgeous photos that capture the fun, character, and love of your friends and family.
             We have enclosed booths, open booths, and we're adding slow-motion booths this year.
            Please use the Contact Page to fill in your details. I'll give you a call or send you an 
            email or text promptly. Normally within the hour.  </p>

      </div>
        <div id = "photoMainR">
            <div class = "mainRow row">
                <div class = "mainColumn column">
                    <img class = "scalePic" src = "../res/mainPg/mainPic (8).jpg" width = "250px">
					<img class = "scalePic" src = "../res/mainPg/mainPic (9).jpg" width = "250px">
					<img class = "scalePic" src = "../res/mainPg/mainPic (10).jpg" width = "250px">
					<img class = "scalePic" src = "../res/mainPg/mainPic (11).jpg" width = "250px">
	
                </div>
            </div>
        </div>
        </div>
        </br>
        </br>
</article>
  
    <footer>
        </br>
                <p id="emailMe">Sign Up for Exclusive Offers With Email:</p>
        <div class ="email">
            <form id = "mainPageEmail" name = "nmainPageEmail" action = "newsletter.php" method = "post">
            <input id="emailSub" type = "text" name ="mail"/>
            <input type="submit" name = "mainPageSubmitBtn" id = "btnSubmitMain" value ="Submit"/>
            </form>
        </div>
        </br>
        <p><a class ="handle" href="http://twitter.com/photografer003" target="_blank"><img id ="twit" src="../res/mainPg/twitterLogo.png" alt="Twitter Logo" href="http://twitter.com/photografer003" target ="_blank" width="50" height="50" />@photografer003</a></p>
       </br>
     </footer>
</body>
</html>
