<?php

require_once __DIR__ . "/config.php";
require_once __DIR__ . '/helper.php';
if (is_post()) {

    $file = $_POST['file'];
    $file_checked = check_file_valid($file);
    if ($file_checked[0]) {
        $new_file = fopen(TEMPLATE_DIR . $file_checked[1], "w+");
        fclose($new_file);
        chmod(TEMPLATE_DIR . $file_checked[1], 0777);
        header('Location: /index.php');
    } else {
        $error = $file_checked[1];
    }
}
require_once __DIR__ . "/view/new.view.php";
