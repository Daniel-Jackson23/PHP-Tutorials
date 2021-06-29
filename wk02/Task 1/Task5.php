<?php

$answer = '';

if ($_GET){

    switch ($_GET['submit']) {
        case 'Add':
            $answer = (int)$_GET['number1'] + (int)$_GET['number2'];
            break;

        case 'Subtract':
            $answer = $_GET['number1'] - $_GET['number2'];
             break;

        case 'Multiply':
            $answer = $_GET['number1'] * $_GET['number2'];
            break;

        case 'Divide':
            $answer = $_GET['number1'] / $_GET['number2'];
            break;

        default:
            $answer = $_GET['number1'] % ['number2'];

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
</head>
<body>
    <form>
        <p>
            <label for="number1">Number 1: </label>
            <input type="number" id="number1" name="number1">
        </p>
        <P>
            <label for="number2">Number 2: </label>
            <input type="number" id="number2" name="number2">
        </P>
        <P>
            <input type="submit" name="submit" value="Add">
            <input type="submit" name="submit" value="Subtract">
            <input type="submit" name="submit" value="Multiply">
            <input type="submit" name="submit" value="Divide">
            <input type="submit" name="submit" value="Remainder">
        </P>
    </form>
<?php if ($_GET) : ?>
<p><?= "The answer is {$answer}"; ?></p>
<?php endif;?>
</body>
</html>

