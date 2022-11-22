<!DOCTYPE html>
<html>
	<head>
		<title>Create Employee Record Output</title>
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
	session_start(); 

	include 'connection.php';
	
	$conn = new mysqli($servername, $server_username, $server_password, $dbname);
	
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	echo "Connected successfully<br>";
	
	if (isset($_POST)) {

		// Escape user inputs for security
		$FirstName = $_POST['FirstName'];
		$MiddleName = $_POST['MiddleName'];
		$LastName = $_POST['LastName'];
		$Salary = $_POST['Salary'];
		$JobType = $_POST['JobType'];
		$Age = $_POST['Age'];
		$Gender = $_POST['Gender'];
		$ID = $_POST['ID'];
		$Permission = $_POST['Permission'];

		echo 'Your First Name is: ' .$FirstName. '<br>';
		echo 'Your Middle Name is: ' .$MiddleName. '<br>';
		echo 'Your Last Name is: ' .$LastName. '<br>'; 
		echo 'Your Salary is: ' .$Salary. '<br>';
		echo 'Your Age is: ' .$Age. '<br>';
		echo 'Your Job Type is: ' .$JobType. '<br>';
		echo 'Your Gender is: ' .$Gender. '<br>'; 
		echo 'Your ID is: ' .$ID. '<br>'; 
		echo 'Your Permission is: ' .$Permission. '<br>';
	}
	// attempt insert query execution
		$sql = "INSERT INTO Employee (ID, Age, Salary, Job_type, Gender, Permission) VALUES ('$ID', $Age, $Salary, '$JobType', '$Gender', $Permission); 
			INSERT INTO Employee_Name (FirstName, MiddleName, LastName, ID) VALUES ('$FirstName','$MiddleName','$LastName', '$ID');";
			
	if($conn->multi_query($sql)){
		echo "Record added successfully.<br>";
	}else{
		echo "ERROR: ".$sql."<br>".$conn->error;
	}
			
	$conn->close();
	
	echo "<br><a href='index.php' style='text-decoration: underline;color: darkgreen;'><b>Click here</b></a> to go back to the main page.";	
?>
	</body>
</html>