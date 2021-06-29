<?php
$first_name = $surname = $age = "";
if ($_POST) {
    $first_name = $_POST['first_name'];
    $surname = $_POST['surname'];
    $age = $_POST['age'];
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
            <legand>Personal Details</legand>
            <p>
                <label for="first_name">Fist Name: </label>
                <input type="text" id="first_name" name="first_name" value="<?=$first_name; ?>">
            </p>
            <p>
                <label for="surname">Surname: </label>
                <input type="text" id="surname" name="surname" value="<?=$surname; ?>">
            </p>
                <label for="age">First Name: </label>
                <input type="number" id="age" name="age" value="<?= $age; ?>">
            <p/>
            <p>
                <input type="submit" value="Submit">
            </p>
        </fieldset>



    </form>
    </body>

</html>

