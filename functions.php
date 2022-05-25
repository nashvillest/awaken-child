<?php

if (is_child_theme()) {
    // Hide old archive months (2008-2016)
    function nashvillest_hide_old_archive_months()
    {
        wp_enqueue_script(
            'hide-old-archive-months',
            get_stylesheet_directory_uri() . '/js/hide-old-archive-months.js',
            ['jquery'],
            false,
            true
        );
    }
    add_action('wp_enqueue_scripts', 'nashvillest_hide_old_archive_months');
}
