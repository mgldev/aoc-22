<?php

use AOC\D2\P1\RoundProvider\PartOneRoundProvider;
use AOC\D2\P1\StrategyGuide;

require_once __DIR__ . '/../../../../vendor/autoload.php';

$roundProvider = new PartOneRoundProvider(__DIR__ . '/../input.txt');
$answer = (new StrategyGuide($roundProvider->provide()))->getTotalScore();

echo 'Part 1: ' . $answer . "\n";