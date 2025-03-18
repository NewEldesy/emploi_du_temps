<?php
include 'config.php';

$title = $_POST['title'];
$start = $_POST['start'];
$end = $_POST['end'];

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $sql = "UPDATE events SET title='$title', start='$start', end='$end' WHERE id=$id";
} else {
    $sql = "INSERT INTO events (title, start, end) VALUES ('$title', '$start', '$end')";
}

if ($conn->query($sql) {
    echo "Event saved";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
