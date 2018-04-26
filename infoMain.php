<!DOCTYPE html>

<html>
<head>
    <title>Information and Forms</title>
    <meta charset="utf-8" />
    <meta name="keywords" content="Wedding photography, photo booth, Dayton, videography, cheap, deals, pictures, photography"/>
   
    <link href="../css/StyleSheet.css" rel="stylesheet" />
    <!--  <link href="/css/infoStyle.css" rel ="stylesheet" /> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../res/mainPg/markphotofavicon.ico">

<style>
    .show {display:inline-block;}
    .showInfo {display:inline-block;}
    .dropbtnInfo{background-color: rgba(65, 127, 226, 0.3);
        border: 2px solid #000000;
    }
</style>
</head>
<body>
    <section>
        <header>
            <a href="../html/index.php">
                <img id = "logo" class = "scalePic" src= "../res/mainPg/Untitled8.png" alt="Main Logo" align="left" />
            </a>
            <h1>Wedding Photography, Photo Booth, and Videography</h1>
            <h2 id = "title">Dayton, Cincinnati, and Columbus</h2>
            <nav class="menu">
                <ul>
                    <li><a href="index.php"class = "menuLink">Home</a></li>
                         <li><div class = "dropdown">
                            <button class = "dropbtn">Photos</button>
                                <div class="dropdown-content-info">
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
                          <button onclick="infoFunct()" class = "dropbtnInfo">Information</button>
                              <div id="infoDropdown" class="dropdown-content-info">
                                    <a href="infoMain.php" class = "active">Contact</a>
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
    

    <section id = "formContact">
      
        
        <h2 id = "heading">Hire Me for an Event Below!</h2>
        <form id ="scheduler" action="contact.php" method ="post">
            <fieldset id ="eventInfo">
                <legend>Event Information (all fields are required)</legend>
                    <div class ="formElement">
                        <label for ="desc">Event Description 
                            (max 160 characters)
                        </label>
                         <br />
                        <textarea name ="eventDesc" type="text" id ="descBox" rows ="5" cols ="50" required maxlength ="160"></textarea> 
                    </div>
                    <div class="formElement">
                        <label for ="date">Date of Event</label>
                         <br />
                        <input name ="eventDate" id ="dateSel" type ="date" required />
                    </div>
                    <div class ="formElement">
                        <label class ="time">Time of Event</label>
                         <br />
                        <input name ="eventTime" id ="timeSel" type ="time" required />
                    </div>
                    <div class ="formElement">
                        <label class ="location">Event Location</label>
                         <br />
                        <input name ="eventLoc" id ="locSelect" type ="text" maxlength ="20" required />
                    </div>
            </fieldset>
            <fieldset id ="customerInfo">
                <legend>Customer Information (all fields are required)</legend>
                    <div class ="formElement">
                        <label class ="Fname">First Name</label>
                         <br />
                        <input name ="fName" id ="firstName" type ="text" maxlength ="20" required />
                    </div>
                     <br />
                    <div class ="formElement">
                        <label class ="Lname">Last Name</label>
                         <br />
                        <input name ="lName" id ="lastName" type ="text" maxlength ="20" required />
                    </div>
                 <br />
                    <div class ="formElement">
                        <label class ="emailIn">Email Address</label>
                         <br />
                        <input name ="emailSub" id ="emailBox" type ="text" maxlength ="50" required />
                    </div>
                 <br />
                    <div class ="formElement">
                        <label class ="phone">Phone Number</label>
                         <br />
                        <input name ="phoneSub" id ="phoneBox" type ="text" maxlength ="15" required />
                    </div>
                 <br />
                 
                    <div class ="formElement">
                        <label class ="interest">Services interested in (Photography, Video, Photo Booth)</label>
                         <br />
                        <input name ="intersetSub" id ="interestBox" type ="text" size ="100px" maxlength ="50" required />
                    </div>
                 <br />
                    <div class ="formElement">
                        <label class ="market">Where did you hear about me? Please be specific and check all that apply, this really helps me.</label>
                         <br />
                        <input name ="bridal" id ="check1" type ="checkBox">Bridal Show</input>
                        <br />
                        <input name ="magazine" id ="check2" type ="checkBox">Reach Magazine</input>
                         <br />
                        <input name ="search" id ="check3" type ="checkBox">Search Engine</input>
                         <br />
                        <input name ="wedding" id ="check4" type ="checkBox">Wedding Wire</input>
                         <br />
                        <input name ="thumb" id ="check5" type ="checkBox">Thumbtack</input>
                         <br />
                        <input name ="gig" id ="check6" type ="checkBox">Gigmaster</input>
                         <br />
                        <input name ="other" id ="check7" type ="checkBox">Other</input>
                        
                        <input name ="otherBox" id ="otherText" type ="text" maxlength ="20" />
                    </div>
            </fieldset>
            <input type="submit" id = "btnSubmit" value ="Submit"/>
            <input type="reset" id ="btnReset" value ="Reset"/>
        </form>
    </section>
   
       <footer>
           </br>
        <p><a class ="handle" href="http://twitter.com/photografer003" target="_blank"><img id ="twit" src="../res/mainPg/twitterLogo.png" alt="Twitter Logo" href="http://twitter.com/photografer003" target ="_blank" width="50" height="50" />@photografer003</a></p>
       
     </footer>

</body>
</html>
