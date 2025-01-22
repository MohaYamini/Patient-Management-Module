<?php
require_once __DIR__ . '/../vendor/autoload.php';

$smarty = new Smarty();
$smarty->setTemplateDir(__DIR__ . '/../templates/');
$smarty->setCompileDir(__DIR__ . '/../templates/compiled/');
$smarty->setCacheDir(__DIR__ . '/../templates/cache/');
$smarty->setConfigDir(__DIR__ . '/../templates/configs/');
?>
