<?php 
	if (!isset($_SESSION)) {
		session_start(); 
	}
	include "connection.php";
	
	//declare variables
	$firstname = "";
	$middlename = "";
	$lastname = "";
	$email = "";
	$id = "";
	$error = array();
	$_SESSION['success'] = "";
	
	// connect to database
	$conn = new mysqli($servername, $server_username, $server_password, $dbname);
	
	// Check connection
	if ($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
	}
	//register employees
	if (isset($_POST['reg_user'])) {
		//receive input from form
		$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
		$middlename = mysqli_real_escape_string($conn, $_POST['middlename']);
		$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$id_1 = mysqli_real_escape_string($conn, $_POST['id_1']);
		$id_2 = mysqli_real_escape_string($conn, $_POST['id_2']);
		$permission = mysqli_real_escape_string($conn, $_POST['permission']);
	
		//same id check
		if ($id_1 != $id_2){
			array_push($error, "The two ids do not match");
		}
		
		//check if username exists
		$query = "SELECT * FROM Employee_Name WHERE FirstName = '$firstname' AND LastName = '$lastname'";
		$results = $conn->query($query);
		
		if($result->num_rows != 0){
			array_push($error, "This username already exists");
		}
	
		//register user if no error
		if (count($error) == 0){
			$query ="INSERT INTO Employee(ID, Permission) VALUES('$id_1', $permission);
				     INSERT INTO Employee_Name(ID, FirstName, MiddleName, LastName) VALUES('$id_1','$firstname', '$middlename', '$lastname');
				     INSERT INTO Employee_ContactInfo(ID, Email) VALUES('$id_1', '$email');";
			if($conn->multi_query($query) === TRUE){
				echo "You are registered successfully. Please sign in.<br>";
			}else{
				echo "Error: ". $query . "<br>" . $conn->error;
			}
			$_SESSION['success'] = "You are now logged in";
		}
	}
		
		//Login users
		if (isset($_POST['login_user'])) {
		$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
		$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
		$id_1 = mysqli_real_escape_string($conn, $_POST['id_1']);
		
		//check name
		if (empty($firstname)||empty($lastname)) {
			array_push($errors, "Username is required");
		}
		if (empty($id_1)) {
			array_push($errors, "ID is required");
		}
		if (count($errors) == 0) {	
			$query = "SELECT * FROM Employee_Name WHERE FirstName='$firstname' AND LastName='$lastname' AND ID='$id_1'";
			$results = $conn->query($query);

			if($results->num_rows ==  1){
				$_SESSION['firstname'] = $firstname;
				$_SESSION['success'] = "You are now logged in";
				header('location: index.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}
	$conn->close();

?>