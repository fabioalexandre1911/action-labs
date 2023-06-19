<?php

if( !function_exists('themeSetup')) :

    function themeSetup()
    {
        /**supports */
        add_theme_support( feature: 'title-tag');
        add_theme_support( feature: 'post-thumbnails');
        add_theme_support( feature: 'custom-logo');
    }

    add_action( hook_name: 'after_setup_theme', callback: 'themeSetup');

endif;