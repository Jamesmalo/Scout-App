<?php 

//form info
$badge_id = $_POST['id'];
$scout_id = $_POST['scout_id'];
$name = $_POST['name'];
$date = $_POST['date'];//yyyymmdd

if(){

}
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

$sql = "INSERT INTO badges (id, scout_id, name, date) VALUES ('$badge_id','$scout_id','$name','$date')";

if ($conn->query($sql) === true) {
    echo "New Badge Added!";
    echo "<a href=\"index.html\" onclick=\"location.reload()\">Return to home page</a>";
} else {
    echo 'Error: ' . $sql . '<br>' . $conn->error;
}

$conn->close();

?>