<?php

$nama = ["Marisa", "Naoya", "Naofa"];
var_dump($nama[0]);

$nama[0] = "Ica";
var_dump($nama);

unset($nama[1]);
var_dump($nama);

$nama[] = "Naofa";
var_dump($nama);
var_dump(count($nama));
