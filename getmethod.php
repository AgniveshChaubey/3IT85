<!DOCTYPE html>
<html>
<head>
	<title>GET Method Example</title>
</head>
<body>
	<form action="get_example.php" method="get">
		<label for="name">Name:</label>
		<input type="text" name="name" id="name" required>
		<br>
		<label for="age">Age:</label>
		<input type="number" name="age" id="age" required>
		<br>
		<input type="submit" value="Submit">
	</form>

	<?php 
		if (isset($_GET['name']) && isset($_GET['age'])) {
			echo "<h2>Values Entered:</h2>";
			echo "Name: ".$_GET['name']."<br>";
			echo "Age: ".$_GET['age']."<br>";
		}
	?>
</body>
</html>
