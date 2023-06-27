<?php

namespace UBC\Collab\Child;

class GutenburgBlocks
{
    public function __construct()
    {
        $this->themeHooks();
    }

    private function themeHooks()
    {
        add_action( 'init', [$this, 'blockStyles']);
        add_action( 'init', [$this, 'patternCategories']);
    }

    function patternCategories() {
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
    }

    function blockStyles()
    {
        $this->ImageBlockStyles();
        $this->SeparatorBlockStyles();
        $this->HeadingBlockStyles();
        $this->ButtonBlockStyles();
    }

    function ImageBlockStyles() {
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
    function SeparatorBlockStyles() {
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
    function HeadingBlockStyles() {
        register_block_style(
            'core/heading',
            array(
                'name'         => 'sub-heading',
                'label'        => __( 'Sub Heading', 'ubc_collab' ),
                'is_default'   => false,
            )
        );
    }
    function ButtonBlockStyles() {
        register_block_style(
            'core/button',
            array(
                'name'         => 'tertiary',
                'label'        => __( 'Tertiary', 'ubc_collab' ),
                'is_default'   => false,
            )
        );
    }

    
}
