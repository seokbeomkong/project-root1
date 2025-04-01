<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = intval($_POST['id']);
    $name = $conn->real_escape_string($_POST['name']);
    $diagnosis = $conn->real_escape_string($_POST['diagnosis']);

    $sql = "UPDATE diagnosis SET name='$name', diagnosis='$diagnosis' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "업데이트 오류: " . $conn->error;
    }
} else {
    header("Location: index.php");
    exit();
}
?>
