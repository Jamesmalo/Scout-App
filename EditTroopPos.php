<?php

//form info
$oldpos = $_POST['oldpos'];
$newpos = $_POST['newpos'];

//loginInfo
$usr = mrflemin_james;
$pwd = ;
$db = mrflemin_jamesDB;

//create connection
if (strlen($firstname) > 0 and strlen($lastname) > 0) {
    $conn = new mysqli('localhost', $usr, $pw, $db);
}

//check connection
if ($conn->connect_error){
    die('Connection failed: ' . $conn->connect_error);
}

$sql = "INSERT INTO scouts (oldpos, newpos) VALUES ('" . $oldpos . "', '" . $newpos . "')";

if($conn->query($sql) === true){
    echo "User info saved!";
    echo "<a href=\"index.html\" onclick=\"location.reload()\">Go Back to Home Page</a>";
} else {
    echo 'Error: ' . $sql . '<br>' . $conn->error;
}

$conn->close();

?>