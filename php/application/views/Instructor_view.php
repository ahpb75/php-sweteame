
<html>
<head>

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap/css/bootstrap.css" />
<body>

<h1> Computer Science Department </h1>
<h2> Applicants </h2>


<?php
	
	foreach ($applications as $row){
		foreach($row as $key => $value){
		echo "<li>".$key." => ".$value."</li>";
		}
		echo"-------------------------------------------------";
	 	echo "<br>";
	 	echo "<br>";
	}
	
?>

   



</body>

</html>
