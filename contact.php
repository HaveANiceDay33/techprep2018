<html>
	<head>
		<link rel="icon" href="../res/mainPg/markphotofavicon.ico">
		<link href="../css/StyleSheet.css" rel="stylesheet" />
	</head>
	<body>
		<?php
			$con = mysql_connect("localhost","root","");
			if (!$con)
				{
					die('Could not connect: ' . mysql_error());
				}
			mysql_select_db("marksphoto", $con);
			$sql="INSERT INTO contact (description, date, time, location, fname, lname, email, pnumber, services, bridal, reach, search, weddingwire, thumbtack, gigmaster, other, othertext)
			VALUES('$_POST[eventDesc]','$_POST[eventDate]','$_POST[eventTime]','$_POST[eventLoc]','$_POST[fName]','$_POST[lName]','$_POST[emailSub]','$_POST[phoneSub]','$_POST[intersetSub]','$_POST[bridal]','$_POST[magazine]','$_POST[search]','$_POST[wedding]','$_POST[thumb]','$_POST[gig]','$_POST[other]','$_POST[otherBox]')";
			if (!mysql_query($sql,$con))
				{
					die('Error: ' . mysql_error());
				}
			echo "1 record added";
			mysql_close($con)
			?>
	<script>
		window.alert("Your form has been submitted");
		window.location = "http://localhost/techprep/html/infoMain.php";
	</script>	
	</body>
</html>