<?php
// 1
/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";


// Write your code here:
$order = & $very_bad_unclear_name;
$order .= "+7(952)812 | ";

// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.";

echo "\n";

// 2
$a = 52;
echo $a;
$float_b = 7.952812;
echo "\n", $float_b;
echo "\n", (19 - 7 + 1 - 1 + 3 - 2 - 1);

$last_month = 1187.23;
$this_month = 1089.98;
echo "\n", $last_month - $this_month;


// 11
$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;
echo "\n", $days_per_language;


// 12
echo "\n", 8**2;
// 13
$my_num = 52;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo "\n", $answer;

// 14
$a = 10; $b = 3;
echo "\n", $a % $b;

if ($a % $b == 0) {
    echo "\n", 'Делиться: '. ($a / $b);
}
else {
    echo "\n", "Делиться с остатком: ". ($a % $b);
}

$st = 2**10; //pow(2, 10)
echo "\n", $st, "\n", 245**0.5; // sqrt(245)
$array = [4, 2, 5, 19, 13, 0, 10];
$sum = 0;
foreach($array as $key) {
    $sum += $key ** 2;
}
echo "\n", sqrt($sum);
$c = 379;
echo "\n", round(sqrt($c));
echo "\n", round(sqrt($c), 1);
echo "\n", round(sqrt($c), 2);

echo "\n", "Корень из 587: " . ceil(sqrt(587)) . ", " . floor(sqrt(587));

$array = [4, -2, 5, 19, -130, 0, 10];
echo "\n", "Минимальное число: " , min($array);
echo "\n", "Максимальное число: " , max($array);

echo "\n", "Случайное число от 1 до 100: ", rand(1, 100), "\n";

$random_numbers = [];
for ($i = 0; $i < 10; $i++) {
    $random_numbers[] = rand();
}
var_dump($random_numbers);

$a = 5;
$b = 6;
echo "\n", abs($a - $b);
$a = 100;
$b = 101;
echo "\n", abs($b - $a);

$array = [1, 2, -1, -2, 3, -3];
for ($i = 0; $i < count($array); $i++){
    $array[$i] = abs($array[$i]);
}
var_dump($array);



$numb = 30;
$divisors = [];
for ($i = 1; $i <= $numb; $i++) {
    if ($numb % $i == 0) {
        $divisors[] = $i;
    }
}
var_dump($divisors);
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
$count = 0;
foreach ($array as $num) {
    $sum += $num;
    $count++;
    if ($sum > 10) {
        break;
    }
}
echo "\n", "Кол-во эл-ов для суммы > 10: $count";

// 16

function printStringReturnNumber($str) {
    echo "\n", $str;
    return intval($str); // любое числовое значение
}

$my_num = printStringReturnNumber("5");
echo "\n", $my_num;
