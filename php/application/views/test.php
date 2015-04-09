<html>
<head>
<title><?php echo $this->input->post('username');
			echo "<br>";
            echo md5($this->input->post('password'));
            echo "<br>";
            echo $this->input->post('permissions');?>
</title>
</head>
<body>
</body>
</html>