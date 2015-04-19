
<html>
<head>

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap/css/bootstrap.css" />
<body>

<h1> Computer Science Department </h1>
<h2> Applicants </h2>


<?php
echo "hi";
foreach ($application->result() as $row)
	echo $row->program_level;

 
?>

   



</body>

</html>
