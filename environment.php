<?php

// check for localhost
function is_localhost()
{
    $whiteList = array( '127.0.0.1', '::1' );
    if (in_array($_SERVER['REMOTE_ADDR'], $whiteList)) {
        return true;
    }
}

// check for staging in url string
function is_staging()
{
    $url = $_SERVER['SERVER_NAME'];
    if (strpos($url, '.staging.') !== false) {
        return true;
    } else {
        return false;
    }
}

// Fallback if nothing is defined
if (!defined('WP_ENV')) {
    if (is_localhost()) {
        define('WP_ENV', 'development');
    } elseif (is_staging()) {
        define('WP_ENV', 'staging');
    } else {
        define('WP_ENV', 'production');
    }
}
