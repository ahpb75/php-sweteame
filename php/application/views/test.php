<html>
<head>
<title><?php echo $user_name;?></title>
</head>
<body>
	<h1>#<?php echo $this->session->userdata('user_name');?></h1>
	<?php
	echo $this->session->userdata('user_type');
	echo"$$$";
	echo $this->session->all_userdata();
	?>
</body>
</html>