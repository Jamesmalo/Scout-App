<?php

if(!isset($_POST['search'])){
  header('Location: index.html');
}
  
//loginInfo
$usr = "mrflemin_james";
$pwd = "B#kyYHn@jz)L"; 
$db = "mrflemin_jamesDB";
$conn;

// Create connection
$conn = new mysqli("localhost", $usr, $pwd, $db);

// Check connection
if ($conn->connect_error) {
  die('Connection failed: ' . $conn->connect_error);
}
  
//-query  the database table
$sql = "SELECT * FROM scouts WHERE firstname LIKE '%".$_POST['search']."%' OR lastname LIKE '%".$_POST['search']."%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>ID</th><th>Name</th><th>Rank</th><th>Date of Last Rank Up</th><th>Number of Badges</th><th>Number of Service Hours</th><th>Troop Number</th><th>Council Name</th></tr>";

  // output data of each row
  while($row = $result->fetch_assoc()) {
  echo "<tr><td>".$row["id"]."</td><td>".$row["first"]." ".$row["last"]."</td><td>".$row["rank"]."</td><td>".$row["rank_date"]."</td><td>".$row["badges"]."</td><td>".$row["service_hours"]."</td><td>".$row["troop"]."</td><td>".$row["troop_name"]."</td></tr>";
 }
  echo "</table>";
} else{
  echo "No Results";
};

  echo "<a href=\"index.html\" onclick=\"location.reload()\">Return to home page</a>";

  $conn->close();
?>