<!DOCTYPE html>
<html>
<head>
<meta charset=UTF-8>
<div align = "center">
<title>Welcome to apply TA/PLA</title>
</div>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap/css/bootstrap.css" />
</head>
<body>
	<div align = "center">
		<div id ="login">
			<h1>Please login</h1>
			<form action = "" method='post'>
				<label for="username">username:</label>
				<input type="text" name="username" id="username">
				<label for="password">password:</label>
				<input type="password" name="password" id="password">
				<br>
				<input type="submit" name="submit" value="submit">
			</form>
			<p>Register <a href=<?php echo site_url("welcome/registration");?>>here</a></p>
			</p>
			</div>
</div>
</form>
</body>
</html>