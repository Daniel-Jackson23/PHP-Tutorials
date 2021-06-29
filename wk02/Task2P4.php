<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Wizard - Step 4</title>
</head>
<body>
    <h1>Registration Form</h1>

<?php if ($_POST) : ?>
<ul>
    <li><?= $_POST['name'] ?? ''; ?></li>
    <li><?= $_POST['address'] ?? ''; ?></li>
    <li><?= $_POST['dob'] ?? ''; ?></li>
    <li><?= $_POST['username'] ??''; ?></li>
    <li><?= $_POST['password'] ?? ''; ?></li>
    <li><?= $_POST['maiden_name'] ??  ''; ?></li>
    <li><?= $_POST['t_c'] ?? ''; ?></li>
</ul>
<?php endif; ?>
</body>
</html>