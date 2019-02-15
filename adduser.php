<?php 

//form info
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$currentRank = $_POST['currentRank'];
$dateOfLastRankup = $_POST['dateOfLastRankup'];
$numOfBadges = $_POST['numOfBadges'];
$numOfServiceHours = $_POST['numOfServiceHours'];
$troopNumber = $_POST['troopNumber'];
$councilName = $_POST['councilName'];
$conn;

//loginInfo
$usr = "mrflemin_james";
$pwd = ""; 
$db = "mrflemin_jamesDB";

// Create connection
if (strlen($firstname) > 0 and strlen($lastname) > 0) {
    $conn = new mysqli("localhost", $usr, $pw, $db);
}

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

$sql = "INSERT INTO scouts (firstname, lastname, currentRank, dateOfLastRankup, numOfBadges, numOfServiceHours, troopNumber, councilName) VALUES ('" . $firstname . "', '" . $lastname . "', '" . $currentRank . "', '" . $dateOfLastRankup . "', '" . $numOfBadges . "', '" . $numOfServiceHours . "', '" . $troopNumber . "', '" . $councilName . "')";

if ($conn->query($sql) === true) {
    echo "User Information Saved!";
    echo "<a href=\"index.html\" onclick=\"location.reload()\">Return to home page</a>";
} else {
    echo 'Error: ' . $sql . '<br>' . $conn->error;
}
$conn->close();

?>