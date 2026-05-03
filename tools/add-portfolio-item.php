#!/usr/bin/env php
<?php
/**
 * CLI: добавить пустую запись в data/portfolio-items.json с id = max(id)+1.
 * Запуск из корня htdocs: php tools/add-portfolio-item.php
 * PHP 5.3+ (без JSON_PRETTY_PRINT / JSON_UNESCAPED_UNICODE).
 */
$root = dirname(__DIR__);
$path = $root . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'portfolio-items.json';

if (!is_readable($path)) {
    fwrite(STDERR, "Не найден файл: $path\n");
    exit(1);
}

$raw = file_get_contents($path);
$data = json_decode($raw, true);
if (!is_array($data)) {
    fwrite(STDERR, "Некорректный JSON\n");
    exit(1);
}

$max = 0;
foreach ($data as $row) {
    if (isset($row['id'])) {
        $max = max($max, (int) $row['id']);
    }
}
$newId = $max + 1;

$data[] = array(
    'id' => $newId,
    'title' => 'Новый проект (заголовок)',
    'meta_description' => 'Краткое описание для meta description.',
    'city' => '',
    'address' => '',
    'phone' => '',
    'site' => '',
    'work_hours' => '',
    'thumb' => '',
    'gallery_layout' => 'grid',
    'images' => array(),
    'body_html' => '<p>Текст страницы. Поле <code>gallery_layout</code>: <code>grid</code> или <code>slider</code>.</p>',
);

$json = json_encode($data);
if ($json === false) {
    fwrite(STDERR, "Ошибка кодирования JSON\n");
    exit(1);
}

if (file_put_contents($path, $json . "\n") === false) {
    fwrite(STDERR, "Не удалось записать $path\n");
    exit(1);
}

echo "Добавлена запись id=$newId в data/portfolio-items.json\n";
echo "Ссылка: portfolio-item.php?id=$newId\n";
echo "После правок JSON выполните: node tools/build-portfolio-local.js\n";
