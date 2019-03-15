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

$sql = "SELECT * FROM troops";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>Troop Number</th><th>Scout Master</th><th>Council Name</th><th>Number of Current Scouts</th><th>Number of Leaders</th><th>Number of Service Hours</th><th>Number of Camping Nights</th><th>Zip Code of the Charter</th></tr>";

  // output data of each row
  while($row = $result->fetch_assoc()) {
  echo "<tr><td>".$row["number"]."</td><td>".$row["name"]." </td><td> ".$row["council"]."</td><td>".$row["num_scouts"]."</td><td>".$row["num_leaders"]."</td><td>".$row["total_service"]."</td><td>".$row["total_camping"]."</td><td>".$row["zip"]."</td></tr>";
 }
  echo "</table>";
};

  echo "<a href=\"index.html\" onclick=\"location.reload()\">Return to home page</a>";

  $conn->close();
?>

<style>
table, th, td {
  border: 1px solid black;
}
</style>