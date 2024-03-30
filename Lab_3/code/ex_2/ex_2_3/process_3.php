<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $name = $_POST['name'];
    $age = $_POST['age'];
    $salary = $_POST['salary'];

    $userData = array(
        'name' => $name,
        'age' => $age,
        'salary' => $salary
    );

    $_SESSION['userData'] = $userData;

    header("Location: display_3.php");
    exit();
} else {
    header("Location: index_2_3.php");
    exit();
}
?>
