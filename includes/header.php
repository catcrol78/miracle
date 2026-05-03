<?php
/* Шапка: PHP 5.3+ (без ?? и без короткого синтаксиса массивов). */
if (!isset($page_title)) {
    $page_title = 'Флоат-камеры Miracle | Производство и продажа';
}
if (!isset($meta_description)) {
    $meta_description = 'Флоат-камеры российского производства Miracle. Изготовление, продажа, установка и сервисное сопровождение.';
}
if (!isset($active)) {
    $active = '';
}
if (!isset($body_class)) {
    $body_class = '';
}
function nav_active($name, $active)
{
    return $name === $active ? ' class="active"' : '';
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8') ?></title>
    <meta name="description" content="<?= htmlspecialchars($meta_description, ENT_QUOTES, 'UTF-8') ?>">
    <link rel="icon" href="https://float-camera.ru/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/miracle-redesign.css">
</head>
<body<?= $body_class !== '' ? ' class="' . htmlspecialchars($body_class, ENT_QUOTES, 'UTF-8') . '"' : '' ?>>
<div class="top-bar">Консультации круглосуточно: <a href="tel:89272528367">8-927-252-83-67</a></div>
<header class="site-header">
    <div class="container nav-container">
        <a href="index.html" class="logo" aria-label="Miracle">
            <span>MIRACLE</span>
        </a>
        <button class="menu-toggle" type="button" aria-label="Открыть меню" aria-expanded="false" data-menu-toggle>☰</button>
        <nav aria-label="Основное меню">
            <ul class="main-menu">
                <li><a href="index.html"<?= nav_active('home', $active) ?>>Главная</a></li>
                <li><a href="tovary.html"<?= nav_active('works', $active) ?>>Наши работы</a></li>
                <li><a href="stati.html"<?= nav_active('articles', $active) ?>>Статьи</a></li>
                <li><a href="dokument.html"<?= nav_active('docs', $active) ?>>Документация</a></li>
                <li><a href="cena.html"<?= nav_active('price', $active) ?>>Цена</a></li>
                <li><a href="contact.html"<?= nav_active('contacts', $active) ?>>Контакты</a></li>
                <li><a class="premium-link" href="https://float-camera-bufo.ru" target="_blank" rel="noopener">Premium BUFO</a></li>
            </ul>
        </nav>
    </div>
</header>
