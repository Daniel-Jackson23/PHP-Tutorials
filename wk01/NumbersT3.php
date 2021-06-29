<?php

$wall_per_can = 5.1;

$can_diameter = 0.15;
$can_height = 0.30;

$box_length = 0.6;
$box_width = 0.3;
$box_height = 0.35;
$can_per_box = floor($box_length / $can_diameter) *
    floor($box_width / $can_diameter) *
    floor($box_height / $can_height);
$hall_area = 2 * (40 * 3.4 + 30 * 3.4);

$minimum_cans = ceil($hall_area / $wall_per_can);
$full_boxes = floor($minimum_cans / $can_per_box);
$loose_cans = $minimum_cans % $can_per_box;
var_dump($can_per_box);

echo "{$minimum_cans} cans are required. You will have {$full_boxes} full boxes with {$loose_cans} can loose";