<?php
$comp = $user = 0;
$game = ["rock", "paper", "scissors"];

do {
    $user_choice = strtolower(readline("Rock, paper or scissors? "));
    $comp_choice = $game[rand(0, 2)];

    if ($user_choice == "rock") {
        if ($comp_choice == "rock") {
            echo "It was a draw!\n";
        } elseif($comp_choice == "paper") {
            echo "The computer won - paper beats rock!\n";
            $comp++;
        } else {
            echo "You won - rock beats scissors!\n";
            $user++;
        }
    } elseif ($user_choice == "paper") {
        if ($comp_choice == "rock") {
            echo "You won - paper beats rock!\n";
            $user++;
        } elseif($comp_choice == "paper") {
            echo "It was a draw!\n";
        } else {
            echo "The computer won - scissors beats paper!\n";
            $comp++;
        }
    } else {
        if ($comp_choice == "rock") {
            echo "The computer won - rock beats scissors!\n";
            $comp++;
        } elseif($comp_choice == "paper") {
            echo "You won - scissors beats paper!\n";
            $user++;
        } else {
            echo "It was a draw!\n";
        }
    }
} while ($comp < 3 && $user < 3);

if ($comp > $user) {
    echo "The computer has won the game {$comp}-{$user}!\n";
} else {
    echo "You have won the game {$user}-{$comp}!\n";
}