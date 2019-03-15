<?php

$usr = "mrflemin_james";
$pwd = "B#kyYHn@jz)L"; 
$db = "mrflemin_jamesDB";
        
// Create connection
$conn = new mysqli("localhost", $usr, $pwd, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
        
if(isset($_POST['search'])) {
    $search = $_POST['search'];
    $search = preg_replace("#[^0-9a-z]i#","", $search);
  
    $sql = mysqli_query("SELECT * FROM scouts WHERE first, last LIKE '%$search%'") or die ("Could not search");
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      echo "<table><tr><th>ID</th><th>Name</th><th>Rank</th><th>Date of Last Rank Up</th><th>Number of Badges</th><th>Number of Service Hours</th><th>Troop Number</th><th>Council Name</th></tr>";
  
      // output data of each row
      while($row = $result->fetch_assoc()) {
      echo "<tr><td>".$row["id"]."</td><td>".$row["first"]." ".$row["last"]."</td><td>".$row["rank"]."</td><td>".$row["rank_date"]."</td><td>".$row["badges"]."</td><td>".$row["service_hours"]."</td><td>".$row["troop"]."</td><td>".$row["troop_name"]."</td></tr>";
     }
      echo "</table>";
      echo "<a href=\"index.html\" onclick=\"location.reload()\">Return to home page</a>";
  } else {
      echo "0 results";
    }
    
  $conn->close();
  

?>
