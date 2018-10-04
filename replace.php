<?php

require_once __DIR__ . '/helper.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$file = $_GET['file'];
$file_sorce = TEMPLATE_DIR . $file;
if (!is_file($file_sorce)) {
    throw new Exception(sprintf('%s не являетса файлом системы', $file_sorce));
} else {
    $content = file_get_contents($file_sorce);
}
if (is_post()) {
    $data = $_POST;
    foreach ($data as $key => $value) {
        $key = '{{' . (explode('_', $key)[0]) . '}}';
        if ($key == '{{name}}') {
            $value = ucfirst($value);
        } elseif ($key == '{{number}}') {
            $value = sprintf("%d", $value);
        } elseif ($key == '{{money}}') {
            $value = sprintf("%.2f", $value);


        }
        $content = str_replace_first($key, $value, $content);
    }
}

require_once __DIR__ . '/view/replace.view.php';
