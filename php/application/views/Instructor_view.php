
<html>
<head>

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap/css/bootstrap.css" />
<body>

<h1> Computer Science Department </h1>
<h2> Applicants </h2>


<?php
	echo "hi";
	echo $application->username;
	foreach ($application as $row){
		echo "before foreach";
		echo $row->username;
		echo "for each loop after";
	}
	echo "hi butthead"; 
?>

   



</body>

</html>
