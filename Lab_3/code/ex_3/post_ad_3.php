<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $category = $_POST['category'];
    $title = $_POST['title'];
    $description = $_POST['description'];

    $dir = "./$category/";
    if (!is_dir($dir)) {
        mkdir($dir);
    }

    $filename = $dir . $title . ".txt";
    $content = $email . "\n" . $description;
    file_put_contents($filename, $content);

    header("Location: index_3.php");
    exit();
}
?>
