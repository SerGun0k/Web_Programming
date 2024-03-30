<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word and Symbols Counter Result</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = $_POST['text'];
    $word_count = str_word_count($text);
    $symb_count = strlen($text);
    echo "<p>Word Count: $word_count</p>";
    echo "<p>Symbols Count: $symb_count</p>";
}
?>
<a href="index_2_1.php">Back</a>
</body>
</html>
