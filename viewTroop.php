<?php

$troop = $_POST['troop'];
$conn;

//loginInfo
$usr = "mrflemin_james";
$pwd = "B#kyYHn@jz)L"; 
$db = "mrflemin_jamesDB";

// Create connection
if (strlen($troop) > 0) {
  $conn = new mysqli("localhost", $usr, $pwd, $db);
}

// Check connection
if ($conn->connect_error) {
  die('Connection failed: ' . $conn->connect_error);
}

$sql="SELECT  number, name, council, num_scouts, total_service, total_camping, zip, num_leaders FROM scouts WHERE number LIKE '$troop'";
$result = $conn->query($sql);
  
if ($result->num_rows > 0){
  echo "<table><tr><th>Troop Number</th><th>Name of Scout Master</th><th>Name of Council</th><th>Number of Scouts</th><th>Number of Leaders</th><th>Number of Service Hours</th><th>Total Camping Hours</th><th>Zip Code of Charter</th></tr>";

  //output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["number"]."</td><td>".$row["name"]."</td><td>".$row["council"]."</td><td>".$row["num_scouts"]."</td><td>".$row["num_leaders"]."</td><td>".$row["total_service"]."</td><td>".$row["total_camping"]."</td><td>".$row["zip"]."</td><td>".$row["troop_name"]."</td></tr>";
  };
    echo "</table>";
    echo "<a href=\"index.html\" onclick=\"location.reload()\">Return to home page</a>";
} else {
  echo "<a href=\"index.html\" onclick=\"location.reload()\">No Results. Return to home page</a>";
}; 
$conn->close();

?>