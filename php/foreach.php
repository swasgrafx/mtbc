<?php

$items = [
  'for',
  'foreach',
  'while',
  'do-while'
];

$count = count($items);

echo "PHP Supports ($count) types of loop.";
$i=0;
$li = '';
foreach($items as $item){
  $li .= "<li>{$item}</li>";
  $li++;
}

echo "<ul>{$li}</ul>";