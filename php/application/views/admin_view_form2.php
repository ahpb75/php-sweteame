<html>
<head><link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap/css/bootstrap.css" />
    <style>
        body {
            background: url(http://i.imgur.com/GHr12sH.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
    </style>
</head>
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
	 	echo"---------------------";
	 	echo "<br>";
	 endforeach;
	}
?>
</ul>
</body>
</html>