<?php

use AOC\D6\P1\MarkerFinder;

require_once __DIR__ . '/../../../../vendor/autoload.php';

echo 'Part 1: ' . MarkerFinder::fromInput(__DIR__ . '/../input.txt')->find(4) . "\n";
