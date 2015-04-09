<html>
<head>
<title><?php echo $user_name;?></title>
</head>
<body>
	<h1>#<?php echo $this->session->userdata('user_name');?></h1>
	<?php
	$query = $this->session->all_userdata();
	 foreach($query as $key => $row)
            {
                echo $key."=>".$row;
                echo "<br>";
            }
	?>
</body>
</html>