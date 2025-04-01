<?php
include 'db.php';

if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit();
}

$id = intval($_GET['id']);

$sql = "SELECT * FROM diagnosis WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows <= 0) {
    echo "해당 진단 결과를 찾을 수 없습니다.";
    exit();
}

$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>진단 결과 수정</title>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">진단 결과 수정</h2>
    <form method="post" action="update.php">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <div class="form-group">
            <label>이름</label>
            <input type="text" name="name" class="form-control" value="<?php echo htmlspecialchars($row['name']); ?>" required>
        </div>
        <div class="form-group">
            <label>진단 내용</label>
            <textarea name="diagnosis" class="form-control" required><?php echo htmlspecialchars($row['diagnosis']); ?></textarea>
        </div>
        <button type="submit" class="btn btn-success">수정</button>
        <a href="index.php" class="btn btn-secondary">취소</a>
    </form>
</div>
</body>
</html>
