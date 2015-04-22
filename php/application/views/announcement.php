<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
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
        }
        tbody
        {
        	position: relative;
        	bottom: 20px;
        }
    </style>
</head>
<body>
<div class = "container box">
	<h3>Announcement</h3>
	<ul>
	<?php
	$counter = 0;
	$num;
	foreach ($ss as $key => $value) {
		if($counter%2 == 0)
		{
			echo "<li> ";
			$num = $value;
		}
		else
		{	
			if($er == 1)
			{
				echo " ".$value;
				echo form_open('Admin_controller/erase_announcement');
				echo form_hidden('ID',$num);
				$data = array(
					'name' => 'erase',
					'value' => 'Erase',
					'class' => 'btn btn-primary',);
				echo form_submit($data)."</li>";
				echo form_close();
			}
			else
			echo " ".$value."</li>";
		}
		$counter = $counter + 1;
	}
	?>
	</ul>
</div>
</body>
</html>



