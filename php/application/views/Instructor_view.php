 <!DOCTYPE HTML>
<html>
<head>
	<title> TA Selection </title>

</head>

<body>
	<h1> Computer Science Department </h1>
	<h2> TA Selection 2015 </h2>

	<form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
   If you would like to leave comments on a TA, search by last name:

    
    Last name that begins with: <input type="text" name="query_string" value="" /> <br /><br />
    <input type="submit" name="submit" value="Submit" />
</form>
<hr />

</body>

</html>