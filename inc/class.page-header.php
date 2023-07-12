<?php

class UBC_ISP_PageHeader
{
    public static function init()
    {   
        add_action('template_redirect', [__CLASS__, 'pageHooks'], 10);
    }

    public static function pageHooks()
    {
        add_action('wp-hybrid-clf_before_container', [__CLASS__, 'thirdLevelMenu'], 7);
        add_filter('nav_menu_css_class', [__CLASS__, 'menu_depth_class'], 10, 4);


        remove_action('wp-hybrid-clf_before_container', ['UBC_Collab_Navigation', 'breadcrumb'], 8);
        add_action('wp-hybrid-clf_before_container', [__CLASS__, 'pageHeader'], 9);


		add_filter( 'breadcrumb_trail_args',  [__CLASS__,  'breadcrumb_trail_args' ] );
    }

    public static function headerSize()
    {
        switch (true) {
            case is_front_page():
                return 'hidden';
            case is_search():
                    return 'hidden';
            case is_page_template('page-level-1.php'):
                return 'full';
            case is_page_template('page-level-2.php'):
                return 'hidden';
            case is_page_template('page-level-3.php'):
                return 'small';
        }
        return 'full';
    }

    public static function pageHeader()
    {
        $size = self::headerSize();

        if (!$size || $size == "hidden")
            return;
        ?>
        
        <div class="isp-breadcrumbs isp-breadcrumbs--<?= ($size == "full" ? 'full' : 'small' ) ?>">
            <div class="isp-breadcrumbs--row">
                <?php if( $size == 'full' ) {
                    self::headerImage();
                } ?>
                <div class="isp-breadcrumbs--container">
                    <?php 
                        UBC_Collab_Navigation::breadcrumb(); 
                        self::sharePage();
                    ?>
                </div>
            </div>
        </div>
        
        <?php
    }

    public static function headerImage()
    {
        if ( !is_front_page() && !$size !== 'full' && has_post_thumbnail()) {
            echo sprintf(
                '<div class="isp-header__featured-img"><img src="%s">%s</div>',
                get_the_post_thumbnail_url(),
                '<div class="isp-header__featured-img__squiggle"></div>'
            );
        }
    }

    public static function sharePage()
    {
        if (!is_front_page()) {
            echo '<button class="isp-sharepage isp-desktop-only">
            <span class="isp-sharepage--text">Share</span>
            <span class="isp-sharepage--icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19 8.29412C18.4847 8.52059 17.9293 8.66941 17.3537 8.74059C17.9426 8.39765 18.3977 7.85412 18.6119 7.20059C18.0564 7.52412 17.4407 7.75059 16.7916 7.88C16.2629 7.32353 15.5201 7 14.6769 7C13.1042 7 11.8193 8.24235 11.8193 9.77588C11.8193 9.99588 11.8461 10.2094 11.8929 10.41C9.51052 10.2935 7.3891 9.18706 5.97706 7.51118C5.72945 7.91882 5.58891 8.39765 5.58891 8.90235C5.58891 9.86647 6.09082 10.7206 6.86711 11.2059C6.39197 11.2059 5.95029 11.0765 5.56214 10.8824V10.9018C5.56214 12.2476 6.55258 13.3735 7.86424 13.6259C7.44313 13.7373 7.00102 13.7528 6.57266 13.6712C6.75442 14.2228 7.1104 14.7054 7.59055 15.0513C8.0707 15.3972 8.65087 15.5889 9.24952 15.5994C8.23474 16.3762 6.97686 16.796 5.6826 16.79C5.45507 16.79 5.22753 16.7771 5 16.7512C6.27151 17.5406 7.78394 18 9.40344 18C14.6769 18 17.5746 13.7682 17.5746 10.0994C17.5746 9.97647 17.5746 9.86 17.5679 9.73706C18.13 9.34882 18.6119 8.85706 19 8.29412Z" fill="white"/>
                </svg>
            </span>
        </button>';
        }
    }



    public static function thirdLevelMenu() {
        wp_nav_menu( [ 
            'theme_location' => 'primary', 
            'container_class' => 'ubc-isp-nav__container', 
            'container_id'=> 'ubc-isp-nav__menu' , 
            'walker' => new Third_Tier_Walker_Nav_Menu(), 
            'menu_class' => 'ubc-isp-nav'
        ]);
    }

    // Add a class for menu depth to a nav menu
    public static function menu_depth_class($classes, $item, $args, $depth = 0) {
        $classes[] = 'menu-depth-' . $depth;
        return $classes;
    }


    public static function breadcrumb_trail_args($args){
        $args['show_home'] = false;
        return $args;
    }
}

UBC_ISP_PageHeader::init();
