<?php 

//form info

$name = $_POST['badges'];
$date = $_POST['date'];
$conn;

//loginInfo
$usr = "mrflemin_james";
$pwd = "B#kyYHn@jz)L"; 
$db = "mrflemin_jamesDB";

// Create connection
if (strlen($name) > 0 and strlen($date) > 0) {
    $conn = new mysqli("localhost", $usr, $pwd, $db);
}

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

$sql = "INSERT INTO badges (badges, date) VALUES ('$badges','$date')";

if ($conn->query($sql) === true) {
    echo "New Badge Added!";
    echo "<a href=\"index.html\" onclick=\"location.reload()\">Return to home page</a>";
} else {
    echo 'Error: ' . $sql . '<br>' . $conn->error;
}

$conn->close();

?>