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
