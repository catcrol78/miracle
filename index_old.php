<?php
/**
 * Author: Alex Kroll
 * Created: 20.02.13 11:35
 */
require_once "libs/smarty/Smarty.class.php";
require_once "core/MenuItem.php";
require_once "core/Slide.php";
require_once "core/PageBase.php";
require_once "core/StandardPage.php";

define('CURRENT_DIR', dirname(__FILE__) . DIRECTORY_SEPARATOR);
define('DATA_DIR', CURRENT_DIR . 'data' . DIRECTORY_SEPARATOR);

$contentXML = simplexml_load_file("data/content.xml") or die("Ошибка загрузки content.xml");
$pagesXML = $contentXML->pages;

if (array_key_exists('page', $_GET)) {
    $pageId  = $_GET['page'];
} else {
    $pageId = $pagesXML['default'];
}

//echo "PageId: " . $pageId . "<br/>\n";

foreach($pagesXML->page as $pageXML) {
    if ((string) $pageXML['id'] == $pageId) {
        $page = null;

        switch ((string) $pageXML['class']) {
            case 'test':
                break;
            default:
                $page = new StandardPage();
        }
        $page->init($contentXML, $pageXML);

        $smarty = new Smarty();
        $smarty->setCacheDir(DATA_DIR . "cache");
        $smarty->setCompileDir(DATA_DIR . "templates_c");
        $smarty->setConfigDir(DATA_DIR . "configs");
        $smarty->setTemplateDir(DATA_DIR . "templates");

        $page->process($smarty);
        exit;
    }
}

die('Page not found');
