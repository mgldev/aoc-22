<?php

use AOC\D9\P1\RopeSimulator;

require_once __DIR__ . '/../../../../vendor/autoload.php';

$answer = RopeSimulator::fromFile(__DIR__ . '/../input.txt')->simulate();

echo "Part 1: $answer\n";
