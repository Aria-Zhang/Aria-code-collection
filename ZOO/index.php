<!DOCTYPE html>
<html>
<head>
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
	</head>
<body>
	<hr>
	<?php 
		session_start(); 
	
		if (!isset($_SESSION['firstname'])) {
			$_SESSION['msg'] = "You must log in first";
			include_once ('login.php'); // This will insure that login.php is included only once
		}
	
		if (isset($_GET['logout'])) {
			session_destroy();
			unset($_SESSION['firstname']);
			include_once ('login.php'); // This will insure that login.php is included only once
			$_SESSION['msg'] = "You must log in first";
	
		}
	?>
	
	<!-- // notification message -->
	<?php
		if (!isset($_SESSION['firstname'])){
			echo "<h3>";
				echo $_SESSION['msg'];
			echo"</h3>";
		}else if (isset($_SESSION['success'])){
			echo "<h3>"; 
				echo $_SESSION['success']; 
				unset($_SESSION['success']);
			echo "</h3>";
		}
					
	?>
	
	<!-- logged in user information -->
		<?php  if (isset($_SESSION['firstname'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['firstname']; ?></strong></p>
			<!-- links to other pages -->
			<p><a href="create_record.php"style="text-decoration: underline;color: darkgreen;"><b>Click here</b> </a>to create employee profiles.</p>
			<p><a href="update_record.php"style="text-decoration: underline;color: darkgreen;"><b>Click here</b> </a>to update employee information.</p>
			<p><a href="delete.php"style="text-decoration: underline;color: darkgreen;"><b>Click here</b> </a>to delete employee records.</p>
			<p><a href="join_table.php"style="text-decoration: underline;color: darkgreen;"><b>Click here</b> </a> to see employee information (joined table).</p>
			<p><a href="image_add.php"style="text-decoration: underline;color: darkgreen;"><b>Click here</b> </a>to add animal images.</p>
			<p> <a href="index.php?logout='1'" style="color: red;text-decoration:underline;">logout</a> </p>
		<?php endif; ?>	
		<p><a href="image_view.php"style="text-decoration: underline;color: darkgreen;"><b>Click here</b> </a>to view animal images.</p>
		<p><a href="search_record.php"style="text-decoration: underline;color: darkgreen;"><b>Click here</b> </a> to search animal records.</p>

</body>
</html>