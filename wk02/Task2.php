<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Display from Data</title>
</head>

<body>
<form method="post">
    <fieldset>
        <legend>Personal Details</legend>
        <p>
            <label for="first_name">First Name: </label>
            <input type="text" id="first_name" name="first_name">
        </p>
        <p>
            <label for="surname">Suranme: </label>
            <input type="text" id="surname" name="surname">
        </p>
        <p>
            <label for="age">First Name: </label>
            <input type="number" id="age" name="age">
        </p>
        <p>
            <input type="submit" value="Submit">
        </p>
    </fieldset>

</form>

<?php if ($_POST) : ?>
<p>
    <?= "{$_POST['first_name']} {$_POST['surname']}, {$_POST['age']}";?>
</p>

<?php endif?>
</body>
</html>