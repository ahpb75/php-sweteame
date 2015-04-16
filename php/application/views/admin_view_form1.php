<html>
<head></head>
<body>
<ul>
<?php foreach ($username as $item):?>
<li><?php echo form_open('Admin_controller/view_form2');
	 echo form_input('username',$item);
	 echo form_submit('view','view this applicant');
	 echo form_close();?></li>
<?php endforeach;?>
</ul>
</body>
</html>