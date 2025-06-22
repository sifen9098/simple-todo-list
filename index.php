<?php include 'includes/db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>To-Do List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>To-Do List</h2>

    <form action="add.php" method="POST">
        <input type="text" name="title" placeholder="Enter new task" required>
        <button type="submit">Add Task</button>
    </form>

    <ul>
        <?php
        $result = mysqli_query($conn, "SELECT * FROM tasks ORDER BY created_at DESC");
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<li>";
            echo $row['is_done'] ? "<s>{$row['title']}</s>" : $row['title'];
            echo " 
                <a href='complete.php?id={$row['id']}'>✔️</a>
                <a href='edit.php?id={$row['id']}'>✏️</a>
                <a href='delete.php?id={$row['id']}'>❌</a>
            </li>";
        }
        ?>
    </ul>
</body>
</html>