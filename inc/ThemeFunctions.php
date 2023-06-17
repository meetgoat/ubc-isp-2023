<?php

namespace UBC\Collab\Child;

use UBC\Collab\Child\GutenburgBlocks;

class ThemeFunctions
{
    public function __construct()
    {
        $this->themeHooks();

        // Setup Gutenburg Blocks
        new GutenburgBlocks();
    }

    private function themeHooks()
    {
        add_action('after_setup_theme', array($this, 'themeSetup'));
        add_action('wp_enqueue_scripts', array($this, 'themeScripts'));
        add_action('enqueue_block_editor_assets', array($this, 'editorScripts'));
    }

    /**
     * Enqueue scripts and styles.
     */
    function themeScripts()
    {
        $theme        = wp_get_theme();
        wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), $theme->parent()->get( 'Version' ) );
        wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/dist/css/main.css', array(), CHILD_THEME_VERSION);

    }

    function editorScripts() {
        // wp_register_script( 'editor', 
        //     get_stylesheet_directory_uri() . '/dist/js/editor.js', 
        //     [ 'wp-blocks', 'wp-dom', 'wp-dom-ready', 'wp-edit-post' ], 
        //     filemtime( CUSTOM_ATTRIBUTES_PATH . 'build/index.js' )
        // );
        // wp_enqueue_script( 'editor' );
    	wp_enqueue_style( 'editor-css', get_stylesheet_directory_uri() . '/dist/css/editor.css', false, '1.0', 'all' );
    }
    /**
     * Loads carbon fields and sets up additional theme options.
     */
    function themeSetup()
    {
        // Temporary, will remove if I find the setting.
        \UBC_Collab_CLF::$full_width = true;
        
        // \Carbon_Fields\Carbon_Fields::boot();

        // // Image Sizes
        // add_image_size( 'landing',      1440,   900, array('center', 'center'));
        // add_image_size( 'header',       1920,   600, array('center', 'center'));
        // add_image_size( 'circle',       600,    600, array('center', 'center'));
        // add_image_size( 'circle-small', 450,    450, array('center', 'center'));
        // add_image_size( 'goal-tall',    500,    900, array('center', 'center'));
        // add_image_size( 'goal-wide',    900,    500, array('center', 'center'));
    }
}
