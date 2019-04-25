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

$sql="SELECT  id, first, last, rank, rank_date FROM scouts WHERE id LIKE '$id'";
$result = $conn->query($sql);
  
if ($result->num_rows > 0){
  echo "<table><tr><th>ID</th><th>Name</th><th>Rank</th><th>Date of Last Rank Up</th></tr>";

  //output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["id"]."</td><td>".$row["first"]." ".$row["last"]."</td><td>".$row["rank"]."</td><td>".$row["rank_date"]."</td></tr>";
  };
    echo "</table><br><br>";

    echo "You are Rank <table><tr><td>".$row["rank"]."</td></tr></table> !";

    echo "<a href=\"index.html\" onclick=\"location.reload()\">Return to home page</a>";
} else {
  echo "<a href=\"index.html\" onclick=\"location.reload()\">No Results. Return to home page</a>";
}; 
$conn->close();

?>