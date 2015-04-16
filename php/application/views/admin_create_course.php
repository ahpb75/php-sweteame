<!DOCTYPE html>
<html>
<head>
<meta charset=UTF-8>
<div align = "center">
<title></title>
</div>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap/css/bootstrap.css" />
</head>
<body>
	<div align = "center">
		<div id ="login">
			<h1>Create Course</h1>
				<?php echo form_open("admin_controller/create_course");?>
				<label for="Coursename">Coursename:</label>
				<input type="text" name="Coursename" id="Coursename" value = "<?php echo set_value('Coursename');?>" />
				<label for="CourseId">CourseId:</label>
				<input type="text" name="CourseId" id="CourseId" value = "<?php echo set_value('CourseId');?>" />
				<br>
				<input type="submit" name="submit" value="submit" />
				<?php echo form_close();?>
			</p>
			</div>
</div>
</body>
</html>
