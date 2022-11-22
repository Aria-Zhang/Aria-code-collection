<!DOCTYPE html>
<html>
	<head>
		<title>Join Table</title>
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
	
	<?php session_start(); 

	include 'connection.php';
	
	$conn = new mysqli ($servername, $server_username, $server_password, $dbname);
	// Check connection
	if($conn->connect_error){
		die("ERROR: Could not connect. " . $conn->connect_error);
	}
	echo "Connected successfully<br>";
				
	$sql = 'SELECT * FROM Employee;';
	
	$result = $conn->query($sql);


	echo"<h2>Employee Information Table</h2>";
	echo "<table>
	<tr>
	<th>ID</th>
	<th>Salary</th>
	<th>Age</th>
	<th>Gender</th>
	<th>Job_type</th>
	</tr>";

	if($result->num_rows > 0){
		while ($row = $result->fetch_assoc()){
			echo "<tr>";
			echo "<td>" . $row['ID'] . "</td>";
			echo "<td>" . $row['Salary'] . "</td>";
			echo "<td>" . $row['Age'] . "</td>";
			echo "<td>" . $row['Gender'] . "</td>";
			echo "<td>" . $row['Job_type'] . "</td>";
			echo "</tr>";
		}
	}
	echo "</table>";
	
	
	$sql = 'SELECT * FROM Employee_Name;';
	
	$result = $conn->query($sql);

	echo"<h2>Employee Name</h2>";

	echo "<table>
	<tr>
	<th>ID</th>
	<th>First Name</th>
	<th>Middle Name</th>
	<th>Last Name</th>
	</tr>";
	
	if($result->num_rows > 0){
		while ($row = $result->fetch_assoc()){
			echo "<tr>";
			echo "<td>" . $row['ID'] . "</td>";
			echo "<td>" . $row['FirstName'] . "</td>";
			echo "<td>" . $row['MiddleName'] . "</td>";
			echo "<td>" . $row['LastName'] . "</td>";
			echo "</tr>";
		}
	}
	echo "</table>";
	
	$conn->close();
	// close connection
	  
?>
	<?php
	echo "Join two tables using an Employee ID: <br> ";
	echo "<form action = \"join_table_output.php\" method = \"POST\">
			Employee ID: <input type = \"text\" name = \"ID\"> <br>\"";
	echo "<input type = \"submit\">";
	echo " </form>";
	echo "<a href='index.php' style='text-decoration: underline;color: darkgreen;'><b>Click here</b></a> to go back to the main page."
	?>
	
	</body>
	</html>