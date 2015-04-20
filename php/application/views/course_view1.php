<html>
<head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap/css/bootstrap.css" />
    <style>
        body {
            background: url(http://i.imgur.com/GHr12sH.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        .box
        {
            background-color: white;

        }
    </style>

</head>
<body>
	<div class = "container box">
<table class = "table table-bordered">
	<tr>
		<td>CourseID</td>
		<td>TA</td>
		<td>CourseName</td>
		<td>View</td>
	</tr>
<?php $counter = 0;foreach ($course as $item):?>
<?php 
	if ($counter%3 == 0)
	{
		echo "<tr>";
	echo "<td> ".$item."</td>";
	}
	else if ($counter%3 == 1)
	{
		echo "<td>".$item."</td>";
	}
	else{
		echo"<td>";
	echo form_open('Admin_controller/assign_ta_to_course');
	echo form_input('coursename',$item);
		echo"</td>";
		echo"<td>";
	echo form_submit('view','view this course applicant');
		echo"</td>";
	echo form_close();
		echo"</tr>";
	}
	$counter = $counter + 1;
	?>
<?php endforeach;?>
</table>
</div>
</body>
</html>

