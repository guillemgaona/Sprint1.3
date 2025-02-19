<?php
//Ex 1
$array1 = [1, 2.5, 3, 4.7, 5, 6];
$array2 = [2.5, 4.7, 6, 7, 8, 9];

$intersection = array_intersect($array1, $array2);
$merge = array_merge($array1, $array2);

echo "Array 1: " . implode(", ", $array1) . "<br>";
echo "Array 2: " . implode(", ", $array2) . "<br>";

echo "Intersecció: " . implode(", ", $intersection) . "<br>";
echo "Merge: " . implode(", ", $merge) . "<br>";

//Ex 2
$studentsGrades = [
    "Anna" => [8, 7.5, 9, 6, 7],
    "Jordi" => [5, 6, 7, 8, 7],
    "Marta" => [10, 9.5, 9, 8, 10],
    "Pere" => [6, 5.5, 7, 7.5, 8],
    "Laura" => [9, 8, 7.5, 8.5, 9]
];

function calcAverage(array $studentsGrades): int|float {
$sumClassGrades = 0;
$totalStudents = count($studentsGrades);

foreach ($studentsGrades as $studentName => $grades) {
$sumStudentGrades = array_sum($grades);
$averageStudent = $sumStudentGrades /count($grades);
echo "Mitja de l'alumne $studentName: " . $averageStudent . "<br>"; 
$sumClassGrades += $sumStudentGrades;
}

$averageClass = $sumClassGrades / ($totalStudents * count($grades));
echo "La mitja de la classe és de: " . $averageClass;
}

calcAverage($studentsGrades);

?>