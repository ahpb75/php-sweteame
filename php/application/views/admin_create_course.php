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
				<?php 
				echo form_open("admin_controller/create_course_logic");
				echo form_input('CourseId','');
				echo form_input('Coursename','');
				echo form_submit('submit','submit');
				echo form_close();?>
			</p>
			</div>
</div>
</body>
</html>
