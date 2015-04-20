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
        .box
        {
            background-color: white;

        }
    </style>
</head>
<body>
<div class = "container box">
<?php 
	if ($application == "")
	echo "There is no application for this applicant";
	else
	{
	foreach ($application as $item):
		echo "<table class = 'table table-bordered'>";
	 	foreach($item as $key => $value):
	 		echo "<tr>";
			echo "<td>".$key."</td>";
			echo "<td>".$value."</td>";
			echo "</tr>";
	 	endforeach;
	 	echo "</table>";
	 endforeach;
	}
?>
</div>
</body>
</html>