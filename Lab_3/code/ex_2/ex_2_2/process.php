<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $surname = $_POST["surname"];
    $name = $_POST["name"];
    $age = $_POST["age"];

    $_SESSION["user_info"] = array(
        "surname" => $surname,
        "name" => $name,
        "age" => $age
    );

    header("Location: display_3.php");
    exit();
}
?>
