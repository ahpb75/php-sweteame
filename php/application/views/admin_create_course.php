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
				echo form_open("Admin_controller/create_course_logic");
				echo "CourseId";
				echo form_input('CourseId','');
				echo "<br>";
				echo "Coursename";
				echo form_input('Coursename','');
				echo "<br>";
				echo form_submit('submit','submit');
				echo form_close();?>
			</p>
			</div>
</div>
</body>
</html>
