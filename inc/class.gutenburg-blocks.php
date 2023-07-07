<?php

class UBC_ISP_GutenburgBlocks
{
    public static function init()
    {
        self::themeHooks();
    }

    public static function themeHooks()
    {
        add_action( 'init', ['UBC_ISP_GutenburgBlocks', 'blockStyles']);
        add_action( 'init', ['UBC_ISP_GutenburgBlocks', 'patternCategories']);
    }

    static function patternCategories() {
        register_block_pattern_category(
            'ubc',
            array( 'label' => __( 'UBC ISP', 'ubc_collab' ) )
        );
        register_block_pattern_category(
            'ubc-headers',
            array( 'label' => __( 'UBC ISP - Headers', 'ubc_collab' ) )
        );
        register_block_pattern_category(
            'ubc-content',
            array( 'label' => __( 'UBC ISP - Content', 'ubc_collab' ) )
        );
        register_block_pattern_category(
            'ubc-callouts',
            array( 'label' => __( 'UBC ISP - Callouts', 'ubc_collab' ) )
        );
        register_block_pattern_category(
            'ubc-buckets',
            array( 'label' => __( 'UBC ISP - Buckets', 'ubc_collab' ) )
        );
        register_block_pattern_category(
            'ubc-layouts',
            array( 'label' => __( 'UBC ISP - Layouts', 'ubc_collab' ) )
        );
        register_block_pattern_category(
            'ubc-card-layouts',
            array( 'label' => __( 'UBC ISP - Card Layouts', 'ubc_collab' ) )
        );
        register_block_pattern_category(
            'ubc-cta-layouts',
            array( 'label' => __( 'UBC ISP - CTA Layouts', 'ubc_collab' ) )
        );
        register_block_pattern_category(
            'ubc-photo-grid',
            array( 'label' => __( 'UBC ISP - Photo Grid', 'ubc_collab' ) )
        );
        register_block_pattern_category(
            'ubc-cards',
            array( 'label' => __( 'UBC ISP - Cards', 'ubc_collab' ) )
        );
        register_block_pattern_category(
            'ubc-ctas',
            array( 'label' => __( 'UBC ISP - CTAs', 'ubc_collab' ) )
        );
        register_block_pattern_category(
            'ubc-timeline',
            array( 'label' => __( 'UBC ISP - Timeline', 'ubc_collab' ) )
        );
        register_block_pattern_category(
            'ubc-goals',
            array( 'label' => __( 'UBC ISP - Goals', 'ubc_collab' ) )
        );
    }

    static function blockStyles()
    {
        self::ImageBlockStyles();
        self::SeparatorBlockStyles();
        self::HeadingBlockStyles();
        self::ButtonBlockStyles();
        self::GroupBlockStyles();
        self::SpacerBlockStyles();
    }

    static function ImageBlockStyles() {
        register_block_style(
            'core/image',
            array(
                'name'         => 'single-radius-right',
                'label'        => __( 'Single Rounded', 'ubc_collab' ),
                'is_default'   => false,
                'inline_style' => '.is-style-single-radius-right { border-radius: 16px 0 0 1000px; }'
            )
        );
    }
    static function SeparatorBlockStyles() {
        register_block_style(
            'core/separator',
            array(
                'name'         => 'squiggle-brown',
                'label'        => __( 'Squiggle Brown', 'ubc_collab' ),
                'is_default'   => false,
                // 'inline_style' => '.is-style-single-radius-right { border-radius: 16px 0 0 1000px; }'
            ),
        );
        register_block_style(
            'core/separator',
            array(
                'name'         => 'squiggle-brown--small',
                'label'        => __( 'Small Squiggle Brown', 'ubc_collab' ),
                'is_default'   => false,
                // 'inline_style' => '.is-style-single-radius-right { border-radius: 16px 0 0 1000px; }'
            ),
        );

        register_block_style(
            'core/separator',
            array(
                'name'         => 'squiggle-grey',
                'label'        => __( 'Squiggle Grey', 'ubc_collab' ),
                'is_default'   => false,
                // 'inline_style' => '.is-style-single-radius-right { border-radius: 16px 0 0 1000px; }'
            )
        );

    }
    static function HeadingBlockStyles() {
        register_block_style(
            'core/heading',
            array(
                'name'         => 'sub-heading',
                'label'        => __( 'Sub Heading', 'ubc_collab' ),
                'is_default'   => false,
            )
        );
    }
    static function GroupBlockStyles() {
        register_block_style(
            'core/group',
            array(
                'name'         => 'square',
                'label'        => __( 'Square', 'ubc_collab' ),
                'is_default'   => true,
            )
        );
        register_block_style(
            'core/group',
            array(
                'name'         => 'rounded',
                'label'        => __( 'Rounded', 'ubc_collab' ),
                'is_default'   => false,
            )
        );
        register_block_style(
            'core/group',
            array(
                'name'         => 'rounded-sm',
                'label'        => __( 'Rounded Small', 'ubc_collab' ),
                'is_default'   => false,
            )
        );
    }
    static function ButtonBlockStyles() {
        register_block_style(
            'core/button',
            array(
                'name'         => 'tertiary',
                'label'        => __( 'Tertiary', 'ubc_collab' ),
                'is_default'   => false,
            )
        );
    }
    static function SpacerBlockStyles() {
        register_block_style(
            'core/spacer',
            array(
                'name'         => 'pull-up-background',
                'label'        => __( 'Pull Up Background', 'ubc_collab' ),
                'is_default'   => false,
            ),
        );
        register_block_style(
            'core/spacer',
            array(
                'name'         => 'pull-up-next',
                'label'        => __( 'Pull Up Next Element', 'ubc_collab' ),
                'is_default'   => false,
            )
        );
    }

    
}
UBC_ISP_GutenburgBlocks::init();