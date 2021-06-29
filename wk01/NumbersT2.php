<?php

$Sweets = 40;
$Students = 14;
$teacher_share = $Sweets % $Students;
$Student_share = floor($Sweets / $Students);

echo "Each students gets {$Student_share} sweets\n ";
echo "The teacher gets {$teacher_share} sweets";