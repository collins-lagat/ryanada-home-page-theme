<?php

// Exit if accessed directly.
defined('ABSPATH') || exit;

// UnderStrap's includes directory.
$truehost_include_dir = get_template_directory() . '/include';

// Array of files to include.
$truehost_includes = array(
    '/enqueue.php', // Enqueue scripts and styles.
);

// Include files.
foreach ($truehost_includes as $file) {
    require_once $truehost_include_dir . $file;
}
