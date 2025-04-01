<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $conn->real_escape_string($_POST['name']);
    $diagnosis = $conn->real_escape_string($_POST['diagnosis']);

    $sql = "INSERT INTO diagnosis (name, diagnosis) VALUES ('$name', '$diagnosis')";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>새 진단 결과 입력</title>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">새 진단 결과 입력</h2>
    <form method="post" action="create.php">
        <div class="form-group">
            <label>이름</label>
            <input type="text" name="name" class="form-control" placeholder="이름을 입력하세요" required>
        </div>
        <div class="form-group">
            <label>진단 내용</label>
            <textarea name="diagnosis" class="form-control" placeholder="진단 내용을 입력하세요" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">저장</button>
        <a href="index.php" class="btn btn-secondary">취소</a>
    </form>
</div>
</body>
</html>
