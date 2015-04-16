<html>
<head></head>
<body>
<ul>
<?php $counter = 0;foreach ($userinfo as $item):?>
<li><?php 
	if ($counter/2 == 0)
	{
	echo form_open('Admin_controller/view_form2');
	echo form_input('username',$item);
	echo form_submit('view','view this applicant');
	echo form_close();?></li>
	}
	echo "<strong>".$item."</strong>";
	$counter = $counter + 1;
	?>
<?php endforeach;?>
</ul>
</body>
</html>

