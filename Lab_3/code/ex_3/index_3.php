<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Доска объявлений</title>
</head>
<body>
<h1>Доска объявлений</h1>

<h2>Добавить объявление</h2>
<form action="post_ad_3.php" method="post">
    Email: <input type="email" name="email" required><br>
    Категория:
    <select name="category">
        <option value="Недвижимость">Недвижимость</option>
        <option value="Работа">Работа</option>
    </select><br>
    Заголовок объявления: <input type="text" name="title" required><br>
    Текст объявления: <textarea name="description" required></textarea><br>
    <input type="submit" value="Добавить">
</form>

<h2>Список объявлений</h2>
<table border="1">
    <tr>
        <th>Email</th>
        <th>Категория</th>
        <th>Заголовок</th>
        <th>Текст объявления</th>
    </tr>
    <?php
    $categories = ['недвижимость', 'работа'];
    foreach ($categories as $category) {
        $dir = "./$category/";
        if (is_dir($dir)) {
            $files = scandir($dir);
            foreach ($files as $file) {
                if ($file != '.' && $file != '..') {
                    $ad_content = file_get_contents($dir . $file);
                    $ad_data = explode("\n", $ad_content);
                    echo "<tr>";
                    echo "<td>" . $ad_data[0] . "</td>";
                    echo "<td>" . $category . "</td>";
                    echo "<td>" . basename($file, ".txt") . "</td>";
                    echo "<td>" . $ad_data[1] . "</td>";
                    echo "</tr>";
                }
            }
        }
    }
    ?>
</table>
</body>
</html>
