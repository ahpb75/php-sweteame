<html>
<head></head>
<body>
<ul>
<?php 
	if ($application == "")
	echo "There is no applicant for this course";
	else
	{
	foreach ($application as $item):
		$user;
	 	foreach($item as $key => $value):
	 		if($key == "appID")
	 			$user = $value;
			echo "<li>".$key." => ".$value."</li>";
	 	endforeach;
	 	echo"---------------------";
	 	echo form_open('Admin_controller/enter_score');
	 	echo form_input('user',$user);
	 	echo "Score";
	 	echo form_input('score','');
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