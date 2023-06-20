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
