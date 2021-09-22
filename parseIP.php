<?php

/**
 * Написать функцию которая вычисляет входит ли IP-адрес в диапазон указанных IP-адресов.
 *  Вычислить для версии ipv4.
 */
//fist option option
function parseIP($ip)
{

    $ip_array = ["192.168.123.34", "192.168.13.45", "192.168.13.15", "192.168.76.18", "192.168.132.48",];
    $minIp = min($ip_array);
    $maxIp = max($ip_array);
    if (in_array($ip, $ip_array)) {
        echo "айпи адрес $ip входит в диапазон: " . $minIp . '-' . $maxIp;
    } else {
        echo "айпи адрес $ip не входит в диапазон: " . $minIp . '-' . $maxIp;

    }

}

print_r(parseIP('192.168.123.34'));
echo "<br/>";

//second option
function rangepad($low, $high)
{
    $range = range($low, $high);
    for ($i = 0; $i < count($range); $i++) {
        $range[$i] = str_pad( $range[$i], high, '0', STR_PAD_LEFT );
    }
    return $range;
}

$r1 = '0150';
$r2 = '0159';
$from = mt_rand(0,255).".".mt_rand(0,255).".".mt_rand(0,255).".".mt_rand(0,255);
$to=  mt_rand(0,255).".".mt_rand(0,255).".".mt_rand(0,255).".".mt_rand(0,255);
rangepad($from, $to);


//next option
function inIPInterval($ip, $minIp, $maxIp){}
$cur_ip_adrr = $_SERVER['REMOTE_ADDR'];

//next opttion
function rangeIP($ip)
{
    $low_ip =mt_rand(0,255).".".mt_rand(0,255).".".mt_rand(0,255).".".mt_rand(0,255);
    $high_ip= '121.0.0.0';
    if ($ip <= $high_ip && $low_ip <= $ip) {
        echo "in range";
    }else {
        echo "not in range";
    }
    return true;
}


echo rangeIP('30.142.197.71');
