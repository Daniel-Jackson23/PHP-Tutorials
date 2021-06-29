<?php
session_start();

$name = $_SESSION['username'] ?? '';

if ($name != 'Fred') {
    header("location:./Task1P1");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Secure Page</title>
</head>
<body>
<h1>Fred's Page</h1>
<ul>
    <li><a href="Task1P1.php">Page 1</a> </li>
    <li><a href="Task1P3.php">page 2</a> </li>
</ul>
</body>
</html>