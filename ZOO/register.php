<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
		<title>register</title>
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
			
			.subtitle{
				position:absolute;
				left:40%;
				top:170px;
			}
			
			a:link, a:visited{
				text-decoration:none;
				color:black;
			}
			a:hover{
				color:green;
			}

			.form{
				font-size:110%;
				font-family: verdana;
				position:absolute;
				left:40%;
				top:240px;
			}

		</style>
		<div class="header">
			<h1><b><a href="home.html">Home</a></b> <b><a href="list.html">List</a></b> <b><a href="erandeer.html">ER&EER</a></b> <b><a href="physical.html">PhysicalDatabaseDesign</a></b> <b><a href="normalization.html">Normalization</a></b> <b><a href="aboutus.html">AboutUs</a></b> <b><a href="Login.php">Login</a></b></h1>

		</div>
	</head>
<body>
	<hr>
	<h2 class="subtitle">Register Here</h2>
	
	<form class="form"method="post" action="register.php">

		<?php include('errors.php'); ?>

		<div>
			<label>First Name</label>
			<input type="text" name="firstname">
		</div>
		<div>
			<label>Middle Name</label>
			<input type="text" name="middlename">
		</div>
		<div>
			<label>Last Name</label>
			<input type="text" name="lastname">
		</div>
		<div>
			<label>Email</label>
			<input type="email" name="email">
		</div>
		<div>
			<label>Employee id</label>
			<input type="text" name="id_1">
		</div>
		<div>
			<label>Confirm id</label>
			<input type="text" name="id_2">
		</div>
		<div>
			<label>Permission</label>
			<input type="number" name="permission">
		</div>
		<div>
			<button type="submit" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="index.php" style="text-decoration: underline;color: darkgreen;">Sign in</a>
		</p>
	</form>
</body>
</html>