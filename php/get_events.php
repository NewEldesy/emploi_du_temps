<?php
include 'config.php';

$query = "SELECT * FROM events";
$result = $conn->query($query);

$events = array();

while ($row = $result->fetch_assoc()) {
    $events[] = $row;
}

echo json_encode($events);
?>
