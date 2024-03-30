<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information Form</title>
</head>
<body>
<h2>Enter Your Information</h2>
<form action="process.php" method="POST">
    <label for="surname">Surname:</label><br>
    <input type="text" id="surname" name="surname"><br><br>
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name"><br><br>
    <label for="age">Age:</label><br>
    <input type="number" id="age" name="age"><br><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>
