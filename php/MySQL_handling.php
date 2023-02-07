<php

//The following snippet will connect to your MySQL database using the MySQL improved extension.

$mysqli = mysqli_connect('localhost', 'DATABASE_USERNAME', 'DATABASE_PASSWORD', 'DATABASE_NAME');
//However, for the above connection code to work correctly, you must update the parameters to reflect your database credentials.

//Check and output connection errors:

if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
//Select database table and populate the results:

$result = $mysqli->query('SELECT * FROM students');
while ($row = $result->fetch_assoc()) {
	echo $row['name'] . '<br>';
}
//Retrieve the number of rows:

$result->num_rows;
Insert a new record:

$mysqli->query('INSERT INTO students (name) VALUES ("David")');
//Retrieve the number of affected rows:

$mysqli->affected_rows;
//Escape special characters in a string (which is vital if you're not using prepared statements):

$mysqli->real_escape_string($user_input_text);
//Prepare statement (prevents SQL injection):

$name = 'David';
$limit = 1;
// Prepare query
$stmt = $mysqli->prepare('SELECT age, address FROM students WHERE name = ? LIMIT ?');
// data types: i = integer, s = string, d = double, b = blog 
$stmt->bind_param('si', $name, $limit);
// Execute query
$stmt->execute();
// Bind the result
$stmt->bind_result($age, address);
//Close the query and database connection:

$stmt->close();
$mysqli->close();
  
  ?>
