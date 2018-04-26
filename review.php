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
			$sql="INSERT INTO reviews (review)
			VALUES('$_POST[review]')";
			if (!mysql_query($sql,$con))
				{
					die('Error: ' . mysql_error());
				}
			echo "1 record added";
			mysql_close($con)
			?>
	<script>
		window.alert("Your review has been submitted");
		window.location = "http://localhost/techprep/html/testimonials.php";
	</script>	
	</body>
</html>