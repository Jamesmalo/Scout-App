<?php

//form info
$scout_id = $_POST['id'];
$date = $_POST['date'];
$hours = $_POST['hours'];
$description = $_POST['description'];

//loginInfo
$usr = "mrflemin_james";
$pwd = "";
$db = "mrflemin_jamesDB";

//create connection
if (strlen($firstname) > 0 and strlen($lastname) > 0) {
    $conn = new mysqli('localhost', $usr, $pw, $db);
}

//check connection
if ($conn->connect_error){
    die('Connection failed: ' . $conn->connect_error);
}

$sql = "INSERT INTO service (scout_id, date, hours, description) VALUES ('" . $scout_id . "', '" . $date . "', '" . $hours . "', '" . $description . "')";

if($conn->query($sql) === true){
    echo "User info saved!";
    echo "<a href=\"index.html\" onclick=\"location.reload()\">Go Back to Home Page</a>";
} else {
    echo 'Error: ' . $sql . '<br>' . $conn->error;
}

$conn->close();





?>