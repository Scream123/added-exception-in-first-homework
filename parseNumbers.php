<?php

/**
 * Процентное соотношение положительных/отрицательных/нулевых/простых чисел
 */
function parseNumbers($array)
{
    $zeroCount = 0;
    $posCount = 0;
    $negativeCount = 0;
    $negativeCount = 0;
    $simple = 0;
    foreach ($array as $item) {
        if ($item === 0) {
            $zeroCount++;
        } elseif ($item < 0) {
            $negativeCount++;
        } elseif ($item > 0) {
            $posCount++;
        }
        if (isPrime($item)) {
            $simple++;
        }
    }
    echo "Нулевое  число: " . $zeroCount;
    echo "Положительное число: " . $posCount;
    echo "Отрицательное число: " . $negativeCount;
    echo "Простое  число: " . $simple;
    echo "Поцентное соотношение  из массива:";
    echo "Нулевое  число: " . $zeroCount = $zeroCount / count($array);
    echo "Положительное число: " . $posCount = $posCount / count($array);
    echo "Отрицательное число: " . $negativeCount = $negativeCount / count($array);
    echo "Простое  число: " . $simple = $simple / count($array);
}

function isPrime($num)
{

    if ($num == 1) return false;
    if ($num == 2) return true;
    if ($num % 2 == 0) {
        return false;
    }
    $ceil = ceil(sqrt($num));
    for ($i = 3; $i <= $ceil; $i = $i + 2) {
        if ($num % $i == 0) return false;
    }
    return true;
}

$array = [-1, -2, -3, 0, 0, 5, 12, 0, -10, 2, 5];
parseNumbers($array);
