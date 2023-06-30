<?php

class UBC_ISP_GravityForms
{
    public static function init()
    {
        self::themeHooks();
    }

    public static function themeHooks() {
        add_filter( 'gform_submit_button', ['UBC_ISP_GravityForms', 'formSubmitButton'], 10, 2 );
    }

    static function formSubmitButton( $button, $form ) {
        
        // Get Button Element
        $dom = new DOMDocument();
        $dom->loadHTML( '<?xml encoding="utf-8" ?>' . $button );
        $input = $dom->getElementsByTagName( 'input' )->item(0);


        //  Add button Classes
        $classes = $input->getAttribute( 'class' );
        $classes .= " button-standard";
        $input->setAttribute( 'class', $classes );


        // Convert to a button element
        $new_button = $dom->createElement( 'button' );
        $new_button->appendChild( $dom->createTextNode( $input->getAttribute( 'value' ) ) );
        $input->removeAttribute( 'value' );
        foreach( $input->attributes as $attribute ) {
            $new_button->setAttribute( $attribute->name, $attribute->value );
        }
        $input->parentNode->replaceChild( $new_button, $input );
     
        // return the new button
        return $dom->saveHtml( $new_button );
    }
    
}
UBC_ISP_GravityForms::init();