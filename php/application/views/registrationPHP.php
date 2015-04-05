<!DOCTYPE html>
<html>
<head>
<meta charset=UTF-8>
<title>CS 3380 Lab 8 </title>
</head>
<body>

<div align = "center">
	<div id = "login">
	<p>Please register
	<form action="/~aapcnc/cs3380/lab8/registration.php" method='post'>
		<label for="username">username:</label>
		<input type="text" name="username" id="username">
		<label for="password">password:</label>
		<input type="password" name="password" id="password">
		<br>
		<input type="submit" name="submit" value="submit">
	</form>
	</p>
	</div>
</div>
</body>
</html>


<?php

	include("../../secure/database.php");
	$conn = pg_connect(HOST." ".DBNAME." ".USERNAME." ".PASSWORD)
		or die('Could not connect: '.pg_last_error());


	if(isset($_POST['submit'])){

		mt_srand(); //seed number generator
		$salt = mt_rand();
		$username = htmlspecialchars(str_replace(' ','',$_POST['username']));
		$unshaw_pass = htmlspecialchars($_POST['password']);
		$pass = sha1($salt . $unshaw_pass);
		//$pass = sha1($unshaw_pass);
		//echo $pass;


			
		$query = 'INSERT INTO lab8.user_info (username) VALUES($1)';
		$query1 = 'INSERT INTO lab8.authentication (username,password_hash,salt) VALUES($1, $2, $3)';
		$query2 = 'SELECT * FROM lab8.user_info (username) VALUES ($1)';
		$query3 = 'INSERT INTO lab8.log (username,ip_address,action) VALUES ($1, $2, $3)';
		
		pg_prepare($conn, "error_check", $query2);
		$error_result = pg_execute($conn, "error_check", array($username));
		$row = pg_fetch_assoc($error_result);

		if($username == $row['username']){
			echo "Username already exists";
			echo '<br/>';
			echo "<a href=https://babbage.cs.missouri.edu/~aapcnc/cs3380/lab8/registration.php>Register Agian</a>";	
		}	

			
		pg_prepare($conn, "log", $query);
		$result = pg_execute($conn, "log", array($username));

		
		pg_prepare($conn, "set", $query1); 
		$result1 = pg_execute($conn, "set", array($username, $pass, $salt));
		
		pg_prepare($conn, "log_table", $query3);
		$result2 = pg_execute($conn, "log_table", array($username, $_SERVER['REMOTE_ADDR'], 'Registration'));
		
	
		//error checks
		/*$query2 = 'SELECT * FROM lab8.user_info (username) VALUES ($1)';
		pg_prepare($conn, "error_check", $query2);
		$error_result = pg_execute($conn, "error_check", array($username));
		$row = pg_fetch_assoc($error_result);
		*/
		if(!result1 || !result){
			echo 'Failed to register an account';	
		}
		else {
			header('Location: https://babbage.cs.missouri.edu/~aapcnc/cs3380/lab8/index.php');
		}	
	}	
?>
