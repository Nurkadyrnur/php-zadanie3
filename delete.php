<?php

require_once __DIR__ . '/config.php';
$file = $_GET['file'];
$file_sorce = TEMPLATE_DIR . $file;
if (!is_file($file_sorce)) {
    throw new Exception(sprintf('%s не являетса файлом системы', $file_sorce));
} else {
    unlink($file_sorce);
    header('Location: /index.php');
}



