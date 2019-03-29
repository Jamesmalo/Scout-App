<?php 

//form info
$firstname = $_POST['first'];
$lastname = $_POST['last'];
$position = $_POST['position'];
$troop = $_POST['troop'];
$conn;

//loginInfo
$usr = "mrflemin_james";
$pwd = "B#kyYHn@jz)L"; 
$db = "mrflemin_jamesDB";

// Create connection
if (strlen($firstname) > 0 and strlen($lastname) > 0 and strlen($position) > 0 and strlen($troop) > 0) {
    $conn = new mysqli("localhost", $usr, $pwd, $db);
}

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

$sql = "INSERT INTO scouts (first, last, position, troop) VALUES ('$firstname','$lastname','$position','$troop')";

if ($conn->query($sql) === true) {
    echo "User Information Saved!";
    echo "<a href=\"index.html\" onclick=\"location.reload()\">Return to home page</a>";
} else {
    echo 'Error: ' . $sql . '<br>' . $conn->error;
}

$conn->close();

?>