<?php
/**
 * Написать функцию, возведения числа N в степень M
 */
function exponention($number, $degree)
{
    if(!$number || !$degree) {
        throw new Exception('No entry found.');
    }
    $exponent = 1;
    for ($i = 1; $i <= $degree; $i++) {
        $exponent *= $number;
    }
    return "Число $number в {$degree}-ой степени: " . (int)$exponent;
}
echo exponention(2, 5);
echo "<br/>";
