<!DOCTYPE html>
<html>
	<head>
		<title>Upload Animal Image</title>
		<h1 style="font-size:200%;font-family:verdana;letter-spacing:0.3em;">
			Z.O.O
		</h1>
		<style>
			.header{
				font-size:70%;
				letter-spacing:0.3em;
				word-spacing:3em;
				text-align:center;
				text-shadow:1px 1px #f2f2f2;
				color:black;
				font-family:verdana;
					
			}
			.para{
				font-size:70%;
				font-family:verdana;
			}
			a:link, a:visited{
				text-decoration:none;
				color:black;
			}
			a:hover{
				color:green;
			}
			.intro1{
				position: absolute;
				top:280px;
				left:17%;
				font-size:110%;
				font-family:verdana;
			}
			.intro2{
				position: absolute;
				top:520px;
				left:17%;
				font-size:110%;
				font-family:verdana;
			}
			.intro3{
				position: absolute;
				top:780px;
				left:17%;
				font-size:110%;
				font-family:verdana;
			}
			.intro4{
				position: absolute;
				top:1100px;
				left:17%;
				font-size:110%;
				font-family:verdana;
			}
			
			#delete_Title{
				margin:30px 100px 0 100px;
			}

		</style>

		<div class="header">
			<h1><b><a href="home.html">Home</a></b> <b><a href="list.html">List</a></b> <b><a href="erandeer.html">ER&EER</a></b> <b><a href="physical.html">PhysicalDatabaseDesign</a></b> <b><a href="normalization.html">Normalization</a></b> <b><a href="aboutus.html">AboutUs</a></b> <b><a href="Login.php">Login</a></b></h1>

		</div>
		<hr/>
	</head>
	<body>
		<?php
			/*session_start(); 

			if (!isset($_SESSION['username'])) {
				$_SESSION['msg'] = "You must log in first";
				include_once ('Login.php'); // This will insure that login.php is included only once
			}

			if (isset($_GET['logout'])) {
				session_destroy();
				unset($_SESSION['username']);
				include_once ('Login.php'); // This will insure that login.php is included only once
				$_SESSION['msg'] = "You must log in first";

			}*/
			
			include 'connection.php';
			
			$conn = new mysqli ($servername, $server_username, $server_password, $dbname);
			// Check connection
			if($conn->connect_error){
				die("ERROR: Could not connect. " . $conn->connect_error);
			}
			echo "Connected successfully<br>";
			
			//if the useser upload an image
			if (count($_FILES) > 0) {
				if (is_uploaded_file($_FILES['userImage']['tmp_name'])) {
					// Get image name
					$imgData = $_FILES['userImage']['tmp_name'];// Store the name in a temporary address
					$imgName = $_FILES['userImage']['name'];// Get the file's name

					// Encode the image
					$imgData = base64_encode(file_get_contents(addslashes($imgData)));

					// Get info
					$imageProperties = getimageSize($_FILES['userImage']['tmp_name']);// Get the size, the dimensions and the file type 
					$imageType = $imageProperties['mime'];// Get the file type
					
					// Insert the image into the table
					$sql = "INSERT INTO ANIMAL_IMG (imageData, imageType, imageName) VALUES('$imgData', '$imageType','$imgName')";
					$current_id = $conn->query($sql);
					if($current_id){
						echo "Image added successfully.<br>";
					}else{
						echo "ERROR: ".$sql."<br>".$conn->error;
					}
				}
			}
		?>
		<br>
		<form action="" method="post" enctype="multipart/form-data" >
				   <label>Upload Image File:</label><br>
				   <input name="userImage" type="file">
				   <input type="submit" value="Submit">
				</form>
				<p><a href='index.php' style='text-decoration: underline;color: darkgreen;'><b>Click here</b></a> to go back to the main page.</p>
	</body>
			   
</HTML>

