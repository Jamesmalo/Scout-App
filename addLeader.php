<?php 

//form info
$scout_id = $_POST['scout_id'];
$position = $_POST['position'];
$troop = $_POST['troop'];
$conn;

//loginInfo
$usr = "mrflemin_james";
$pwd = "B#kyYHn@jz)L"; 
$db = "mrflemin_jamesDB";

// Create connection
if (strlen($scout_id) > 0 and strlen($position) > 0 and strlen($troop) > 0) {
    $conn = new mysqli("localhost", $usr, $pwd, $db);
}

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

$sql = "INSERT INTO leaders (scout_id, position, troop) VALUES ('$scout_id','$position','$troop')";

if ($conn->query($sql) === true) {
    echo "User Information Saved!";
    echo "<a href=\"index.html\" onclick=\"location.reload()\">Return to home page</a>";
} else {
    echo 'Error: ' . $sql . '<br>' . $conn->error;
}

$conn->close();

?>