<?php
/**
 * Написать функцию которая по параметрам принимает число из десятичной
системы счисления и преобразовывает в двоичную. Написать функцию которая
выполняет преобразование наоборот.
*/
/**
 * @param $binaryNumber
 * @return false|float|int|string
 */
function binaryConversion($number)
{
    $binaryNumber = '';
    try {
        while ($number != 0) {
            $binaryNumber = ($number % 2) . $binaryNumber;
            $number = (int)($number / 2);
        }
    }catch (Exception $e) {
        $e->getMessage();
    }
    return $binaryNumber;
}
echo 'binary number = ' . binaryConversion(20) . '<br/>';

function decimalConversion($binaryNumber)
{
    $i = 0;
    if (!preg_match('~^[01]+$~', $binaryNumber)) {
        throw new Exception('No entry found.');
    }
        while ($binaryNumber != "") {
            $i = $i * 2 + substr($binaryNumber, 0, 1);
            $binaryNumber = substr($binaryNumber, 1);
        }
    return $i;
}
echo 'decimal number = ' . decimalConversion(101010) . '<br/>';
