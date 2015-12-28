<?php
require_once 'irid.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="" method="post">
		<input type="text" name="code" placeholder="0123456789">
		<input type="submit" value="Check" name="submit">
	</form>
	<br>
	<?php
	if (isset($_POST['submit'])) {
		$result = whois($_POST['code']);
		if ($result) {
			echo 'Valid';
		} else {
			echo 'Invalid';
		}
	}
	?>
</body>
</html>
