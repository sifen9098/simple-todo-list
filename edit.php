<?php
include 'includes/db.php';

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM tasks WHERE id = $id");
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
</head>
<body>
    <h2>Edit Task</h2>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        <input type="text" name="title" value="<?= $row['title'] ?>" required>
        <button type="submit">Update</button>
    </form>
</body>
</html>