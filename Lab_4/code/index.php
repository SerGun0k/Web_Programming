<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laba 4</title>
</head>
<body>
<div id="form">
    <form action="save.php" method="post">
        <label for="email">Email</label>
        <input type="email" name="email" required>

        <label for="category">Категория</label>
        <select name="category" required>
            <option value="cars">Машины</option>
            <option value="games">Игры</option>
            <option value="books">Книги</option>
            <option value="countries">Страны</option>
            <option value="other">Другое</option>
        </select>

        <label for="title">Заголовок</label>
        <input type="text" name="title" required>

        <label for="description">Описание</label>
        <textarea rows="5" name="description"></textarea>

        <input type="submit" value="Сохранить">
    </form>
</div>

<div id="table">
    <table>
        <thead>
        <tr>
            <th>Категория</th>
            <th>Заголовок</th>
            <th>Описание</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
<?php