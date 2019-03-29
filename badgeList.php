<?php 

//form info
$scoutID = $_POST['scout_id'];
$name = $_POST['badge'];
$date = $_POST['date'];
$conn;

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

$sql = "INSERT INTO badges (scout_id, badges, date) VALUES ('$scoutID','$name','$date')";

if ($conn->query($sql) === true) {
    echo "New Badge Added!";
    echo "<a href=\"index.html\" onclick=\"location.reload()\">Return to home page</a>";
} else {
    echo 'Error: ' . $sql . '<br>' . $conn->error;
}

$conn->close();

?>