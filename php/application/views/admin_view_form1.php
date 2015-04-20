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
        }
        .box
        {
            background-color: white;

        }
    </style>
</head>
<body>
<div class = "container box">
<table class = "table table-bordered">
	<tr>
		<td>Username</td>
		<td>View</td>
		<td>Comment</td>
	</tr>
<?php $counter = 0;foreach ($userinfo as $item):?>
<?php 
	if ($counter%2 == 0)
	{
	echo "<tr>";
	echo form_open('Admin_controller/view_form2');
	echo "<td>".form_input('username',$item)."</td>";
	echo "<td>".form_submit('view','view this applicant')."</td>";
	echo form_close();
	}
	else{
	echo "<td>".$item."</td>";
	echo "</tr>";
	}
	$counter = $counter + 1;
	?>
<?php endforeach;?>
</table>
</div>
</body>
</html>



