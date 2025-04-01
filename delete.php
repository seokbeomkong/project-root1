<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "DELETE FROM diagnosis WHERE id = $id";
    $conn->query($sql);
}

header("Location: index.php");
exit();
?>
