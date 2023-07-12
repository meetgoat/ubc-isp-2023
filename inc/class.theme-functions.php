<?php

class UBC_ISP_ThemeFunctions
{
    public static function init()
    {
        self::themeHooks();
    }

    static function themeHooks()
    {   
        add_action( 'after_setup_theme', array( 'UBC_ISP_ThemeFunctions', 'themeSetup'), 20 , 2 );

        add_action( 'wp_enqueue_scripts', array( 'UBC_ISP_ThemeFunctions', 'themeScripts'));
        add_action( 'enqueue_block_editor_assets', array( 'UBC_ISP_ThemeFunctions', 'editorScripts'));

        add_action( 'wp-hybrid-clf_before_header', array( 'UBC_ISP_ThemeFunctions', 'openHeaderWrap') );
        add_action( 'wp-hybrid-clf_after_header', array( 'UBC_ISP_ThemeFunctions', 'closeHeaderWrap') );

        add_action( 'wp-hybrid-clf_before_footer', array( 'UBC_ISP_ThemeFunctions', 'openFooterWrap') );
        add_action( 'wp-hybrid-clf_after_footer', array( 'UBC_ISP_ThemeFunctions', 'closeFooterWrap') );

        
    }

    /**
     * Enqueue scripts and styles.
     */
    static function themeScripts()
    {

        $theme = wp_get_theme();
        wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), $theme->parent()->get( 'Version' ) );
       
        wp_enqueue_style('dataTable-style', '//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css', array(), CHILD_THEME_VERSION);
        wp_enqueue_script('dataTable-js', '//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js', array('jquery'), CHILD_THEME_VERSION, true);
        
        wp_enqueue_style('slick-style', '//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css', array(), CHILD_THEME_VERSION);
        wp_enqueue_script('slick-js', '//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js', array('jquery'), CHILD_THEME_VERSION, true);
        

        wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/dist/css/main.css', array(), CHILD_THEME_VERSION);
        wp_enqueue_script('child-js', get_stylesheet_directory_uri() . '/dist/js/main.js', array('jquery', 'dataTable-js' ), CHILD_THEME_VERSION, true);

    }

    static function editorScripts() {
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
    static function themeSetup()
    {
        global $content_width;
        
        // Temporary, will remove if I find the setting.
        \UBC_Collab_CLF::$full_width = true;
        
        remove_theme_support( 'core-block-patterns' );
        add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );
        // // Image Sizes
        // add_image_size( 'landing',      1440,   900, array('center', 'center'));

        

        $theme_color_palette = array(
            array(
                'name' 	=> __( 'UBC white', 'ubc_collab' ),
                'slug' 	=> 'ubc-white',
                'color' => '#ffffff',
            ),
            array(
                'name' 	=> __( 'UBC black', 'ubc_collab' ),
                'slug' 	=> 'ubc-black',
                'color' => '#222222',
            ),
            array(
                'name' 	=> __( 'UBC Blue', 'ubc_collab' ),
                'slug' 	=> 'ubc-blue',
                'color' => '#002145',
            ),
            array(
                'name' 	=> __( 'UBC secondary blue', 'ubc_collab' ),
                'slug' 	=> 'ubc-secondary-blue',
                'color' => '#0055b7',
            ),
            array(
                'name' 	=> __( 'UBC tertiary blue', 'ubc_collab' ),
                'slug' 	=> 'ubc-tertiary-blue',
                'color' => '#00a7e1',
            ),
            array(
                'name' 	=> __( 'UBC quaternary blue', 'ubc_collab' ),
                'slug' 	=> 'ubc-quaternary-blue',
                'color' => '#40b4e5',
            ),
            array(
                'name' 	=> __( 'UBC quinary blue', 'ubc_collab' ),
                'slug' 	=> 'ubc-quinary-blue',
                'color' => '#6ec4e8',
            ),
            array(
                'name' 	=> __( 'UBC senary blue', 'ubc_collab' ),
                'slug' 	=> 'ubc-senary-blue',
                'color' => '#97d4e9',
            ),




            array(
                'name' 	=> __( 'UBC Grey', 'ubc_collab' ),
                'slug' 	=> 'ubc-grey',
                'color' => '#2f5d7c',
            ),
            array(
                'name' 	=> __( 'UBC secondary grey', 'ubc_collab' ),
                'slug' 	=> 'ubc-secondary-grey',
                'color' => '#5e869f',
            ),
            array(
                'name' 	=> __( 'UBC tertiary grey', 'ubc_collab' ),
                'slug' 	=> 'ubc-tertiary-grey',
                'color' => '#98b2c3',
            ),
            array(
                'name' 	=> __( 'UBC quaternary grey', 'ubc_collab' ),
                'slug' 	=> 'ubc-quaternary-grey',
                'color' => '#c3d0db',
            ),
            

    
            array(
                'name' 	=> __( 'ISP Bistre', 'ubc_collab' ),
                'slug' 	=> 'isp-bistre',
                'color' => '#3f261a',
            ),
            array(
                'name' 	=> __( 'ISP Camelian', 'ubc_collab' ),
                'slug' 	=> 'isp-camelian',
                'color' => '#b20e18',
            ),
            array(
                'name' 	=> __( 'ISP Calcite', 'ubc_collab' ),
                'slug' 	=> 'isp-calcite',
                'color' => '#b55a18',
            ),
            array(
                'name' 	=> __( 'ISP Sand 1', 'ubc_collab' ),
                'slug' 	=> 'isp-sand_1',
                'color' => '#f0e6d9',
            ),
            array(
                'name' 	=> __( 'ISP Sand 2', 'ubc_collab' ),
                'slug' 	=> 'isp-sand_2',
                'color' => '#f8f4ee',
            ),
            array(
                'name' 	=> __( 'ISP Sand 3', 'ubc_collab' ),
                'slug' 	=> 'isp-sand_3',
                'color' => '#fbf9f6',
            ),
        );

            
        /* Add UBC palette colors for block editor */
        add_theme_support( 'editor-color-palette', $theme_color_palette );

    }

    static function openHeaderWrap() {
        echo '<div class="isp-header-wrap">';
    }

    static function closeHeaderWrap() {
        echo '</div>';
    }  
    static function openFooterWrap() {
        echo '<div class="isp-footer-wrap">';
    }

    static function closeFooterWrap() {
        echo '</div>';
    }
}
UBC_ISP_ThemeFunctions::init();