<?php

//loginInfo
$usr = "mrflemin_james";
$pwd = "B#kyYHn@jz)L"; 
$db = "mrflemin_jamesDB";

// Create connection
$conn = new mysqli("localhost", $usr, $pwd, $db);


// Check connection
if ($conn->connect_error) {
  die('Connection failed: ' . $conn->connect_error);
}

$sql="SELECT * FROM leaders INNER JOIN scouts ON leaders.scout_id = scouts.id";
$result = $conn->query($sql);
  
if ($result->num_rows > 0){
  echo "<table><tr><th>Scout's ID</th><th>Leader's Name</th><th>Position</th><th>Service Hours</th><th>Troop Number</th><th>Council Name</th></tr>";

  //output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["scout_id"]."</td><td>".$row["first"]." ".$row["last"]."</td><td>".$row["position"]."</td><td>".$row["service_hours"]."</td><td>".$row["troop"]."</td><td>".$row["troop_name"]."</td></tr>";
  };
    echo "</table>";
    echo "<a href=\"index.html\" onclick=\"location.reload()\">Return to home page</a>";
} else {
  echo "<a href=\"index.html\" onclick=\"location.reload()\">No Results. Return to home page</a>";
}; 
$conn->close();

?>