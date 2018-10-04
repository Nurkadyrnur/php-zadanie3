<?php
//
require_once  __DIR__."/config.php";



$files = scandir(TEMPLATE_DIR);
unset($files[0]);
unset($files[1]);
require_once  __DIR__ ."/view/index.view.php";