/*<!DOCTYPE html>
<html>
<head>
<meta charset=UTF-8>
</head>
<body>
	<div align = "center">
		<div id ="login">
			<p>Please login
			<form action = "/~aapcnc/cs3380/lab8/index.php" method='post'>
				<label for="username">username:</label>
				<input type="text" name="username" id="username">
				<label for="password">password:</label>
				<input type="password" name="password" id="password">
				<br>
				<input type="submit" name="submit" value="submit">
			</form>
			<p>Register <a href="registration.php">here</a></p>
			</p>
			</div>
</div>
</form>
</body>
</html>
*/
<?php
	
	include("../../secure/database.php");
	$conn = pg_connect(HOST." ".DBNAME." ".USERNAME." ".PASSWORD)
		or die('Could not connect: '.pg_last_error());
	
	
		
	if(isset($_POST['submit'])){
			
		$username = $_POST['username'];
		$pass = $_POST['password'];
			
		
		//HANDLE THE SESSION
		session_start();
		if(!isset($_SESSION['count'])){
			$_SESSION['count'] = 0;
			header('Location: https://babbage.cs.missouri.edu/~aapcnc/cs3380/lab8/home.php');
		}else{
			$_SESSION['username'] = $username;
			$_SESSION['count']++;
		}
		
	
		//AUTHENTICATE THE LOGIN
		$query = 'SELECT password_hash, salt FROM lab8.authentication WHERE username = $1';
		pg_prepare($conn, "reference", $query);
		$result = pg_execute($conn, "reference", array($username));
		$row = pg_fetch_assoc($result);
		$pwhash = sha1($row['salt'] . $pass);
				

		if($pwhas = $row['password_hash']){
			$query_log = ' INSERT INTO lab8.log(username,ip_address,action) VALUES ($1, $2, $3)';
			pg_prepare($conn, "loggin", $query_log);
			$result = pg_execute($conn, "loggin", array($username, $_SERVER['REMOTE_ADDR'], 'Login'));
			header('Location: https://babbage.cs.missouri.edu/~aapcnc/cs3380/lab8/home.php');
		}
		else{
			echo "FAILED TO LOG IN TO HOMEPAGE";
		}
			
	}

?>







