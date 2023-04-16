// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_database";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Insert a record into the database
$sql = "INSERT INTO customers (name, email, city) VALUES ('John Doe', 'john@example.com', 'New York')";
if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Update a record in the database
$sql = "UPDATE customers SET city='Los Angeles' WHERE name='John Doe'";
if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

// Delete a record from the database
$sql = "DELETE FROM customers WHERE name='John Doe'";
if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
