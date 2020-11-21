<?php
/**
 * Template Name: Front Page Template

 */

?>

<?php 
    if ( function_exists( 'pll_current_language' ) ) {
        $currentLanguage  = pll_current_language();

        if ( $currentLanguage == "fi" ) {
                    
            get_template_part('includes/section', 'fi');
        }
                    
        else {     
            get_template_part('includes/section', 'en'); 
            }       
        }
?>