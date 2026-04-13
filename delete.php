<?php
require_once 'database.php';

$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM donasi WHERE id = $id");

header("Location: index.php");
exit();
?>