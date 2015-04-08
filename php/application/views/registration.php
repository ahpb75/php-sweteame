<!DOCTYPE html>
<html>
<head>
<meta charset=UTF-8>
<div align = "center">
<title>Welcome to apply TA/PLA</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap/css/bootstrap.css" />
</div>
</head>
<body>
	<div align = "center">
		<div id ="login">
			<h1>Please Register</h1>
			<form action = "" method='post'>
				<label for="username">username:</label>
				<input type="text" name="username" id="username">
				<br>
				<label for="password">password:</label>
				<input type="password" name="password" id="password">
				<br>
				<label for="password">Confirm Password:</label>
				<input type="password" name="cpassword" id="password">
				<br>
				<input type="submit" name="submit" value="submit">
			</form>
			<p>Back <a href=<?php echo site_url("welcome/index");?> >here</a></p>
			</p>
			</div>
</div>
</form>
</body>
</html>