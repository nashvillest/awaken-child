<?php

if (is_child_theme()) {
    // Hide old archive months (2008-2016)
    wp_enqueue_script(
        'hide-old-archive-months',
        get_stylesheet_directory_uri() . '/js/hide-old-archive-months.js',
        ['jquery'],
        false,
        true
    );
}
