<?php

if( !function_exists('themeEnqueue')) :

    function themeEnqueue()
    {
        wp_enqueue_style( handle:'theme-css', src: get_stylesheet_directory_uri() .'/build/index.css');
    }

    add_action( hook_name: 'wp_enqueue_scripts', callback: 'themeEnqueue');

endif;