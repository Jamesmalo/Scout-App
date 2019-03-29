<?php 

//form info
$firstname = $_POST['first'];
$lastname = $_POST['last'];
$rank = $_POST['rank'];
$rank_date = $_POST['rank_date'];
$badges = $_POST['badges'];
$service_hours = $_POST['service_hours'];
$troop = $_POST['troop'];
$council_name = $_POST['troop_name'];
$conn;

//loginInfo
$usr = "mrflemin_james";
$pwd = "B#kyYHn@jz)L"; 
$db = "mrflemin_jamesDB";

// Create connection
if (strlen($firstname) > 0 and strlen($lastname) > 0 and strlen($rank) > 0 and strlen($rank_date) > 0 and strlen($badges) > 0 and strlen($service_hours) > 0 and strlen($troop) > 0 and strlen($council_name) > 0) {
    $conn = new mysqli("localhost", $usr, $pwd, $db);
}

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

$sql = "INSERT INTO scouts (first, last, rank, rank_date, badges, service_hours, troop, troop_name) VALUES ('$firstname','$lastname','$rank','$rank_date','$badges','$service_hours','$troop','$council_name')";

if ($conn->query($sql) === true) {
    echo "User Information Saved!";
    echo "<a href=\"index.html\" onclick=\"location.reload()\">Return to home page</a>";
} else {
    echo 'Error: ' . $sql . '<br>' . $conn->error;
}

$conn->close();

?>