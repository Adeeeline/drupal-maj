<?php


/**
* Default settings file.
**/
if (file_exists($app_root . '/sites/default/default.settings.php')) {
  include $app_root . '/sites/default/default.settings.php';
}

/**
* Application specific settings file.
**/
$app_main = explode('/', $app_root);
array_pop($app_main);
$app_main = implode('/', $app_main);


if (file_exists($app_main . '/config/drupal/settings.app.php')) {
  include $app_main . '/config/drupal/settings.app.php';
}

if (file_exists($app_main . '/config/drupal/settings.local.php')) {
  include $app_main . '/config/drupal/settings.local.php';
}

// Automatically generated include for settings managed by ddev.
$ddev_settings = dirname(__FILE__) . '/settings.ddev.php';
if (getenv('IS_DDEV_PROJECT') == 'true' && is_readable($ddev_settings)) {
  require $ddev_settings;
}
