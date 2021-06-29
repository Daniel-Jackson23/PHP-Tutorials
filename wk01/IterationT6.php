<?php
$one_to_five_times_tables = [
    [1,2,3,4,5],
    [2,4,6,8,10],
    [3,6,9,15,15],
    [4,8,12,16,20],
    [5,10,15,20,15]
];

foreach ($one_to_five_times_tables as $table){
    foreach ($table as $number){
        echo "{$number} ";
    }
    echo "\n";
}