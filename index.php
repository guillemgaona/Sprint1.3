<?php

// Lvl 1 Ex 1 (dues opcions diferents)

$numbers = array(1, 2, 3, 4, 5);
print_r($numbers);
echo "<br>";
var_dump($numbers);
echo "<br>";

// Lvl 1 Ex 2

$X = array(10, 20, 30, 40, 50, 60);
echo "El tamaño del array es de: " . count($X) . "<br>";
unset ($X[3]);
$X = array_values($X); // reorganitzar els elements de l'array perquè no quedi "buit"
echo "El nou tamany de l'array es: " . count($X). "<br>";
echo "El nou array: ";
print_r($X);


// Lvl 1 Ex 3

/* function containsLetter($words, $letter) {
    $timesfind = 0;

    for($i=0; $i < count($words); $i++) {
        $j=0;
        $contains = false;
        while ($j < strlen($words[$i])) {         
            if (strtolower($words[$i][$j]) == strtolower($letter) && !$contains) {
                $timesfind++;
                $contains = true;
            }
            $j++;
        }
    }
    return $timesfind == count($words) ? "true" : "false"; 
} */
function containsLetter($words, $letter) {
    $letter=strtolower($letter);
    $isContaining = "true";
    for($i=0; $i < count($words); $i++) {
        if (!str_contains(strtolower($words[$i]),$letter)) {
            $isContaining = "false";
        } 
    }
    return $isContaining;
}

echo "<br>";
$arrayExemple = array("hola", "Php", "Html");
echo containsLetter($arrayExemple, "h") . "<br>";
echo containsLetter($arrayExemple, "l") . "<br>";

// Ex 4

$myself = ["nom"=> "Guillem", "edat" => 29, "email" =>"guillemgaona@hotmail.com", "menjar preferit" => "socarrat"];
print_r($myself);
?>