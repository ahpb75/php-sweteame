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
				<?php
				echo form_open("welcome/registration");
				?>
				<label for="username">Username:</label>
				<input type="text" name="username" id="username" value="<?php echo set_value('username')?>;">
				<br>
				<label for="password">Password:</label>
				<input type="password" name="password" id="password" value="<?php echo set_value('password')?>;">
				<br>
				<label for="password">Confirm Password:</label>
				<input type="password" name="cpassword" id="password" value="<?php echo set_value('cpassword')?>;">
				<br>
				<input type="radio" name="permissions" value="2" checked>Applicant
				<br>
				<input type="radio" name="permissions" value="1">Staff
				<br>
				<input type="submit" name="submit" value="submit">
				<?php
				echo form_close();
				?>
			<p>Back <a href=<?php echo site_url("welcome/index");?> >here</a></p>
			</p>
			</div>
</div>
</form>
</body>
</html>