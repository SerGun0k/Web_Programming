<?php
session_start();

if (isset($_SESSION["user_info"])) {
    $userInfo = $_SESSION["user_info"];

    echo "Surname: " . $userInfo["surname"] . "<br>";
    echo "Name: " . $userInfo["name"] . "<br>";
    echo "Age: " . $userInfo["age"] . "<br>";
} else {
    echo "No user information found.";
}
?>
