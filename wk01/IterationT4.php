<?php
$rainbow = ['red', 'orange', 'yellow', 'blue', 'black', 'violet'];

$choice = readline("Enter an number between 1 and 7 (-1 to end): ");

while ( $choice <> -1 ){
    echo "{$rainbow[$choice - 1]}\n";
    $choice = readline("Enter an number between 1 and 7 (-1 to end):" );
}