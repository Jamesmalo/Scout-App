<?php

//form info
$id = $_POST['id'];
$newpos = $_POST['newpos'];

//loginInfo
$usr = "mrflemin_james";
$pwd = "B#kyYHn@jz)L";
$db = "mrflemin_jamesDB";

//create connection
if (strlen($id) > 0 and strlen($newpos) > 0) {
    $conn = new mysqli('localhost', $usr, $pw, $db);
}

//check connection
if ($conn->connect_error){
    die('Connection failed: ' . $conn->connect_error);
}

$sql = "UPDATE scouts SET troop = '$newpos' WHERE id = '$id';

if($conn->query($sql) === true){
    echo "User info saved!";
    echo "<a href=\"index.html\" onclick=\"location.reload()\">Go Back to Home Page</a>";
} else {
    echo 'Error: ' . $sql . '<br>' . $conn->error;
}

$conn->close();

?>