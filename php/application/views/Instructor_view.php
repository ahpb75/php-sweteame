
<html>
<head>

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap/css/bootstrap.css" />
<body>

<h1> Computer Science Department </h1>
<h2> Applicants </h2>


<?php
	echo "hi \n";
	foreach ($applications as $row){
		$app=$row->lname.", ".$row->fname.
		$row->GPA";
		echo $app;
	}
	echo "hi butthead"; 
?>

   



</body>

</html>
