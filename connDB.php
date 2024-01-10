<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="users";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
$sql = "SELECT * FROM registration";
$result = mysqli_query($conn, $sql);

//Code to fetch data
/*
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["email"]. "<br>";
  }
} else {
  echo "0 results";
} */
// Check connection
if (!$conn) {
  die("Connection failed");
}

?>