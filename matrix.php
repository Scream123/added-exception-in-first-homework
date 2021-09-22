<?php
//Transpose Matrix
function transponse($matrix)
{
    echo "<br/>";
    echo "Matrix: <br>";
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            echo $matrix[$i][$j] . " ";
        }
        echo "<br>";
    }

    for ($i = 0; $i < 3; $i++) {
        for ($j = $i + 1; $j < 3; $j++) {
            $n = $matrix[$i][$j];
            $matrix[$i][$j] = $matrix[$j][$i];
            $matrix[$j][$i] = $n;
        }
    }

    echo "<br>Matrix Transpose: <br>";
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++)
            echo $matrix[$i][$j] . " ";
        echo "<br>";
    }
}

$matrix = [
    [1, 1, 1],
    [2, 2, 2],
    [3, 3, 3],
];
transponse($matrix);

//Add two matrices
function additionMatrix($matrix1, $matrix2)
{
    echo "<br/>";
    echo "Matrix 1: <br>";
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            echo $matrix1[$i][$j] . " ";
        }
        echo "<br>";
    }

    echo "Matrix 2: <br>";
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            echo $matrix2[$i][$j] . " ";
        }
        echo "<br>";
    }
    echo "<br>matrix summation: <br>";
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {

            $result[$i][$j] = $matrix1[$i][$j] + $matrix2[$i][$j];
            echo $result[$i][$j] . " ";
        }
        echo "<br>";
    }

    isDrop($matrix2);
}

$matrix1 = [
    [0, 0, 0],
    [0, 5, -8],
    [0, 0, 0],
];

$matrix2 = [
    [-2, 0, -1],
    [0, 0, 1],
    [0, -1, 0],
];

additionMatrix($matrix1, $matrix2);

// Removing elements if there is zero and the sum of elements is positive
function isDrop($array)
{
    $columns_to_remove = [];
    $rows_to_remove = [];

    for ($row_index = 0; $row_index < count($array); $row_index++) {
        if (needDrop($array[$row_index])) {
            $rows_to_remove[] = $row_index;
        }
        $column = [];
        for ($column_index = 0; $column_index < count($array); $column_index++) {
            $column[] = $array[$column_index][$row_index];
        }
        if (needDrop($column)) {
            $columns_to_remove[] = $row_index;
        }
    }
    $result = $array;
    foreach ($result as $row_index => $row) {
        if (in_array($row_index, $rows_to_remove)) {
            unset($result[$row_index]);
        } else {
            foreach ($columns_to_remove as $column_index) {
                unset($result[$row_index][$column_index]);
            }
        }
    }

    echo "Result 2: <br>";
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            echo $result[$i][$j] . " ";
        }
        echo "<br>";
    }

}

//addition elements to remove of elements in array
function needDrop($arr)
{
    $sum = 0;
    $null_exist = false;
    foreach ($arr as $v) {
        if ($v === 0) {
            $null_exist = true;
        }
        $sum += $v;
    }
    return $null_exist && $sum > 0;
}
