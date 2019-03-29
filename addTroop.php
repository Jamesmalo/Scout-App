<?php 

//form info
$number = $_POST['number'];
$name = $_POST['name'];
$council = $_POST['council'];
$num_scouts = $_POST['num_scouts'];
$total_service = $_POST['total_service'];
$total_camping = $_POST['total_camping'];
$zip = $_POST['zip'];
$num_leaders = $_POST['num_leaders'];
$conn;

//loginInfo
$usr = "mrflemin_james";
$pwd = "B#kyYHn@jz)L"; 
$db = "mrflemin_jamesDB";

// Create connection
if (strlen($number) > 0 and strlen($name) > 0 and strlen($council) > 0 and strlen($num_scouts) > 0 and strlen($total_service) > 0 and strlen($total_service) > 0 and strlen($zip) > 0 and strlen($num_leaders) > 0) {
    $conn = new mysqli("localhost", $usr, $pwd, $db);
}

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

$sql = "INSERT INTO troops (number, name, council, num_scouts, total_service, total_camping, zip, num_leaders) VALUES ('$number','$name','$council','$num_scouts','$total_service','$total_camping','$zip','$num_leaders')";

if ($conn->query($sql) === true) {
    echo "Troop Information Saved!";
    echo "<a href=\"index.html\" onclick=\"location.reload()\">Return to home page</a>";
} else {
    echo 'Error: ' . $sql . '<br>' . $conn->error;
}

$conn->close();

?>