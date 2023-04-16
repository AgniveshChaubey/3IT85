<!DOCTYPE html>
<html>
<head>
	<title>Form 2</title>
</head>
<body>
	<?php
		if(isset($_POST['name'])) {
			$name = $_POST['name'];
			echo "Hello, " . $name . "!<br>";
		}
	?>
	<form action="#" method="post">
		<label for="age">Enter your age:</label>
		<input type="text" id="age" name="age">
		<button type="submit">Submit</button>
	</form>
</body>
</html>
