<!DOCTYPE html>
<html>
<head>

	<title>...</title>
	<link href="stylesheet.css" type="text/css" rel="stylesheet" media="(min-width: 640px)">
	
</head>
<body>

	<?php
		$resource = opendir("./");
		while(($file = readdir($resource)) !== FALSE){
			if ($file != '.' && $file != '..' && $file !='index.php' && $file !='stylesheet.css') {
				
				$parent = substr(strrchr(dirname(__FILE__), "/"), 1);
				//$parent = strstr(dirname(__FILE__), 'unimatrix/');
				// $parent = dirname(__FILE__);
				$linkToFile = "/BlockNet/unimatrix/".$parent."/".$file;
				echo "<a href='$linkToFile'>".$file."</a><br/>";
			}
		}

	?>

</body>
</html>

