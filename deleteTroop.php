<?php 

//form info
$number = $_POST['number'];
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

$sql = "DELETE FROM troops WHERE number = '$number'";

if ($conn->query($sql) === true) {
    echo "User Information Deleted!";
    echo "<a href=\"index.html\" onclick=\"location.reload()\">Return to home page</a>";
} else {
    echo 'Error: ' . $sql . '<br>' . $conn->error;
}

$conn->close();

?>