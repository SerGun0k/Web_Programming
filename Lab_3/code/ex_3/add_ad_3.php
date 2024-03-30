<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $category = $_POST['category'];
    $title = $_POST['title'];
    $text = $_POST['text'];

    if (!file_exists("ads/$category")) {
        mkdir("ads/$category", 0777, true);
    }

    $file_path = "ads/$category/" . $title . ".txt";
    $file = fopen($file_path, "w");
    fwrite($file, $text);
    fclose($file);

    header("Location: index_3.php");
    exit();
}
?>
