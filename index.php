<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "air-quality-analyzer";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed:" . $conn->connect_error);
}
$sql = "SELECT sch_id, sch_name, sch_long, sch_lat FROM schools";
?>