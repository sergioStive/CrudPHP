	 
	<!DOCTYPE html>
<html lang="en">
 
	<head>
	 <title>Check Login</title>
	 <meta charset = "utf8" />
	</head>
	 
	<body>
	 
	<?php
	 
	 $host_db = "localhost";
	 $user_db = "root";
	 $pass_db = "1234";
	 $db_name = "basephp";
	 $tbl_name = "usuarios";
	 
	// Connect to server and select databse.
	mysql_connect("$host_db", "$user_db", "$pass_db")or die("Cannot Connect to Data Base.");
	 
	mysql_select_db("$db_name")or die("Cannot Select Data Base");
	 
	// sent from form
	$username = $_POST['username'];
	$password = $_POST['password'];
	 
	$sql= "SELECT * FROM $tbl_name WHERE userName = '$username' and contraseña='$password'";
	 
	$result=mysql_query($sql);
	 
	// counting table row
	$count = mysql_num_rows($result);
	// If result matched $username and $password
	 
	if($count == 1){
	 
         $_SESSION['loggedin'] = true;
	 $_SESSION['username'] = $username;
	 $_SESSION['start'] = time();
	 $_SESSION['expire'] = $_SESSION['start'] + (5 * 60) ;
	 
	echo "<br> Bienvenido! " . $_SESSION['username'];
        header("Index.php");
	}
	 else {
	 echo "<br/>Username o Password estan incorrectos.<br>";
	 
	 echo "<a href='Index.php'>Volver a Intentarlo</a>";
	}
	 
	?>
 
	</body>
	</html>
