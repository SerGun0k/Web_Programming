<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Доска объявлений</title>
</head>
<body>
<h1>Доска объявлений</h1>

<form action="add_ad_3.php" method="post">
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br>

    <label for="category">Category:</label><br>
    <select id="category" name="category">
        <option value="realty">realty</option>
        <option value="work">Work</option>
    </select><br>

    <label for="title">Headline:</label><br>
    <input type="text" id="title" name="title" required><br>

    <label for="text">Announcement text:</label><br>
    <textarea id="text" name="text" rows="4" cols="50" required></textarea><br>

    <input type="submit" value="Add">
</form>

<hr>

<h2>Список объявлений</h2>
<table border="1">
    <tr>
        <th>Email</th>
        <th>Категория</th>
        <th>Заголовок</th>
        <th>Текст</th>
    </tr>
    <?php include 'display_ads_3.php'; ?>
</table>
</body>
</html>
