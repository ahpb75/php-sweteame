<html>
<head></head>
<body>
<ul>
<?php 
	foreach ($application as $item):
	 	foreach($item as $key => $value):
	 		if ($value == "")
	 			echo "There is no application for this applicant";
	 		else
			echo "<li>".$key." => ".$value."</li>";
	 	endforeach;
	 endforeach;
?>
</ul>
</body>
</html>