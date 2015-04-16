<html>
<head></head>
<body>
<ul>
<?php foreach ($userinfo as $item):?>
<li><?php echo form_open('Admin_controller/view_form2');
	 echo form_input('username',$item->username);
	 echo form_submit('view','view this applicant');
	 echo form_input('comment',$item->comment);
	 echo form_close();?></li>
<?php endforeach;?>
</ul>
</body>
</html>

