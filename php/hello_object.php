<?php

//Greets the user wiyth the current time and date

$date = new datetime();

$formattedDate = $date->format('Y-m-d H:i:s');

echo "Shall We Play a Game? You have until {$formattedDate} to live.";