 <!DOCTYPE HTML>
<html>
<head>
	<title> TA Selection </title>

</head>

<body>
	<h1> Computer Science Department </h1>
	<h2> TA Selection 2015 </h2>
<p> List of Applicants</p>

<?php
for each($applicants as $data){

    echo $data->lname . '<br />';
}
?>



<hr />

</body>

</html>