<html>
	<head>
		<title>Update Employee</title>
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

		</style>

		<div class="header">
			<h1><b><a href="home.html">Home</a></b> <b><a href="list.html">List</a></b> <b><a href="erandeer.html">ER&EER</a></b> <b><a href="physical.html">PhysicalDatabaseDesign</a></b> <b><a href="normalization.html">Normalization</a></b> <b><a href="aboutus.html">AboutUs</a></b> <b><a href="Login.php">Login</a></b></h1>

		</div>
		<hr/>
	</head>
<?php
	session_start();
	include "connection.php";

	$_SESSION["session_flag"] = 'valid';
	if (isset($_SESSION["session_flag"])) {
		if($_SESSION["session_flag"] == "valid") {
			$conn = new mysqli ($servername, $server_username, $server_password, $dbname);
			// Check connection
			if($conn->connect_error){
				die("ERROR: Could not connect. " . $conn->connect_error);
			}
			echo "Connected successfully";
			
			if (isset($_POST)) { 
				// Escape user inputs for security
				$ID = $_POST['ID'];
				$salary = $_POST['salary'];
				$job_type = $_POST['job_type'];
				$permission = $_POST['permission'];
			} 
			
			
			// attempt insert query execution
			$sql = "UPDATE Employee SET Salary='$salary', Job_type='$job_type', Permission='$permission' WHERE ID='$ID'";
			
			$query = $conn->query($sql); 
			
			if(!$query) {
				die('ERROR: ' .$conn->error);
			} else {
				echo "Record updated successfully. <br>";
			}
				
			$sql = "SELECT ID, Salary, Job_type, Permission FROM Employee WHERE ID = '$ID'";
			
			// attempt insert query execution
			$result = $conn->query($sql);
			if(!$result){
				echo "Could not get data: ".$conn->error;
			}
			
			while($row = $result->fetch_assoc()) {
				echo "ID: {$row['ID']}  <br> ".
				"Salary: {$row['Salary']} <br> ".
				"Job_type: {$row['Job_type']} <br> ".
				"Permission: {$row['Permission']} <br> ".
				"--------------------------------<br>";
			}
			
			$conn->close();
			
			echo "<a href=\"index.php\"> Click here </a> to go to main menu."; 
		} else {
			echo "Invalid session!";
		}
	} else {
		echo "Session not set!"; 
		echo "<a href=\"index.php\">Click here </a> to go back to the main page.";		
	}
?>
</html>