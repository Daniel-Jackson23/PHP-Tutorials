<?php
$username = $_POST['username'] ?? '' ;

if ($_POST) {
    $errors = [];
    if(empty($_POST['username'])){
        $errors[] = 'Username is required.';

    }else{
        if (strlen($_POST['username']) < 4 || strlen($_POST['username'] > 15)){
            $errors[] = 'Username must have a minimum of 4 characters and a maximum of 15. ';
        }
    }

    if (empty($_POST['password1']) || empty($_POST['password2'])) {
        $errors[] = 'Both password boxes are required.';
    } else{
        if ($_POST['password1'] !== $_POST['password2']) {
            $errors[] = 'Both passwords must match.';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Display Form Data</title>
</head>

<body>

<form method="post">
    <fieldset>
        <legend>Personal Details</legend>
        <p>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="<?= $username; ?>">
        </p>
        <p>
            <label for="password1">Password:</label>
            <input type="password" id="password1" name="password1">
        </p>
        <p>
            <label for="password2">Re-enter password:</label>
            <input type="password" id="password2" name="password2">
        </p>
        <p>
            <input type="submit" value="Submit">
        </p>
    </fieldset>
</form>

<?php if ($_POST) : ?>

    <?php if ($errors) : ?>

        <ul>
            <?php foreach ($errors as $error) : ?>

                <li><?= $error; ?></li>

            <?php endforeach; ?>
        </ul>

    <?php else: ?>

        <p>Congratulations, you have filled the form correctly.</p>

    <?php endif; ?>

<?php endif; ?>

</body>
</html>
