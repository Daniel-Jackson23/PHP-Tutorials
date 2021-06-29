<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <tile>Personalised message if logged in</tile>
</head>
<body>
<?php if (isset($_SESSION['username'])) : ?>

    <p>Welcome <?= $_SESSION['username']; ?></p>
<?php endif;?>

    <ul>
        <li><a href="Task1P1.php">Page 1</a> </li>
        <li><a href="Task1P3.php">Page 3</a> </li>
    </ul>


</body>
</html>
