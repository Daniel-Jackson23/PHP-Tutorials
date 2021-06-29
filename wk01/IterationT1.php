<?php

$rows = readline("please enter the of rows: ");
$columns = readline("please enter the number of columns: ");

for ($row = 0; $row < $rows; $row++){
    for ($column = 0; $column < $columns; $column++){
        echo "* ";
    }
    echo  "\n";
}