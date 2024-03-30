<?php
session_start();

// Проверяем, были ли переданы данные из формы
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $name = $_POST['name'];
    $age = $_POST['age'];
    $salary = $_POST['salary'];

    // Создаем массив с полученными данными
    $userData = array(
        'name' => $name,
        'age' => $age,
        'salary' => $salary
    );

    // Записываем массив в сессию
    $_SESSION['userData'] = $userData;

    // Перенаправляем пользователя на другую страницу
    header("Location: display_3.php");
    exit();
} else {
    // Если данные не были переданы из формы, перенаправляем пользователя на главную страницу
    header("Location: index_2_3.php");
    exit();
}
?>
