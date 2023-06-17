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
}
