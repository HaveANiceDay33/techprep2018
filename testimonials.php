<!DOCTYPE html>
<html>
<head>
    <title>Testimonials</title>
	<meta charset="utf-8" />
    <meta name="keywords" content="Wedding photography, photo booth, Dayton, videography, cheap, deals, pictures, photography"/>
    <link href="../css/StyleSheet.css" rel="stylesheet" />
    <!--  <link href ="/css/testimonials.css" rel ="stylesheet" /> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="../res/mainPg/markphotofavicon.ico">
<style>
    .show {display:inline-block;}
    .showInfo {display:inline-block;}
    .dropbtnInfo{
        background-color:rgba(65, 127, 226, 0.3);
        border: 2px solid #000000;
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
                            <button class = "dropbtn">Photos</button>
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
                          <button onclick="infoFunct()" class = "dropbtnInfo">Information</button>
                              <div id="infoDropdown" class="dropdown-content-info">
                                    <a href="infoMain.php"class = "menuLink">Contact</a>
                                    <a href="pricing.php"class = "menuLink">Pricing</a>
                                    <a href="testimonials.php" class = "active">Testimonials</br>and Reviews</a>
                              </div>
                        </div>
                    </li>
             
                </ul>
            </nav> 
            
            <br/>
        </header>
    </section>
    <h1 id = "subTitle">Testimonials and Reviews</h1>
    <div id = partners>
        <h2 id = "partnerLabel">Corporate Partnerships</h2>
            <p class = rowCompany> Lexis Nexis </p>
            <p class = rowCompany>                ATK Z Dance Company</p>
            <p class = rowCompany>                Nationwide Custom Homes</p>
             <p class = rowCompany>               South Community Inc. </p>
              <p class = rowCompany>              HPA Strategies</p>
            <p class = rowCompany> WFCJ 93.1 FM</p>
             <p class = rowCompany>               REACH USA</p>
             <p class = rowCompany>               Weber Associates</p>
             <p class = rowCompany>               Gorilla Glue</p>
              <p class = rowCompany>              Phoenix University</p>
                        
            <p class = rowCompany>The Promenade</p>
             <p class = rowCompany>               United Grinding</p>
            <p class = rowCompany>                Farm Credit Mid-America</p>
             <p class = rowCompany>               Oakwood City Schools</p>
             <p class = rowCompany>               Hoxworth Blood Center</p>
             <p class = rowCompany>               Kettering Health Network</p>
            <p class = rowCompany>SW Ohio ENT Specialists</p>
              <p class = rowCompany>              The Maury Povich Show</p>
              <p class = rowCompany>              Premier Health</p>
              <p class = rowCompany>              League of Woman Voters</p>
              <p class = rowCompany>              USUI International</p>
            <p class = rowCompany>
               <p class = rowCompany>            FC industries</p>
               <p class = rowCompany>              Impact Community Action</p>
                       <p class = rowCompany>      TedX Talks</p>
                 <p class = rowCompany>            Interbrand</p>
                   <p class = rowCompany>          NCR Country Club</p>
            <p class = rowCompany>The University of Dayton</p>
                 <p class = rowCompany>            Dayton Christian</p>
                  <p class = rowCompany>           Junior Assembly Oakwood</p> 
                   <p class = rowCompany>          Dayton Art Institute</p>
                   <p class = rowCompany>          Int'l. Assoc. HVAC Local 50</p>
            <p class = rowCompany>JMR Infotech</p>
                   <p class = rowCompany>          Sinclair Community College</p>
                   <p class = rowCompany>          Kone Cranes</p>
                    <p class = rowCompany>         Jonathan Barnes Architecture & Design</p>
                   <p class = rowCompany>          Vertical Structure</p>
    </div>
	</br>
	</br>
    </br>
    <div id = "form">
        </br>
        <form id = "review" action="review.php" method = "post">
            <fieldset id = "input">
                <legend>Submit a Review!</legend>
                    <div class ="formElement">
                        <form id = "mainPageEmail" method = "post"> 
							<textarea name ="review" id ="reviewBox" type = "text" style ="width: 800px; height:200px;" maxlength ="300" required></textarea>
							<input type="submit" id = "btnSubmit" value ="Submit"/>
							<input type="reset" id ="btnReset" value ="Reset"/>
						</form>
					</div>
            </fieldset>
        </form>
        </br>
    </div>
    <div id ="samples">
        <h2 id = "testLabel">Testimonials</h2>
            <p class = "test">Simply AMAZING! Mark was so easy to work with and came up with great ideas for the wedding photos. 
            When we received our pictures, I was amazed at the editing and time that Mark had put into them. The wedding video is 
            something that my husband and I will cherish forever, as Mark captured EVERY moment from beginning to end. We also 
            ordered our wedding album through him, and once again, everything turned out perfectly. I would highly recommend Mark 
            for all of your photo and video needs. He is extremely affordable and willing to work with your wants and needs. VERY, VERY PLEASED!</p>
            
            <p class = "test">Mark was absolutely the best, his professionalism, imagination and ability to match his services to 
            our needs was unparalleled. The photo's were amazing and he managed to make an older couple look great. He captured 
            everything we wanted, caught all the fun and was able to capture the tone of our intimate wedding. I recommend him for 
            anyone. The prices is the best available and the quality amazing. His inclusion of the digital images makes his work 
            invaluable. We are so happy we found this amazing photographer.
            </br>
            <strong>-Robert and Bobbie</strong>
            </p>
            <p class = "test">Thank you so much for all that you have done! We are thrilled to 
            have so many beautiful pictures of our wedding day. We appreciate how easy you made
            all of this for us and we are amazed by how you managed to capture so many memories. 
            We will treasure these photos for the rest of our lives.
            </br>
            <strong>-Mark and Jessica</strong>
            </p>
            <p class = "test">We cannot say enough good things about Mark! We hired him as the photographer
            for our wedding and our expectations were exceeded. He was so patient with us through the 
            planning process and was honest and sincere about his work. He was laid back yet professional. 
            We have a wonderful DVD of our pictures that he created for us which is just great! The quality 
            of photos is absolutely wonderful and his prices were well within our budget. The fact that he
            included the digital pictures as part of our package was worth every penny in and of itself.
            He was the only photographer we found in this area who did that. We highly recommend him to
            anyone looking for a caring, generous, creative, and reliable photographer. You won't be let down!
            </br>
            <strong>-Karen and Derrick</strong>
            </p>
            <p class = "test">We hired Mark to photograph our wedding in June '09. He was thorough, engaged, easy to work with, 
            and our pictures are amazing. He listened to us, asked all the right questions (which is so important when you're 
            going crazy trying to plan a wedding), and took the time to learn exactly what it was we wanted. We treasure our 
            photos already, as do our family and friends who've gotten a chance to see them, too. We strongly recommend Mark 
            and are confident you'll be just as pleased as we are.
            </br>
            <strong>-Scott and Robin</strong>
            </p>
            <p class = "test">We hired Mark to perform the videography services during both our wedding ceremony
            and reception and were absolutely thrilled with the product that he created for us. Mark is a true professional;
            he is up-front with his pricing, easy to work with, dependable, and follows through with designing a complete 
            wedding package that allows for individual input and wishes. We are grateful for the quality of his videography 
            work, which allowed us to share our wedding and reception with family members across the country who were not 
            able to attend in person. We would recommend Mark's services in a heartbeat to anyone!
            </br>
            <stong>-Jason and Nicole</stong>
            </p>
            <p class = "test">
            I used mark's photo and video for my son's graduation party and it was fantastic and will leave my son with a great memory of the event.  
            My son is 22 and in the Autism Spectrum. He loves looking at pictures. When I saw Mark's photo booth at another graduation 2 years ago - 
            I knew that we had to do this.  My son is in almost all of the pictures with all of his guests, who represented all 
            of the teachers/ therapists/bus drivers/and people that helped him get where he is today.  After his graduation, he is 
            able to have a scrapbook with all the pictures and comments that people write -- it will mean the world to him. 
            Mark was great - it was a perfect activity for the event and everyone had fun doing it. 
            </br>
            Thanks Mark!
            </br>
            <stong>-Stacey</stong>
            </p>
        
    </div> 
    </br>
    <footer>
        </br>
           <div id = "googleReviews">
        <a href = "https://www.google.com/search?q=marks+photo+and+video+dayton+ohio&lrd=lrd&cad=h#lrd=0x884084a276611745:0x360afbb925d533f5,1,,," id = "googleReviewsLink" target = "_blank">See More Reviews on Google!!!</a>
    </div>
        </br>
        <p><a class ="handle" href="http://twitter.com/photografer003" target="_blank"><img id ="twit" src="../res/mainPg/twitterLogo.png" alt="Twitter Logo" href="http://twitter.com/photografer003" target ="_blank" width="50" height="50" />@photografer003</a></p>
     </footer>
</body>
</html>