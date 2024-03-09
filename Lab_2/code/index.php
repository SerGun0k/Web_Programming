<?php
// 1
/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";


// Write your code here:
$order = & $very_bad_unclear_name;
$order .= "+7(952)812 | ";

// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.". "<br>";

echo "\n". "<br>";

// 2
$a = 52;
echo $a;
$float_b = 7.952812;
echo "\n", $float_b . "<br>";
echo "\n", (19 - 7 + 1 - 1 + 3 - 2 - 1). "<br>";

$last_month = 1187.23;
$this_month = 1089.98;
echo "\n", $last_month - $this_month. "<br>";


// 11
$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;
echo "\n", $days_per_language , "<br>";


// 12
echo "\n", 8**2 , "<br>";
// 13
$my_num = 52;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo "\n", $answer , "<br>";

// 14
$a = 10; $b = 3;
echo "\n", $a % $b , "<br>";

if ($a % $b == 0) {
    echo "\n", 'Делиться: '. ($a / $b) , "<br>";
}
else {
    echo "\n", "Делиться с остатком: ". ($a % $b) , "<br>";
}

$st = 2**10; //pow(2, 10)
echo "\n", $st, "\n", 245**0.5 . "<br>"; // sqrt(245)
$array = [4, 2, 5, 19, 13, 0, 10];
$sum = 0;
foreach($array as $key) {
    $sum += $key ** 2;
}
echo "\n", sqrt($sum) . "<br>";
$c = 379;
echo "\n", round(sqrt($c)) . "<br>";
echo "\n", round(sqrt($c), 1) . "<br>";
echo "\n", round(sqrt($c), 2) . "<br>";

echo "\n", "Корень из 587: " . ceil(sqrt(587)) . ", " . floor(sqrt(587)) , "<br>";

$array = [4, -2, 5, 19, -130, 0, 10];
echo "\n", "Минимальное число: " , min($array) , "<br>";
echo "\n", "Максимальное число: " , max($array) , "<br>";

echo "\n", "Случайное число от 1 до 100: ", rand(1, 100), "\n" , "<br>";

$random_numbers = [];
for ($i = 0; $i < 10; $i++) {
    $random_numbers[] = rand();
}
var_dump($random_numbers);

$a = 5;
$b = 6;
echo "\n", abs($a - $b) , "<br>";
$a = 100;
$b = 101;
echo "\n", abs($b - $a) , "<br>";

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
echo "\n", "Кол-во эл-ов для суммы > 10: $count" , "<br>";

// 16

function printStringReturnNumber($str) {
    echo "\n", $str , "<br>";
    return intval($str);
}

$my_num = printStringReturnNumber("666");
echo "\n", $my_num , "<br>";

// 16
function increaseEnthusiasm($str) {
    return $str . "!";
}

function repeatThreeTimes($str) {
    return $str . $str . $str;
}

$string = "Hi-Fi";
echo increaseEnthusiasm($string) , "\n" , "<br>";
echo repeatThreeTimes($string) , "\n" , "<br>";

echo increaseEnthusiasm(repeatThreeTimes($string)) , "\n" , "<br>";

function cut($str, $length = 10) {
    return substr($str, 0, $length);
}

echo cut("bim-bim_bam-bam", 7) , "\n" , "<br>";

function printArray($array, $index = 0) {
    if ($index < count($array)) {
        echo $array[$index] , "\n" , "<br>";
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

echo sumDigits(803) , "\n" , "<br>";

// 17
$array = [];
for ($i = 1; $i <= 5; $i++) {
    $array[] = str_repeat('x', $i);
}
var_dump($array);

echo "\n" , "<br>";
function arrayFill($value, $count)
{
    return array_fill(0, $count, $value);
}

$resultArray = arrayFill('x', 5);
var_dump($resultArray);

echo "\n" , "<br>";

$array2D = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];
$sum = 0;
foreach ($array2D as $i) {
    foreach ($i as $j) {
        $sum += $j;
    }
}
echo $sum. "\n" , "<br>";

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
echo "\n" , "<br>";

$AArray = [2, 5, 3, 9];
$result = ($AArray[0] * $AArray[1]) + ($AArray[2] * $AArray[3]);
echo $result , "\n" , "<br>";


$user = ['name' => 'Anton', 'surname' => 'Mulitca', 'patronymic' => 'Gennadievich'];
echo $user['surname'] . ' ' . $user['name'] . ' ' . $user['patronymic'] , "\n" , "<br>";


$date = ['year' => date('Y'), 'month' => date('m'), 'day' => date('d')];
echo $date['year'] . '-' . $date['month'] . '-' . $date['day'] , "\n" , "<br>";


$arr = ['a', 'b', 'c', 'd', 'e'];
echo count($arr) , "\n" , "<br>";


echo end($arr) , "\n" , "<br>";
prev($arr);
echo current($arr) , "\n" , "<br>";

// 18
function checkSum($num1, $num2) {
    return ($num1 + $num2 > 10) ? true : false;
}

echo checkSum(52, 2) ? 'true' : 'false';
echo "\n" , "<br>";


function checkEqual($num1, $num2) {
    return ($num1 == $num2) ? true : false;
}

echo checkEqual(33, 33) ? 'true' : 'false';
echo "\n" , "<br>";


$test = 0;
echo ($test == 0) ? 'верно' : '' , "<br>";

echo "\n" . "<br>";

$age = 19;
if ($age < 10 || $age > 99) {
    echo "Число вне диапазона." , "<br>";
} else {
    $sum = array_sum(str_split($age));
    if ($sum <= 9) {
        echo "Сумма цифр однозначна." , "<br>";
    } else {
        echo "Сумма цифр двузначна." , "<br>";
    }
}

echo "\n" , "<br>";

$arr = [1, 2, 3];
if (count($arr) == 3) {
    echo array_sum($arr) . "<br>";
}

echo "\n" , "<br>";


// 19
for ($i = 1; $i <= 20; $i++) {
    echo str_repeat('x', $i) . "\n" . "<br>";
}


// 20
$array = [0, 1, 2, 3, 4, 5, 6];
$average = array_sum($array) / count($array);
echo "Среднее арифметическое: $average \n" , "<br>";


$sum = (1 + 100) * 100 / 2;
echo "Сумма чисел от 1 до 100: $sum \n" , "<br>";


$array = [1, 25, 49];
$squareRoots = array_map('sqrt', $array);
print_r($squareRoots);
echo "\n" , "<br>";


$letters = range('a', 'z');
$numb = range(1, 26);
$abcArray = array_combine($letters, $numb);
print_r($abcArray);
echo "\n" , "<br>";


$string = '1234567890';
$numb = str_split($string, 2);
$sum = array_sum($numb);
echo $sum, "\n", "<br>";

echo "\n", "<br>";