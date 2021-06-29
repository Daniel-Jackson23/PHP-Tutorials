<?php
$turns = 0;

do {
    $dice1 = rand(1,6);
    $dice2 = rand(1,6);
echo "Dice 1: {$dice1} | Dice 2: {$dice2}\n";
$turns++;
} while ($dice1 !== $dice2);
echo "Matching pair in {$turns} turns!\n";