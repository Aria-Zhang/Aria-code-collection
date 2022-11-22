<!DOCTYPE html>
<html>
	<head>
		<title>Search Animal Result</title>
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
	<?php session_start(); 

	include 'connection.php';
	
	$conn = new mysqli ($servername, $server_username, $server_password, $dbname);

	if($conn->connect_error){
		die("ERROR: Could not connect. " . $conn->connect_error);
	}
	echo "Connected successfully<br>";

	if ($_POST["attribute"] == "Animal_ID") {
		if (isset($_POST["attribute"])) { 
			echo 'You chose: ' .$_POST["attribute"]. ' <br>';

			$ID = $_POST['attributeValue'];

			echo 'You entered Animal_ID: ' .$ID. '<br> <br>'; 
		} 
		$sql = "SELECT Species ID, Name, Species, Domain FROM Animal_Species WHERE Species_ID = $ID";
		
	}elseif ($_POST["attribute"] == "Animal_Species"){
		if (isset($_POST["attribute"])) { 
			echo 'You chose: ' .$_POST["attribute"]. ' <br>';
			// Escape user inputs for security
			$Animal_Species = $_POST['attributeValue'];

			echo 'You entered Animal Species: ' .$Animal_Species. '<br> <br>'; 
		} 
		$sql = "SELECT Species ID, Name, Species, Domain FROM Animal_Species WHERE Species = '$Animal_Species'";
		
	}elseif ($_POST["attribute"] == "Animal_Domain"){
		if (isset($_POST["attribute"])) { 
			echo 'You chose: ' .$_POST["attribute"]. ' <br>';
			// Escape user inputs for security
			$Animal_Domain = $_POST['attributeValue'];

			echo 'You entered Animal Domain: ' .$Animal_Domain. '<br> <br>'; 
		} 
		$sql = "SELECT Species ID, Name, Species, Age, Quantity FROM Animal_Species WHERE Domain = '$Animal_Domain'";
		
	}elseif ($_POST["attribute"] == "Animal_Name"){
		if (isset($_POST["attribute"])) { 
			echo 'You chose: ' .$_POST["attribute"]. ' <br>';
			// Escape user inputs for security
			$Animal_Name = $_POST['attributeValue'];

			echo 'You entered MINIT: ' .$Animal_Name. '<br> <br>'; 
		} 
		$sql = "SELECT * FROM Animal_Preferences WHERE Name = '$Animal_Name'";
	}
	
	// attempt insert query execution
	$result = $conn->query($sql);
	if(!$result){
		echo "Could not get data: ".$conn->error;
	}
		
	while($row = $result->fetch_assoc()) {
		echo "ID: {$row['Species_ID']}  <br> ".
		"Name: {$row['Name']} <br> ".
		"Domain: {$row['Domain']} <br> ".
		"Species: {$row['Species']} <br> ".
		"--------------------------------<br>";
		}
	echo "Search completed! <br>";
		
	$conn->close();
?>	
	<p><a href="search_record.php">Click here </a>to search other animals.</p>
	</body>




</html>
	