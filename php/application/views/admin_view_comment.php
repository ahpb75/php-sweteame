<html>
<head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap/css/bootstrap.css" />
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
        .anno
        {
            width:100%;
        }
    </style>

</head>
<body>
<div class = "container ">
            <header class="jumbotron hero-spacer">

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
    <?php
    echo form_open('Admin_controller/make_a_comment');
    $data = array(
                'name' => 'admin_comment',
                'class' => 'form_control anno',
                'placeholder' => 'Make a comment here',
                );
    echo "<tr><td>".form_input($data)."</td>";
    echo form_hidden('username',$username);
    $data2 = array(
                'name' => 'Post',
                'value' => 'Post',
                'class' => 'btn btn-primary',
                );
        echo "<td>".form_submit($data2)."</td></tr>";
        echo form_close();
    ?>
</table>
</header>
</div>
</body>
</html>

