<?php
/**
 * Template Name: Front Page Template

 */

  $currentLanguage  = pll_current_language();

    if ( $currentLanguage == "fi" ) {

        get_template_part('includes/section', 'fi');
    }

    else {     
        get_template_part('includes/section', 'en'); 
    }

?>

