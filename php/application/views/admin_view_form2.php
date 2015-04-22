<html>
<head><link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap/css/bootstrap.css" />
    <style>
        body {
            background: url(http://i.imgur.com/GHr12sH.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            padding-top: 70px;
        }
        .box
        {
            background-color: white;
            margin-top: 50px;

        }
        .table
        {
        	position: relative;
        	top: 20px;
        	bottom: -20px;
        }
        .fix
        {
        	font-size: 18px;
        	color:#33CC00;
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
		$counter = 1;
	foreach ($application as $item):
		echo "<h3> This is form ".$counter."</h3>";
		echo "<table class = 'table table-bordered'>";
	 	foreach($item as $key => $value):
	 		echo "<tr>";
			echo "<td class ='fix'>".$key."</td>";
			echo "<td>".$value."</td>";
			echo "</tr>";
	 	endforeach;
	 	$counter = $counter + 1;
	 	echo "</table>";
	 endforeach;
	}
?>
</div>
</body>
</html>