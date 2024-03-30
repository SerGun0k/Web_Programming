<?php
session_start();

// Проверяем, есть ли данные о пользователе в сессии
if (isset($_SESSION["user_info"])) {
    $userInfo = $_SESSION["user_info"];
    // Выводим данные на экран
    echo "Surname: " . $userInfo["surname"] . "<br>";
    echo "Name: " . $userInfo["name"] . "<br>";
    echo "Age: " . $userInfo["age"] . "<br>";
} else {
    echo "No user information found.";
}
?>
