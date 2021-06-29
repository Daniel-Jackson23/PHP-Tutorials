<?php
$item_cost = 3.3;
$item_price = 5;
$overheads = 20;

$profit_per_item = number_format(round($item_price - $item_cost, 2),2);
$breakeven = ceil($overheads / $profit_per_item);

echo "Profit: {$profit_per_item}\n";
echo "Items sold to break even: {$breakeven}\n";
