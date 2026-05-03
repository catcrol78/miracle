<?php
/**
 * Загрузка записей портфолио из JSON (источник правды для шаблона portfolio-item).
 * Совместимо с PHP 5.3+.
 */

function portfolio_data_path()
{
    return dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'portfolio-items.json';
}

function portfolio_load_all()
{
    $path = portfolio_data_path();
    if (!is_readable($path)) {
        return array();
    }
    $raw = file_get_contents($path);
    if ($raw === false) {
        return array();
    }
    $data = json_decode($raw, true);
    return is_array($data) ? $data : array();
}

/**
 * @param int $id
 * @return array|null
 */
function portfolio_get_by_id($id)
{
    $id = (int) $id;
    foreach (portfolio_load_all() as $row) {
        if (isset($row['id']) && (int) $row['id'] === $id) {
            return $row;
        }
    }
    return null;
}

function portfolio_next_id()
{
    $max = 0;
    foreach (portfolio_load_all() as $row) {
        if (isset($row['id'])) {
            $max = max($max, (int) $row['id']);
        }
    }
    return $max + 1;
}
