<?php
$user_name = htmlspecialchars($_POST["username"]);
$user_phone = htmlspecialchars($_POST['userphone']);

$token = "6176398166:AAHlXePEXYj9aIW6JISjzFh75Ou84NXF6Xc";
$chat_id = "-4034510724";
$text = "";

$formData = array(
    "Клиент: " => $user_name,
    "Телефон: " => $user_phone
);

foreach ($formData as $key => $value) {
    $text .= $key . "<b>" . urlencode($value) . "</b>" . "%0A";
}

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$text}&parse_mode=html", "r");

if ($sendToTelegram) {
    echo "ok";
} else {
    echo "Error";
}
