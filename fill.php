<?php
require_once  __DIR__.'/config.php';
require_once  __DIR__.'/helper.php';
$file = $_GET['file'];
$file_sorce = TEMPLATE_DIR . $file;
if (!is_file($file_sorce)) {
    throw new Exception(sprintf('%s не являетса файлом системы', $file_sorce));
} else {
    $content = file_get_contents($file_sorce);
}
$forms=build_forms($content);
require_once __DIR__.'/view/fill.view.php';
