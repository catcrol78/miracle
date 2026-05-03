<?php
/**
 * Шаблон карточки портфолио (?id=…). PHP 5.3+.
 */
require dirname(__FILE__) . '/includes/portfolio-store.php';

$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
$item = $id > 0 ? portfolio_get_by_id($id) : null;

if ($item === null) {
    if (function_exists('http_response_code')) {
        http_response_code(404);
    } else {
        header('HTTP/1.1 404 Not Found');
    }
    $page_title = 'Проект не найден | Miracle';
    $meta_description = 'Запрошенная страница портфолио не существует.';
    $active = 'works';
    $body_class = 'miracle-page';
    require dirname(__FILE__) . '/includes/header.php';
    ?>
    <main class="miracle-shell miracle-portfolio-detail" style="padding: 48px 20px 80px;">
        <h1 class="miracle-portfolio-detail__title">Проект не найден</h1>
        <p>Нет записи с номером <?= htmlspecialchars((string) $id, ENT_QUOTES, 'UTF-8') ?>.</p>
        <p><a href="tovary.html">← Вернуться к списку работ</a></p>
    </main>
    <?php
    require dirname(__FILE__) . '/includes/footer.php';
    exit;
}

$page_title = $item['title'] . ' | Наши работы Miracle';
$meta_description = isset($item['meta_description']) ? (string) $item['meta_description'] : (string) $item['title'];
$active = 'works';
$body_class = 'miracle-page';

require dirname(__FILE__) . '/includes/header.php';

$layout = isset($item['gallery_layout']) ? $item['gallery_layout'] : 'grid';
if ($layout !== 'slider' && $layout !== 'grid') {
    $layout = 'grid';
}
$rawImages = isset($item['images']) && is_array($item['images']) ? $item['images'] : array();
$images = array();
foreach ($rawImages as $img) {
    if (!is_array($img)) {
        continue;
    }
    $src = isset($img['src']) ? (string) $img['src'] : '';
    if ($src === '') {
        continue;
    }
    $images[] = array(
        'src' => $src,
        'alt' => isset($img['alt']) ? (string) $img['alt'] : '',
    );
}

function portfolio_h($s)
{
    return htmlspecialchars((string) $s, ENT_QUOTES, 'UTF-8');
}
?>
<main class="miracle-shell miracle-portfolio-detail">
    <nav class="miracle-portfolio-detail__back" aria-label="Назад к каталогу">
        <a href="tovary.html">← Наши работы</a>
    </nav>
    <p class="miracle-portfolio-detail__city"><?= portfolio_h(isset($item['city']) ? (string) $item['city'] : '') ?></p>
    <h1 class="miracle-portfolio-detail__title"><?= portfolio_h(isset($item['title']) ? (string) $item['title'] : '') ?></h1>

    <div class="miracle-portfolio-detail__facts">
        <?php if (!empty($item['address'])): ?>
            <p><strong>Адрес:</strong> <?= portfolio_h((string) $item['address']) ?></p>
        <?php endif; ?>
        <?php if (!empty($item['phone'])): ?>
            <p><strong>Телефон:</strong> <a href="tel:<?= preg_replace('/[^0-9+]/', '', (string) $item['phone']) ?>"><?= portfolio_h((string) $item['phone']) ?></a></p>
        <?php endif; ?>
        <?php if (!empty($item['work_hours'])): ?>
            <p><strong>Режим:</strong> <?= portfolio_h((string) $item['work_hours']) ?></p>
        <?php endif; ?>
        <?php if (!empty($item['site'])): ?>
            <p><strong>Сайт:</strong> <a href="<?= portfolio_h((string) $item['site']) ?>" target="_blank" rel="noopener noreferrer"><?= portfolio_h((string) $item['site']) ?></a></p>
        <?php endif; ?>
    </div>

    <?php if (!empty($item['body_html'])): ?>
        <div class="miracle-portfolio-detail__body">
            <?= $item['body_html'] ?>
        </div>
    <?php endif; ?>

    <?php if (!empty($images)): ?>
        <?php if ($layout === 'slider'): ?>
            <div class="miracle-portfolio-slider" data-portfolio-slider>
                <div class="miracle-portfolio-slider__viewport">
                    <?php foreach ($images as $idx => $img): ?>
                        <figure class="miracle-portfolio-slider__slide<?php echo $idx === 0 ? ' is-active' : ''; ?>">
                            <img src="<?= portfolio_h($img['src']) ?>" alt="<?= portfolio_h($img['alt']) ?>"<?php echo $idx === 0 ? ' loading="eager"' : ' loading="lazy"'; ?>>
                        </figure>
                    <?php endforeach; ?>
                </div>
                <div class="miracle-portfolio-slider__nav" aria-hidden="true">
                    <button type="button" class="miracle-portfolio-slider__btn" data-portfolio-prev aria-label="Предыдущее фото">‹</button>
                    <button type="button" class="miracle-portfolio-slider__btn" data-portfolio-next aria-label="Следующее фото">›</button>
                </div>
                <div class="miracle-portfolio-slider__dots" role="tablist">
                    <?php foreach ($images as $idx => $_img): ?>
                        <button type="button" role="tab" class="miracle-portfolio-slider__dot<?php echo $idx === 0 ? ' is-active' : ''; ?>" data-portfolio-dot="<?php echo (int) $idx; ?>" aria-label="Фото <?php echo (int) ($idx + 1); ?>"></button>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php else: ?>
            <div class="miracle-portfolio-grid">
                <?php foreach ($images as $img): ?>
                    <figure class="miracle-portfolio-grid__cell">
                        <img src="<?= portfolio_h($img['src']) ?>" alt="<?= portfolio_h($img['alt']) ?>" loading="lazy">
                    </figure>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    <?php endif; ?>
</main>
<script src="assets/js/portfolio-item.js" defer></script>
<?php require dirname(__FILE__) . '/includes/footer.php'; ?>
