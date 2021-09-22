<?php
/**
 * Написать функцию которая выводит первые N чисел фибоначчи
 */
function fibonacci($number)
{
    if ($number < 3) {
        return 1;
    } else {
        return fibonacci($number - 1) + fibonacci($number - 2);
    }
}

echo "числа фибоначчи: ";
for ($number = 1; $number <= 16; $number++) {
    echo(fibonacci($number) . ", ");
}
echo("...\n");




