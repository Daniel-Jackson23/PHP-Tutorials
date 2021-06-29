<?php

session_start();

$errors = [];

if ($_POST){

    if ($_POST['username'] == 'Fred' && $_POST['password'] == 'Bloggs'){
        $_SESSION['username'] = 'Fred';
    } else{
        $errors[] = 'Incorrect credentials.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
</head>
<body>
<form method="post">
    <fieldset>
        <legend>Log In</legend>
        <div>
        <label for="username">Username: </label>
        <input type="text" id="username" name="username" placeholder="username">
        </div>
        <br>
        <div>
            <label for="password">Password: </label>
            <input type="password" id="password" name="password">
        </div>
        <div>
            <input type="submit" value="Log In">
        </div>
    </fieldset>
    <ul>
        <li><a href="TasK1P.php">Page 2</a> </li>
        <li><a href="Task1P3.php">Page 3</a> </li>
    </ul>


</form>
</body>
</html>
