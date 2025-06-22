<?php
include 'includes/db.php';

$id = $_GET['id'];
$sql = "UPDATE tasks SET is_done=1 WHERE id=$id";
mysqli_query($conn, $sql);

header("Location: index.php");
?>