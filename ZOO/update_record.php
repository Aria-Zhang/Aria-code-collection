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
	<body>
	<?php
		session_start();
		$_SESSION["session_flag"] = 'valid';
		if(isset($_SESSION["session_flag"])){
			if($_SESSION["session_flag"] == "valid") {
				echo "<form action = \"update_record_output.php\" method = \"POST\">
						Enter the ID of the record you want to update.<br/>
						ID: <input type = \"text\" name = \"ID\"> <br>
						Salary: <input type = \"number\" name =\"salary\"> <br>
						Job Type: <input type = \"text\" name = \"job_type\"> <br>
						Permission: <input type = \"number\" name = \"permission\"> <br>
						<input type = \"submit\">
					   </form> ";
				  
				echo "<a href=\"index.php\"> Click here </a> to go to the main menu."; 
			} else {
				echo "Invalid session!";
			}
		} else {
			echo "Session not set!"; 
			echo "<a href=\"index.php\"> Click here </a> to go back to the main page.";	
		}
?>
	
	</body>
</html>
