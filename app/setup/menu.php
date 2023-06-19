<?php

if( !function_exists('themeMenu')) :

    function themeMenu()
    {
        /**register menu */
        register_nav_menus(
            locations: array(
                'primary' => esc_html__( text: 'Menu Principal', domain: 'action-labs')
            )
        );
        
    }

    add_action( hook_name: 'after_setup_theme', callback: 'themeMenu');

endif;