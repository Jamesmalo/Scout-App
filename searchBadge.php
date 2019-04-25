<?php

$id = $_POST['id'];
$conn;

//loginInfo
$usr = "mrflemin_james";
$pwd = "B#kyYHn@jz)L"; 
$db = "mrflemin_jamesDB";

// Create connection
if (strlen($id) > 0) {
  $conn = new mysqli("localhost", $usr, $pwd, $db);
}

// Check connection
if ($conn->connect_error) {
  die('Connection failed: ' . $conn->connect_error);
}

$sql="SELECT  * FROM badges WHERE scout_id LIKE '$id'";
$result = $conn->query($sql);
  
if ($result->num_rows > 0){
  echo "<table><tr><th>ID</th><th>Name of Badge</th><th>Date Earned</th></tr>";

  //output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["scout_id"]."</td><td>".$row["name"]."</td><td>".$row["date"]."</td></tr>";
  };
    echo "</table>";
    echo "<a href=\"index.html\" onclick=\"location.reload()\">Return to home page</a>";
} else {
  echo "<a href=\"index.html\" onclick=\"location.reload()\">No Results. Return to home page</a>";
}; 
$conn->close();

?>