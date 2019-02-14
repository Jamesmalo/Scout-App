<?php

$mysqli = new mysqli("localhost", $usr, $pw, $db);

if ($mysqli->connect_errno){
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

echo "Connected to database with php" . $mysqli->host_info . "<br>";

$result = $mysqli->query("SELECT * FROM scouts");

echo "<br>"





?>