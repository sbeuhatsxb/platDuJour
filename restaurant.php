<?php

include "class_restaurant.php";

$dw = menuDuJour::getDay();
echo "Les plats autour de Netapsys ce " . $dw . " sont : " . PHP_EOL;

echo "Marché Biot : ". menuDuJour::marcheBiot() . PHP_EOL;
echo "Au K : ". menuDuJour::leK() . PHP_EOL;
echo "La petite pause : ". menuDuJour::laPetitePause() . PHP_EOL;
