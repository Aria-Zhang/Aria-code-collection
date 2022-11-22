<!DOCTYPE html>
<html>
	<head>
		<title>Search Animal Record</title>
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
			<h1><b><a href="home.html">Home</a></b> <b><a href="list.html">List</a></b> <b><a href="erandeer.html">ER&EER</a></b> <b><a href="physical.html">PhysicalDatabaseDesign</a></b> <b><a href="normalization.html">Normalization</a></b> <b><a href="aboutus.html">AboutUs</a></b> <b><a href="Login.php">Login</a></b></h1>;

		</div>
		<hr/>
	</head>

		<body>
			<form action = "search_record_output.php" method = "POST">
			Choose an attribute to search by<br>
			<input type="radio" name="attribute" value="Animal_ID" checked> Animal ID</br>
			<input type="radio" name="attribute" value="Animal_Species"> Animal Species</br>
			<input type="radio" name="attribute" value="Animal_Domain"> Animal Domain</br>
			<input type="radio" name="attribute" value="Animal_Name"> Animal Name</br>
			Attribute Value: <input type = "text" name = "attributeValue"> </br> 
		<input type = "submit">
	  </form>


	 <p><a href='index.php' style='text-decoration: underline;color: darkgreen;'><b>Click here</b></a> to go back to the main page.</p>

</body>



</html>
	