<?php
include 'includes/db.php';

$id = $_POST['id'];
$title = mysqli_real_escape_string($conn, $_POST['title']);

$sql = "UPDATE tasks SET title='$title' WHERE id=$id";
mysqli_query($conn, $sql);

header("Location: index.php");
?>