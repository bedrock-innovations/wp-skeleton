<?php
/**
 * Do not add config or sensitive data directly to the file.
 * This file loads your config file from one level above the web root.
 * If this is a new install, copy the sample config file from the root to the directory above this one
*/
require_once dirname( __DIR__ ) . '/vendor/autoload.php';
require_once dirname( __DIR__ ) . '/wp-config.php';
require_once ABSPATH . 'wp-settings.php';
