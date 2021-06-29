
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Registration Wizard - Step 3 </title>

</head>
<body>
<form method="post" action="Task2P4.php">
    <fieldset>
        <legend>Registration - Step 3</legend>
        <div>
            <label for="t_c">Terms and conditions</label>
            <input type="radio" id="t_c" name="t_c" value="accept">Accept
            <input type="radio" id="t_c" name="t_c" value="reject">Reject
        </div>
        <div>
            <label for="email">Email Address for promotional material: </label>
            <input type="email" id="email" name="email" placeholder="email">
        </div>
        <div>
            <input type="submit" value="Step 4">
        </div>
        <input type="hidden" name="name" value="<?= $_POST['name']; ?>">
        <input type="hidden" name="address" value="<?= $_POST['address']; ?>">
        <input type="hidden" name="dob" value="<?= $_POST['dob']; ?>">
        <input type="hidden" name="username" value="<? $_POST['username']?>">
        <input type="hidden" name="password" value="<? $_POST['password']?>">
        <input type="hidden" name="maiden_name" value="<? $_POST['maiden_name']?>">
    </fieldset>
</form>
</body>