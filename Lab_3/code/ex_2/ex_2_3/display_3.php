<?php

session_start();
?>
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
    if (isset($_SESSION['userData'])) {
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
