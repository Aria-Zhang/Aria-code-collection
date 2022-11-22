<?php include('server.php')?>
<!DOCTYPE html>
<html>
	<head>
		<title>Log in</title>
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

			.form{
				font-size:110%;
				font-family: verdana;
				position:absolute;
				left:40%;
				top:150px;
			}

			.img{
				position:absolute;
				top:480px;
				left:8%;
			}
		</style>
		<div class="header">
			<h1><b><a href="home.html">Home</a></b> <b><a href="list.html">List</a></b> <b><a href="erandeer.html">ER&EER</a></b> <b><a href="physical.html">PhysicalDatabaseDesign</a></b> <b><a href="normalization.html">Normalization</a></b> <b><a href="aboutus.html">AboutUs</a></b> <b><a href="Login.php">Login</a></b></h1>

		</div>
	</head>

	<body>
		<hr>
		<div class="form">
			<h2>Log in</h2>
			<form action="Login.php"method="post">
				<?php include('errors.php');?>
				First Name:<br />
				<input type="text" name="firstname" /> <br />
				Last Name:<br />
				<input type="text" name="lastname" /> <br />
				ID: <br />
				<input type="text" name="id_1" /> <br /> <br />
				<button type="submit" name="login_user" />log in</button><br />
				<p>Not yet a member? <a href="register.php" style="text-decoration: underline;color: darkgreen;">Sign up now</a></p>
			</form>
		</div>
		<img class="img"src="https://www.torontozoo.com/!/slide/ZooReOpening_MediaPlayerSlide.jpg"width="1200px"height="auto"/>

		</hr>
		
	</body>
</html>