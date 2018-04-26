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
			/*
			$imagename = $_FILES["blogPhoto"]["name"];
			
			$imagetmp =addslashes(file_get_contents($_FILES['blogPhoto']['tmp_name']));
			*/
			$sql="INSERT INTO blogEntry (blogText, blogTitle)
			VALUES('$_POST[blogText]','$_POST[blogTitle]')";
			if (!mysql_query($sql,$con))
				{
					die('Error: ' . mysql_error());
				}
			echo "1 record added";
			mysql_close($con)
			?>
	<script>
		window.alert("Your blog post has been added");
		window.location = "http://localhost/techprep/html/blogMain.php";
	</script>	
	</body>
</html>