<?php
function redirectToHome(): void
{
    header('Location: /');
    exit();
}

$URL_APP = "https://script.google.com/macros/s/AKfycbyhflIK_a76upfPFAMGISkeymdmVa5qSmbDP_RV4ZH6m_K5nIP_l8RmEvrdflzcH68C/exec";

function is_filled(array $details): bool
{
    return !empty($details['title']) && !empty($details['email']) && !empty($details['category']) && !empty($details['description']);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $email = $_POST['email'];
    $category = $_POST['category'];
    $description = $_POST['description'];

    $details = [
        'title' => $title,
        'email' => $email,
        'category' => $category,
        'description' => $description,
    ];

    if (!is_filled($details)) {
        exit('Поля формы не заполнены');
    }

    $formBody = http_build_query($details);

    $options = [
        'http' => [
            'method'  => 'POST',
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'content' => $formBody,
        ],
    ];

    $context = stream_context_create($options);
    $response = file_get_contents($URL_APP, false, $context);
    $result = json_decode($response, true);

    if ($result && isset($result['status']) && $result['status'] == 'success') {
        redirectToHome();
    } else {
        exit('Ошибка при отправке данных.');
    }
}
redirectToHome();
