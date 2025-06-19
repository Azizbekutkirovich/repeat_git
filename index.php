<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>This is testing git</title>
</head>
<body>
	<?php
		$message = "Hello world!";
		function app() {
			global $message;
			return $message;
		}
		echo app();
	?>
</body>
</html>
