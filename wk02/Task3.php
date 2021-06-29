<?php
 session_start();

 function initialise()
 {
     $_SESSION['target_number'] = rand(1,100);
 }

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hi-low Game</title>
</head>
<body>
<h1> Guessing Game</h1>
<p>Guess a random number between 1 and 100</p>
<form>


        <div>
            <label for="guess">Guess</label>
            <input type="number" id="guess" name="guess" autofocus>
            <input type="submit" value="Submit Guess">
        </div>
    <?php if ($_GET) : ?>

        <?php

        if ($_GET['guess'] > 0 && $_GET['guess'] <= 100) :

            switch ($_GET['guess'] <=> $_SESSION['target_number']) :
                case -1:
                    ?>
                    <p><?= "{$_GET['guess']} was too low."; ?></p>
                    <?php
                    break;

                case 1:
                    ?>
                    <p><?= "{$_GET['guess']} was too high."; ?></p>
                    <?php
                    break;

                default:
                    initialise();
                    ?>
                    <p><?= "{$_GET['guess']} was correct. Game restarted."; ?></p>

                <?php
            endswitch;

        else :
            ?>
            <p>You must enter a number between 1 and 100 inclusive.</p>
        <?php
        endif;

    else :
        initialise();
    endif;
    ?>

</form>
</body>
</html>
