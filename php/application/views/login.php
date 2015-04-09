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
				<?php echo form_open("welcome/login");?>
				<label for="username">username:</label>
				<input type="text" name="username" id="username" value = "<?php echo set_value('username');?>" />
				<label for="password">password:</label>
				<input type="password" name="password" id="password" value = "<?php echo set_value('password');?>" />
				<br>
				<input type="submit" name="submit" value="submit" />
				<?php echo form_close();?>
			<p>Register <a href=<?php echo site_url("welcome/registration");?>>here</a></p>
			</p>
			</div>
</div>
</body>
</html>
