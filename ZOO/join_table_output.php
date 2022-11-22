<!DOCTYPE html>
<html>
	<head>
		<title>Join Table Result</title>
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
			
	$Employee_ID = $_POST['ID'];
	
	echo"<h2>Below is the resulting table of joining the two tables!</h2>";
	$sql = "SELECT Employee.ID, Employee.Salary, Employee.Age, Employee.Job_type, Employee_Name.FirstName, Employee_Name.MiddleName, Employee_Name.LastName FROM Employee JOIN Employee_Name ON Employee.ID = Employee_Name.ID WHERE Employee.ID ='".$Employee_ID."'";
			
	$result = $conn->query($sql);


	echo "<table>
	<tr>
	<th>ID</th>
	<th>Salary</th>
	<th>Age</th>
	<th>Job_type</th>
	<th>FirstName</th>
	<th>MiddleName</th>
	<th>LastName</th>
	</tr>";

	if($result->num_rows >0){
		while ($row = $result->fetch_assoc()){
			echo "<tr>";
			echo "<td>" . $row['ID'] . "</td>";
			echo "<td>" . $row['Salary'] . "</td>";
			echo "<td>" . $row['Age'] . "</td>";
			echo "<td>" . $row['Job_type'] . "</td>";
			echo "<td>" . $row['FirstName'] . "</td>";
			echo "<td>" . $row['MiddleName'] . "</td>";
			echo "<td>" . $row['LastName'] . "</td>";
			echo "</tr>";
		}
	}				
	echo "</table>";
	// close connection
	$conn->close();
	echo "<a href='index.php' style='text-decoration: underline;color: darkgreen;'><b>Click here</b></a> to go back to the main page."
	
?>

</body>
</html>