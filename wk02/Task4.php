<?php
session_start();

function initialise_game()
{
    $_SESSION['letters_available'] = [
        'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm',
        'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'
    ];

    $_SESSION['word_to_guess'] = [
        'aberration', 'amphibious', 'basketry', 'casserole',
        'enameler', 'encapsulate', 'gastronomy', 'hesitant',
        'issue', 'kudos', 'legitimacy', 'misrepresentative',
        'offish', 'toxicology', 'visionary', 'zucchini'][rand(0, 15)];

    $_SESSION['guessed_so_far'] = '';
    for ($i = 0; $i < strlen($_SESSION['word_to_guess']); $i++) {
        $_SESSION['guessed_so_far'] .= '_';
    }

    $_SESSION['chances'] = 6;
    $_SESSION['letters_guessed'] = 0;
}

function all_occurences_of_user_guess()
{
    $found_at = [];
    for ($i = 0; $i < strlen($_SESSION['word_to_guess']); $i++) {
        if ($_GET['guess'] === $_SESSION['word_to_guess'][$i]) {
            $found_at[] = $i;
        }
    }
    return $found_at;
}

function display_guessed_so_far()
{
    $guessed_so_far = '';
    for ($i = 0; $i < strlen($_SESSION['guessed_so_far']); $i++) {
        $guessed_so_far .= $_SESSION['guessed_so_far'][$i] . ' ';
    }
    echo $guessed_so_far;
}


if ($_GET) {

    $found_at_indexes = all_occurences_of_user_guess();

    foreach ($found_at_indexes as $guess_index) {
        $_SESSION['guessed_so_far'][$guess_index] = $_GET['guess'];
    }

    if (! $found_at_indexes) {
        $_SESSION['chances']--;
    } else {
        $_SESSION['letters_guessed'] += count($found_at_indexes);
    }

    unset($_SESSION['letters_available'][array_search($_GET['guess'], $_SESSION['letters_available'])]);

} else {

    initialise_game();

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hangman</title>
</head>
<body>

<h1>Hangman</h1>

<form>
    <fieldset>
        <legend>Select letter</legend>
        <p>
            <?php if ($_SESSION['letters_guessed'] === strlen($_SESSION['word_to_guess'])) :
                initialise_game();
                ?>
                You have guessed the word correctly! The game has been re-initialised.

            <?php else: ?>
                <?php if ($_SESSION['chances'] > 0) : ?>
                    Enter letters one at a time to guess the word. You can only be wrong <?= "{$_SESSION['chances']}"; ?> times!

                <?php else : ?>
                    The word was &quot;<?= "{$_SESSION['word_to_guess']}"; ?>&quot; but you have run out of guesses and the game has re-initialised!
                    You can only be wrong 6 times!
                    <?php initialise_game();

                endif; ?>
            <?php endif; ?>
        </p>

        <div>
            <?php foreach ($_SESSION['letters_available'] as $letter) : ?>
                <input type="submit" name="guess" value="<?= $letter; ?>">
            <?php endforeach; ?>
        </div>
    </fieldset>

</form>

<p><?php display_guessed_so_far(); ?></p>
</body>
</html>

