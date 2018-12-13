<?php

//Initialize your variables
$label = null;
$color = null;

//Check for get parameters
if(!empty($_GET)){
    $color = "#{$_GET['color']}";
}

switch($color){
    case "#ff0000";
    $label = "red";
    break;
    case "#00ff00";
    $label = "green";
    break;
    case "#0000ff";
    $label = "blue";
    break;
    default;
    $label = "unknown";
    break;
}
/*
//Can we name the color by it's hex value
if($color == "#ff0000"){
  $label = "red";
}elseif($color == "#00ff00"){
  $label = "green";
}elseif($color == "#0000ff"){
  $label = "blue";
}else{
  $label = "unknown";
}
*/
//Output the data
echo "<div style=\"color:{$color}\">The color is {$label}</div>";