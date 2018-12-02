<!DOCTYPE html>
<html>

	<head>
		 <meta charset="utf-8">
		 <link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>
		<form action="index.php" method="_GET">
		<p>Rows: <input type="number" name="rows1" /></p>
		<p>Colons <input type="number" name="cols1" /></p>
		<p><input type="submit" /></p>
		</form>	
		
		<?php
			include("f1.php");
			
			$rows1 = $_GET['rows1'];
			$cols1 =  $_GET['cols1'];

			//table 1
			$rows = 6;
			$cols = 6;
			if(  $_GET['rows1'] == '' && $_GET['cols1'] == '')
			{
				f1($rows, $cols);
			}
			else
			{
				f1($_GET['rows1'], $_GET['cols1']);

				if($rows1 == $cols1 && $rows1 > 0)
				{
					$servername = "weblab4.com";
					$database = "data";
					$username = "root";
					$password = "";
					// Create connection
					$conn = mysqli_connect($servername, $username, $password, $database);
					// Check connection
					if (!$conn) {
					      die("Connection failed: " . mysqli_connect_error());
					}
					 
					 
					$sql = "INSERT INTO rightnum (rows, cols) VALUES ('$rows1', '$cols1')";
					if (mysqli_query($conn, $sql)) {
					} else {
					      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
					}
					mysqli_close($conn);
				}
				else
				{

					$servername = "weblab4.com";
					$database = "data";
					$username = "root";
					$password = "";
					// Create connection
					$conn = mysqli_connect($servername, $username, $password, $database);
					// Check connection
					if (!$conn) {
					      die("Connection failed: " . mysqli_connect_error());
					}
					 
					 
					$sql = "INSERT INTO wrongnum (rows, cols) VALUES ('$rows1', '$cols1')";
					if (mysqli_query($conn, $sql)) {
					} else {
					      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
					}
					mysqli_close($conn);
				
				}

			}


			


			include("f2.php");
			//table 2
			$rows2 = 8;
			$cols2 = 8;
			if(  $_GET['rows1'] == '' && $_GET['cols1'] == '' )
			{
				f2($rows2, $cols2);
			}
			else
			{
				f2($_GET['rows1'], $_GET['cols1']);

				if($rows1 == $cols1 && $rows1 > 0)
				{
					$servername = "weblab4.com";
					$database = "data";
					$username = "root";
					$password = "";
					// Create connection
					$conn = mysqli_connect($servername, $username, $password, $database);
					// Check connection
					if (!$conn) {
					      die("Connection failed: " . mysqli_connect_error());
					}
					 
					 
					$sql = "INSERT INTO rightnum (rows, cols) VALUES ('$rows1', '$cols1')";
					if (mysqli_query($conn, $sql)) {
					} else {
					      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
					}
					mysqli_close($conn);
				}
				else
				{

					$servername = "weblab4.com";
					$database = "data";
					$username = "root";
					$password = "";
					// Create connection
					$conn = mysqli_connect($servername, $username, $password, $database);
					// Check connection
					if (!$conn) {
					      die("Connection failed: " . mysqli_connect_error());
					}
					 
					 
					$sql = "INSERT INTO wrongnum (rows, cols) VALUES ('$rows1', '$cols1')";
					if (mysqli_query($conn, $sql)) {
					} else {
					      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
					}
					mysqli_close($conn);
				
				}


			}




			//table 3
			include("f3.php");
			$rows3 = 6;
			$cols3 = 7;
			if(  $_GET['rows1'] == '' && $_GET['cols1'] == '')
			{
				f3($rows3, $cols3);
			}
			else
			{
				f3($_GET['rows1'], $_GET['cols1']);

				if($rows1 > 0 && $cols1 > 0)
				{
					$servername = "weblab4.com";
					$database = "data";
					$username = "root";
					$password = "";
					// Create connection
					$conn = mysqli_connect($servername, $username, $password, $database);
					// Check connection
					if (!$conn) {
					      die("Connection failed: " . mysqli_connect_error());
					}
					 
					 
					$sql = "INSERT INTO rightnum (rows, cols) VALUES ('$rows1', '$cols1')";
					if (mysqli_query($conn, $sql)) {
					} else {
					      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
					}
					mysqli_close($conn);
				}
				else
				{

					$servername = "weblab4.com";
					$database = "data";
					$username = "root";
					$password = "";
					// Create connection
					$conn = mysqli_connect($servername, $username, $password, $database);
					// Check connection
					if (!$conn) {
					      die("Connection failed: " . mysqli_connect_error());
					}
					 
					$sql = "INSERT INTO wrongnum (rows, cols) VALUES ('$rows1', '$cols1')";
					if (mysqli_query($conn, $sql)) {
					} else {
					      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
					}
					mysqli_close($conn);
				
				}
			}


			




			//table 4
			include("f4.php");
			$rows4 = 8;
			$cols4 = 7;
			if(  $_GET['rows1'] == '' && $_GET['cols1'] == '')
			{
				f4($rows4, $cols4);
			}
			else
			{
				f4($_GET['rows1'], $_GET['cols1']);

				if($rows1 > 0 && $cols1 > 0)
				{
					$servername = "weblab4.com";
					$database = "data";
					$username = "root";
					$password = "";
					// Create connection
					$conn = mysqli_connect($servername, $username, $password, $database);
					// Check connection
					if (!$conn) {
					      die("Connection failed: " . mysqli_connect_error());
					}
					 
					 
					$sql = "INSERT INTO rightnum (rows, cols) VALUES ('$rows1', '$cols1')";
					if (mysqli_query($conn, $sql)) {
					} else {
					      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
					}
					mysqli_close($conn);
				}
				else
				{

					$servername = "weblab4.com";
					$database = "data";
					$username = "root";
					$password = "";
					// Create connection
					$conn = mysqli_connect($servername, $username, $password, $database);
					// Check connection
					if (!$conn) {
					      die("Connection failed: " . mysqli_connect_error());
					}
					 
					echo "Connected successfully";
					 
					$sql = "INSERT INTO wrongnum (rows, cols) VALUES ('rows1', 'cols1')";
					if (mysqli_query($conn, $sql)) {
					} else {
					      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
					}
					mysqli_close($conn);
				
				}
			}

			
		?>
	</body>
</html>