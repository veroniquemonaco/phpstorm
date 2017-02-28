<?php

$students = [
    "Emmanuel"  => 42,
    "Thierry"   => 51,
    "Pascal"    => 45,
    "Eric"      => 48,
    "Nicolas"   => 19
];

$somme = array_sum($students);
$nbpers = count($students);
$moyenne = $somme/$nbpers;


foreach ($students as $key=>$age) {
    echo $key . " " . $age . "<br/>";
}

echo "la moyenne est"." ".$moyenne." "." ans";

echo "bravo";


