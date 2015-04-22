<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link href="../../bootstrap/css/heroic-features.css" rel="stylesheet">
    <style>
        body {
            background: url(http://i.imgur.com/GHr12sH.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            padding-top: 70px;
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
	<div class = "container">
	        <header class="jumbotron hero-spacer">
	<h3>Announcement</h3>
	<ul>
	<?php
	$counter = 0;
	$num;
	foreach ($ss as $key => $value) {
		switch($counter%6)
		{
			case 0 :
				echo "<li> ";
				$num = $value;
				break;
			case 1 :
				echo " ".$value." Post on:";
				break;
			case 2 :
				echo $value."/";
				break;
			case 3 :
				echo $value." ";
				break;
			case 4 :
				echo $value.":";
				break;
			case 5 :
				echo $value."</li>";
				if($er == 1)
				{
					echo form_open('Admin_controller/erase_announcement');
					echo form_hidden('ID',$num);
					$data = array(
						'name' => 'erase',
						'value' => 'Erase',
						'class' => 'btn btn-primary',);
					echo form_submit($data);
					echo form_close();
				}
				break;

		}
		$counter = $counter + 1;
	}
	?>
	</ul>
</div>
</header>
</body>
</html>



