<?php

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/helper.php';
$file = $_GET['file'];
$file_sorce = TEMPLATE_DIR . $file;
if (is_post()) {
    $content = $_POST['content'];
    file_put_contents($file_sorce, $content);
    header('Location: /index.php');
} else {
    $content = file_get_contents($file_sorce);
}

require_once __DIR__ . '/view/file.view.php';
