<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $surname = $_POST["surname"];
    $name = $_POST["name"];
    $age = $_POST["age"];

    // Записываем данные в сессию
    $_SESSION["user_info"] = array(
        "surname" => $surname,
        "name" => $name,
        "age" => $age
    );

    // Перенаправляем пользователя на другую страницу
    header("Location: display.php");
    exit();
}
?>
