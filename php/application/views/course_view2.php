<html>
<head><link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap/css/bootstrap.css" /></head>
<body>
<ul>
<?php 
	if ($app_course == "")
	echo "There is no applicant for this course";
	else
	{
	foreach ($app_course as $item):
	 	foreach($item as $key => $value):
	 		if($key == "appID")
	 			$user = $value;
			echo "<li>".$key." => ".$value."</li>";
	 	endforeach;
	 	echo"---------------------";
	 	echo form_open('Admin_controller/enter_score');
	 	echo form_input('user',$user);
	 	echo "Enter Score for this applicant";
	 	echo form_input('score','');
	 	echo "Assign this applicant be TA"
	 	echo form_input('assign','');
	 	echo"<br>";
	 	echo form_submit('submit','submit');
	 	echo form_close();
	 	echo "<br>";
	 endforeach;
	}
?>
</ul>
</body>
</html>