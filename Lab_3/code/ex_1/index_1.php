<?php
echo '############## ex_1_a ################' . '<br>';
$str = 'ahb acb aeb aeeb adcb axeb';
preg_match_all('/a..b/', $str, $matches);
print_r($matches[0]);

echo "\n" . '<br>';
echo '############## ex_1_b ################' . '<br>';

$str = 'a1b2c3';
$str = preg_replace_callback('/\d/', function($matches) {
    return $matches[0] ** 3;
}, $str);
echo $str;