<html>
<head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap/css/bootstrap.css" />
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
        	bottom: 20px;
        }
        .list-group
        {
        	position: relative;
        	top: 20px;
        }
    </style>

</head>
<body>
<div class = "container box">
	<table class = "table table-bordered">
		<tr class = "warning">
			<td>Instructor Name</td>
			<td>Instructor Comment</td>
		</tr>
		<?php
		$counter = 0;
		foreach ($comment as $key => $value) {
			if ($counter%2 == 0)
			{
				echo "<tr><td>".$value."</td>";
			}
			else
			{
				echo "<td>".$value."</td></tr>";
			}
			$counter = $counter + 1;
		}
		?>
</div>
</body>
</html>

