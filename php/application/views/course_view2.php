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
	if ($app_course == "")
	echo "There is no applicant for this course";
	else
	{
	foreach ($app_course as $item):
		echo "<table class = 'table table-bordered'>";
	 	foreach($item as $key => $value):
	 		// if($key == "appID")
	 		// 	$user = $value;
			// echo "<li>".$key." => ".$value."</li>";
			echo "<tr>";
			echo "<td>".$key."</td>";
			echo "<td>".$value."</td>";
			echo "</tr>";
	 	endforeach;
	 	echo form_open('Admin_controller/enter_score');
	 	// echo form_input('user',$user);
	 	echo "<tr><td><strong>Enter Score</strong> ";
	 	echo form_input('score','')."</td>";
	 	// echo "Assign this applicant be TA"
	 	// echo form_input('assign','');
	 	echo "<td>".form_submit('submit','submit')."</td></tr>";
	 	echo form_close();
	 	echo form_open('Admin_controller/assign_ta_to_this_course');
	 	echo "<tr><td><strong>Assign this applicant be TA </strong></td>";
	 	echo "<td>".form_submit('submit','assign')."</td></tr>";
	 	echo form_close();
	 	echo "</table>";
	 endforeach;
	}
?>
</div>
</body>
</html>