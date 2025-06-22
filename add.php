<?php
include 'includes/db.php';

if (isset($_POST['title'])) {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $sql = "INSERT INTO tasks (title) VALUES ('$title')";
    mysqli_query($conn, $sql);
}

header("Location: index.php");
?>