<?php

//loginInfo
$usr = "mrflemin_james";
$pwd = "B#kyYHn@jz)L"; 
$db = "mrflemin_jamesDB";

$conn = new mysqli("localhost", $usr, $pwd, $db);

// Check connection
if ($conn->connect_error) {
  die('Connection failed: ' . $conn->connect_error);
};  

$sql = "SELECT * FROM leaders";
$sql = "";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>ID</th><th>Name</th><th>Position</th><th>Troop Number</th></tr>";

  // output data of each row
  while($row = $result->fetch_assoc()) {
  echo "<tr><td>".$row["scout_id"]."</td><td>".$row["first"]." ".$row["last"]."</td><td>".$row["position"]."</td><td>".$row["troop"]."</td></tr>";
 }
  echo "</table>";
};

  echo "<a href=\"index.html\" onclick=\"location.reload()\">Return to home page</a>";

  $conn->close();
?>