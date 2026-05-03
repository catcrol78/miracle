<?php
ini_set('display_errors', 0); 
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Ловушка для ботов
    if (!empty($_POST['website_trap'])) {
        die("Success"); 
    }

    $name  = htmlspecialchars(trim($_POST["name"] ?? ''));
    $phone = htmlspecialchars(trim($_POST["phone"] ?? ''));

    // --- ЗАЩИТА ОТ СПАМА (только буквы и кириллица) ---
    $spam_patterns = ['http', 'www', '.ru', '.com', '.net', 'href', '<a', '://'];
    foreach ($spam_patterns as $pattern) {
        if (stripos($name, $pattern) !== false) {
            echo "<script>alert('Ошибка: Ссылки запрещены.'); window.history.back();</script>";
            exit; 
        }
    }

    if (!preg_match('/^[a-zA-Zа-яА-ЯёЁ\s\-]+$/u', $name) || !preg_match('/[а-яА-ЯёЁ]/u', $name)) {
        echo "<script>alert('Ошибка: Введите имя буквами на русском языке.'); window.history.back();</script>";
        exit; 
    }

    $clean_phone = preg_replace('/[^0-9]/', '', $phone);
    if (strlen($clean_phone) < 10) {
        echo "<script>alert('Ошибка: В номере телефона должно быть не менее 10 цифр.'); window.history.back();</script>";
        exit;
    }

    // Запись в лог
    file_put_contents("leads.txt", date("d.m.Y H:i") . " | Miracle | $name | $phone" . PHP_EOL, FILE_APPEND);

    // ОТПРАВКА ЧЕРЕЗ SMTP (На почту Mail.ru)
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.mail.ru';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'float-camera@mail.ru'; 
        $mail->Password   = 'UAVSiwKr60sj9wTkHXVB'; 
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;
        $mail->CharSet    = 'UTF-8';

        $mail->setFrom('float-camera@mail.ru', 'Miracle Float');
        $mail->addAddress('float-camera@mail.ru'); 

        $mail->isHTML(false);
        $mail->Subject = "ЗАЯВКА Miracle: $name";
        $mail->Body    = "Новый лид Miracle:\n\nИмя: $name\nТелефон: $phone";

        $mail->send();
        
        echo "<script>alert('Спасибо! Ваша заявка принята.'); window.location.href = 'index.html';</script>";
        exit;

    } catch (Exception $e) {
        // Если почта совсем упадет (что вряд ли), пишем ошибку
        echo "<script>alert('Ошибка при отправке. Пожалуйста, позвоните нам напрямую.'); window.history.back();</script>";
        exit;
    }
}
?>