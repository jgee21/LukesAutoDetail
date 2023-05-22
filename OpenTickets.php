<!DOCTYPE html>
<html>
<head>
  <title>Job Table</title>
  <style>
    table {
      border-collapse: collapse;
    }
    th, td {
      border: 2px solid black;
      padding: 5px;
    }
  </style>
</head>
<body>
    <?php
// Connect to the database
$servername = "localhost:8889";
$username = "root";
$password = "root";
$dbname = "lad";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Retrieve data from the database
$sql = "SELECT JobID, Customer, Car_Type, Job, Date, Completed FROM jobs";
$result = mysqli_query($conn, $sql);

// Display data in a table
if (mysqli_num_rows($result) > 0) {
  echo "<table><tr><th>Job ID</th><th>Customer</th><th>Car Type</th><th>Job</th><th>Date</th><th>Completed</th></tr>";
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>" . $row["JobID"]. "</td><td>" . $row["Customer"]. "</td><td>" . $row["Car_Type"]. "</td><td>" . $row["Job"]. "</td><td>" . $row["Date"]. "</td><td>" . $row["Completed"]. "</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}

// Close the database connection
mysqli_close($conn);
?>
</body>
</html>