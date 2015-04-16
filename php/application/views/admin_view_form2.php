<html>
<head></head>
<body>
<ul>
<?php foreach ($application as $item):?>
<li><?php foreach($item as $key => $value):
		echo $key." => ".$value;?></li>
<?php endforeach;endforeach;?>
</ul>
</body>
</html>