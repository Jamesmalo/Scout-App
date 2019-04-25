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

$sql="SELECT  service.scout_id, scouts.first, scouts.last, service.date, service.hours, service.description FROM service INNER JOIN scouts ON service.scout_id = scouts.id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>Scout ID</th><th>Name</th><th>Date</th><th>Amount of Service Hours</th><th>Description of Service</th></tr>";

  // output data of each row
  while($row = $result->fetch_assoc()) {
  echo "<tr><td>".$row["scout_id"]."</td><td>".$row["first"]." ".$row["last"]."</td><td>".$row["date"]."</td><td>".$row["hours"]."</td><td>".$row["description"]."</td></tr>";
 }
  echo "</table>";
};

  echo "<a href=\"index.html\" onclick=\"location.reload()\">Return to home page</a>";

  $conn->close();
?>