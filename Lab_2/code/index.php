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
    return intval($str);
}

$my_num = printStringReturnNumber("666");
echo "\n", $my_num;

// 16
function increaseEnthusiasm($str) {
    return $str . "!";
}

function repeatThreeTimes($str) {
    return $str . $str . $str;
}

$string = "Hi-Fi";
echo increaseEnthusiasm($string) , "\n";
echo repeatThreeTimes($string) , "\n";

echo increaseEnthusiasm(repeatThreeTimes($string)) , "\n";

function cut($str, $length = 10) {
    return substr($str, 0, $length);
}

echo cut("bim-bim_bam-bam", 7) , "\n";

function printArray($array, $index = 0) {
    if ($index < count($array)) {
        echo $array[$index] , "\n";
        printArray($array, $index + 1);
    }
}

$array = [1, 2, 0, 0, 4];
printArray($array);

function sumDigits($curr) {
    $sum = array_sum(str_split($curr));
    if ($sum > 9) {
        return sumDigits($sum);
    } else {
        return $sum;
    }
}

echo sumDigits(803) , "\n";

// 17
$array = [];
for ($i = 1; $i <= 5; $i++) {
    $array[] = str_repeat('x', $i);
}
var_dump($array);

echo "\n";
function arrayFill($value, $count)
{
    return array_fill(0, $count, $value);
}

$resultArray = arrayFill('x', 5);
var_dump($resultArray);

echo "\n";

$array2D = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];
$sum = 0;
foreach ($array2D as $i) {
    foreach ($i as $j) {
        $sum += $j;
    }
}
echo $sum. "\n";

$c = 1;
$Array = [];
for ($i = 0; $i < 3; $i++) {
    $A = [];
    for ($j = 0; $j < 3; $j++) {
        $A[] = $c++;
    }
    $Array[] = $A;
}
print_r($Array);
echo "\n";

$AArray = [2, 5, 3, 9];
$result = ($AArray[0] * $AArray[1]) + ($AArray[2] * $AArray[3]);
echo $result , "\n";


$user = ['name' => 'Anton', 'surname' => 'Mulitca', 'patronymic' => 'Gennadievich'];
echo $user['surname'] . ' ' . $user['name'] . ' ' . $user['patronymic'] , "\n";


$date = ['year' => date('Y'), 'month' => date('m'), 'day' => date('d')];
echo $date['year'] . '-' . $date['month'] . '-' . $date['day'] , "\n";


$arr = ['a', 'b', 'c', 'd', 'e'];
echo count($arr) , "\n";


echo end($arr) , "\n";
prev($arr);
echo current($arr) , "\n";

// 18
function checkSum($num1, $num2) {
    return ($num1 + $num2 > 10) ? true : false;
}

echo checkSum(52, 2) ? 'true' : 'false';
echo "\n";


function checkEqual($num1, $num2) {
    return ($num1 == $num2) ? true : false;
}

echo checkEqual(33, 33) ? 'true' : 'false';
echo "\n";


$test = 0;
echo ($test == 0) ? 'верно' : '';

echo "\n";

$age = 19;
if ($age < 10 || $age > 99) {
    echo "Число вне диапазона.";
} else {
    $sum = array_sum(str_split($age));
    if ($sum <= 9) {
        echo "Сумма цифр однозначна.";
    } else {
        echo "Сумма цифр двузначна.";
    }
}

echo "\n";

$arr = [1, 2, 3];
if (count($arr) == 3) {
    echo array_sum($arr);
}

echo "\n";


// 19
for ($i = 1; $i <= 20; $i++) {
    echo str_repeat('x', $i) . "\n";
}


// 20
$array = [0, 1, 2, 3, 4, 5, 6];
$average = array_sum($array) / count($array);
echo "Среднее арифметическое: $average \n";


$sum = (1 + 100) * 100 / 2;
echo "Сумма чисел от 1 до 100: $sum \n";


$array = [1, 25, 49];
$squareRoots = array_map('sqrt', $array);
print_r($squareRoots);
echo "\n";


$letters = range('a', 'z');
$numb = range(1, 26);
$abcArray = array_combine($letters, $numb);
print_r($abcArray);
echo "\n";


$string = '1234567890';
$numb = str_split($string, 2);
$sum = array_sum($numb);
echo $sum, "\n";

echo "\n";