<<<<<<< HEAD
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
        $id = '1fNfud1je_jPrTyt1Et1-wTjSWepw8H9jSUY7FSVhoE0';
        $gid = 0;
        $csv = @file_get_contents('https://docs.google.com/spreadsheets/d/' . $id . '/export?format=csv&gid=' . $gid);

        if ($csv !== false) {
            $csv = array_filter(explode("\r\n", $csv)); // Фильтрация пустых строк
            $array = array_map('str_getcsv', $csv);

            $html = '';
            foreach ($array as $row) {
                if (count($row) >= 4) { // Убедимся, что в строке достаточно столбцов
                    $html .= '<tr>';
                    $html .= '<td>' . htmlspecialchars($row[0]) . '</td>';
                    $html .= '<td>' . htmlspecialchars($row[1]) . '</td>';
                    $html .= '<td>' . htmlspecialchars($row[2]) . '</td>';
                    $html .= '<td>' . htmlspecialchars($row[3]) . '</td>';
                    $html .= '</tr>';
                }
            }

            echo $html;
        } else {
            echo '<tr><td colspan="4">Не удалось получить данные.</td></tr>';
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>
=======
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
        $id = '1fNfud1je_jPrTyt1Et1-wTjSWepw8H9jSUY7FSVhoE0';
        $gid = 0;
        $csv = @file_get_contents('https://docs.google.com/spreadsheets/d/' . $id . '/export?format=csv&gid=' . $gid);

        if ($csv !== false) {
            $csv = array_filter(explode("\r\n", $csv)); // Фильтрация пустых строк
            $array = array_map('str_getcsv', $csv);

            $html = '';
            foreach ($array as $row) {
                if (count($row) >= 4) { // Убедимся, что в строке достаточно столбцов
                    $html .= '<tr>';
                    $html .= '<td>' . htmlspecialchars($row[0]) . '</td>';
                    $html .= '<td>' . htmlspecialchars($row[1]) . '</td>';
                    $html .= '<td>' . htmlspecialchars($row[2]) . '</td>';
                    $html .= '<td>' . htmlspecialchars($row[3]) . '</td>';
                    $html .= '</tr>';
                }
            }

            echo $html;
        } else {
            echo '<tr><td colspan="4">Не удалось получить данные.</td></tr>';
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>
>>>>>>> f8659faa49eb6631bb7715517073586ae53d8f12
