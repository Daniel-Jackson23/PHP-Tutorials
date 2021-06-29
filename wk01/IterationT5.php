<?php
$films = array('The Matrix', 'Man of Steel', 'Iron Man ', 'Avatar', 'Tweleve Monkeys');

sort($films);

foreach($films as $film){
    echo "{$film}\n";
}