<html>
<head></head>
<body>
	<div align = "center">
		<?php
		foreach($username as $value)
		echo form_open('admin_controller/view_form2');
		echo $value;
		echo form_submit('view','view this applicant');
		echo form_close();
		echo "<br>";
		echo endforeach;
		?>
	</div>
</body>
</html>