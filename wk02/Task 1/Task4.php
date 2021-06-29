<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Form Input as an array</title>
</head>

<body>
    <form method="post">
        <fieldset>
            <legand>My modules this Semester</legand>
            <input type="text" name="module[]">
            <input type="text" name="module[]">
            <input type="text" name="module[]">
            <input type="text" name="module[]">
            <input type="submit" value="submit">
        </fieldset>
    </form>

    <?php if ($_POST) :
        sort($_POST['module']);
        ?>

    <h2>My Modules</h2>
        <ul>
            <?php foreach ($_POST['module'] as $module) : ?>

                <li><?= $module; ?></li>

            <?php endforeach;?>
        </ul>
    <?php endif;?>
</body>
</html>