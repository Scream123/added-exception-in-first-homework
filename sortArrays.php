<?php

function sortIncrease($array)
{
    for ($j = 0; $j < count($array) - 1; $j++) {
        for ($i = 0; $i < count($array) - $j - 1; $i++) {
            if ($array[$i] < $array[$i + 1]) {
                $result= $array[$i + 1];
                $array[$i + 1] = $array[$i];
                $array[$i] = $result;
            }
        }
    }
    foreach ($array as $number) {
        echo $number;
    }
}

function sortDecrease($array)
{
    for ($j = 0; $j < count($array) - 1; $j++) {
        for ($i = 0; $i < count($array) - $j - 1; $i++) {
            if ($array[$i] > $array[$i + 1]) {
                $result = $array[$i + 1];
                $array[$i + 1] = $array[$i];
                $array[$i] = $result;
            }
        }
    }
    foreach ($array as $number) {
        echo $number;
    }
}

echo 'Sort Ascending: ';
$array = [8, 0, 2, 9, 4, 7, 6, 3, 1, 5];
sortIncrease($array);
echo '<hr/>';
echo 'Sort descending: ';
sortDecrease($array);

