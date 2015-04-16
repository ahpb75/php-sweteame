<html>
<head></head>
<body>
<ul>
<?php $counter = 0;foreach ($course as $item):?>
<li><?php 
	if ($counter%2 == 0)
	{
	echo "<strong> CourseID: ".$item."</strong>";
	}
	else{
	echo form_open('Admin_controller/assign_ta_to_course');
	echo form_input('coursename',$item);
	echo form_submit('view','view this course');
	echo form_close();echo "</li>";
	}
	$counter = $counter + 1;
	?>
<?php endforeach;?>
</ul>
</body>
</html>

