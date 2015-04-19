
<html>
<head>

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap/css/bootstrap.css" />
<body>

<h1> Computer Science Department </h1>
<h2> Applicants </h2>


<?php
	echo "hi \n";
	foreach ($applications as $row){
		echo $row->lname.", ".$row->fname."\r\n"
		echo $row->GPA."\r\n";
	}
	echo "hi butthead"; 
?>

   



</body>

</html>
