<?php
//Ex 1
$enters = [2,5,8,11,245];
function cube(int $n) {
    return $n ** 3; // o pow($n, 3);
}

$result = array_map('cube', $enters);

echo implode(", ", $result). "<br>";
print_r($result). PHP_EOL;

//Ex 2
$strings = ["Maria", "Josep", "Laura", "Albert", "Guillem", "Andrea", "Anna", "Alba"];

function stringEven(string $name) {
    return strlen($name) % 2 === 0;
}
$result = array_filter($strings, 'stringEven');
print_r($result) . "<br>";

// Ex 3

$enters = [2,5,8,11,245];

function isPrime(int $n): bool {
    if ($n < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    /*or
    for ($i = 2; $i * $i <= $n; $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }*/
    return true;
}

function addPrime(int $aggregate, int $number): int {
    if(isPrime($number)) {
        $aggregate += $number;
    }
    return $aggregate;
}

$additionPrime = array_reduce($enters, 'addPrime', 0);

echo "La suma dels nombres primers és: " . $additionPrime;
?>