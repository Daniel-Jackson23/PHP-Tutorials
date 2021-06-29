<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Wizard - Step 2</title>
</head>
<body>
<form method="post" action="Task3P3">
    <fieldset>
        <legend>Registration - Step 2</legend>
        <div>
            <label for="dob">Date of birth: </label>
            <input type="date" id="dob" name="dob" placeholder="date of birth">
        </div>
        <br>
        <div>
            <label for="username">Username: </label>
            <input type="text" id="username" name="username" placeholder="username">
        </div>
        <br>
        <div>
            <label for="password">Password: </label>
            <input type="password" id="password" name="password" placeholder="password">
        </div>
        <br>
        <div>
            <label for="maiden_name">Mother's maiden name: </label>
            <input type="text" id="maiden_name" name="maiden_name" placeholder="mother's maiden name">
        </div>
        <br>
        <div>
            <input type="submit" value="Step 3">
        </div>

        <div>
            <input type="hidden" name="name" value="<?= $_POST['name']; ?>">
            <input type="hidden" name="address" value="<?=$_POST['address']; ?>">
        </div>
    </fieldset>
</form>
</body>
</html>
