<!DOCTYPE html>
<html>
<head>
<head>
<meta charset="UTF-8">
<title>Admin Page</title>
<link rel="icon" href="../res/mainPg/markphotofavicon.ico">
 <link href = "../css/StyleSheet.css" rel = "stylesheet"/>
 <style>
table, th, td {
    border: 1px solid black;
	margin-bottom: 50px;
	background: #ffffff 0px 0px;
	font-weight: bold;
}

</style>
<body>
<section>
<h1>Admin Page</h1>

</body>

<script language = "JavaScript">
var password;
var pas1 = "mbolmida";

password = prompt('Enter your password to continue:');
if(password == pas1)
	alert('Correct, hit ok to continue');
else{
	alert('Incorrect, hit ok to go back.');
	window.location = "../html/index.php";
}
</script>
</head>
<body>
        <nav class="menu">
                <ul>
                   <li><a href="index.php" class = "menuLink">Home</a></li>
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
			</br>
			</section>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "marksphoto";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT description, date, time, location, fname, lname, email, pnumber, services, bridal, reach, search, weddingwire, thumbtack, gigmaster, other, othertext FROM contact";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table><tr><th>Event Description</th><th>Event Date</th><th>Event Time</th><th>Event Location</th><th>Name</th><th>Email Address</th><th>Phone Number</th><th>Services Needed</th><th>Bridal Show</th><th>Reach Magazine</th><th>Search Engine</th><th>Wedding Wire</th><th>Thumbtack</th><th>Gigmaster</th><th>Other</th><th>Other Text</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["description"]. "</td><td>" . $row["date"]. "</td><td>" . $row["time"]. "</td><td>" . $row["location"]. "</td><td>" . $row["fname"]. " " . $row["lname"]. "</td><td>" . $row["email"]. "</td><td>" . $row["pnumber"]. "</td><td>" . $row["services"]. "</td><td>" . $row["bridal"]. "</td><td>" . $row["reach"]. "</td><td>" . $row["search"]. "</td><td>" . $row["weddingwire"]. "</td><td>" . $row["thumbtack"]. "</td><td>" . $row["gigmaster"]. "</td><td>" . $row["other"]. "</td><td>" . $row["other"]. "</td><td>" . $row["othertext"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No contact forms filled out";
	echo "</br>";
}
$conn->close();
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "marksphoto";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT email FROM newsletter";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Newsletter Subscribers</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["email"]. "</td></tr>";

    }
    echo "</table>";
} else {
    echo "No Current Emails";
	echo "</br>";
}
$conn->close();
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "marksphoto";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT review FROM reviews";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Customer Reviews</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["review"]. "</td></tr>";
		/*echo "<p>" . $row["review"]. "</p>";*/
    }
    echo "</table>";
} else {
    echo "No submitted reviews";
	echo "</br>";
}

$conn->close();
?>
    <div id = "form">
        </br>
        <form id = "review" action="blogEntry.php" method = "post">
            <fieldset id = "input">
                <legend>Add a blog post below</legend>
                    <div class ="formElement">
                        <form id = "mainPageEmail" method = "post"> 
						    <div class ="formElement">
								<label class ="location">Blog Title</label>
								<br />
								<input name ="blogTitle" id ="bTitle" type ="text" maxlength ="100" length = "400px" required />
							</div>
							<!--
							<div class = "formElement">
								<label class = "location">Upload a photo</label>
								
								<input type="file" name="blogPhoto" accept="image/*"> 
							</div>
							-->
							
							<textarea name ="blogText" id ="BlogBox" type = "text" style ="width: 800px; height:200px;" maxlength ="700" required></textarea>
							
							
							</br>
							
							<input type="submit" id = "btnSubmit" value ="Submit"/>
							<input type="reset" id ="btnReset" value ="Reset"/>
						</form>
					</div>
            </fieldset>
        </form>
        </br>
    </div>
</body>
</html>