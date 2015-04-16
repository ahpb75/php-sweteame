<html>
<head></head>
<body>
<ul>
<?php 
	if ($application == "")
	echo "There is no application for this applicant";
	else
	{
	foreach ($application as $item):
	 	foreach($item as $key => $value):
			echo "<li>".$key." => ".$value."</li>";
	 	endforeach;
	 endforeach;
	}
?>
</ul>
</body>
</html>