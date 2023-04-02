<?php

$first_name = "Marisa";
$last_name = "Naofa";

$sayHi = function () use ($first_name, $last_name) {
    echo "Hi $first_name $last_name" . PHP_EOL;
};

$sayHi();
