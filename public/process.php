<?php

session_start();

require __DIR__ . '/../App/FizzBuzz.php';

$integer = isset($_POST['integer']) ? $_POST['integer'] : null;
$fizzbuzz = new App\FizzBuzz;

try {
    $_SESSION['integer'] = $fizzbuzz->parse($integer);
}
catch (Exception $e) {
    $_SESSION['integer'] = $e->getMessage();
}

header('location: ./');


