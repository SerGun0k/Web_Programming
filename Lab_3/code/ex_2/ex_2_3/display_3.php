<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data</title>
</head>
<body>
<h2>User Data:</h2>
<ul>
    <?php
    session_start();

    // Проверяем, есть ли сохраненные данные в сессии
    if (isset($_SESSION['userData'])) {
        // Перебираем сохраненные данные и выводим каждый элемент в отдельном теге li
        foreach ($_SESSION['userData'] as $key => $value) {
            echo "<li><strong>$key:</strong> $value</li>";
        }
    } else {
        echo "<li>No user data found</li>";
    }
    ?>
</ul>
</body>
</html>
