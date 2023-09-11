<?php

/**
 * Title: CTA section Dark
 * Slug: fotawp/cta-dark
 * Categories: fotawp
 */
?>
<!-- wp:group {"style":{"color":{"background":"#141313"},"spacing":{"padding":{"top":"8rem","right":"var:preset|spacing|50","left":"var:preset|spacing|50","bottom":"8rem"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"860px"}} -->
<div class="wp-block-group has-background" style="background-color:#141313;padding-top:8rem;padding-right:var(--wp--preset--spacing--50);padding-bottom:8rem;padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"textAlign":"center","level":5,"textColor":"background-alt"} -->
    <h5 class="wp-block-heading has-text-align-center has-background-alt-color has-text-color"><?php echo esc_html('Call to Action', 'fotawp') ?></h5>
    <!-- /wp:heading -->

    <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"lineHeight":1.4,"fontStyle":"normal","fontWeight":"500","fontSize":"64px"}},"textColor":"foregound-alt"} -->
    <h1 class="wp-block-heading has-text-align-center has-foregound-alt-color has-text-color" style="font-size:64px;font-style:normal;font-weight:500;line-height:1.4"><?php echo esc_html('Need help to setup and plan business?', 'fotawp') ?></h1>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","style":{"color":{"text":"#d6d6d6"},"typography":{"fontSize":"18px","lineHeight":2}}} -->
    <p class="has-text-align-center has-text-color" style="color:#d6d6d6;font-size:18px;line-height:2"><?php echo esc_html('The placeholder text, beginning with the line Lorem ipsum dolor sit amet, consectetur adipiscing elit”, looks like Latin because in its youth, centuries ago, it was Latin.', 'fotawp') ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"typography":{"textDecoration":"none"},"spacing":{"margin":{"top":"var:preset|spacing|70"}}}} -->
    <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--70);text-decoration:none"><!-- wp:button {"backgroundColor":"background","textColor":"black","style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"2rem","right":"2rem"}}},"className":"is-style-button-hover-secondary-bgcolor"} -->
        <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-black-color has-background-background-color has-text-color has-background wp-element-button" style="padding-top:1.5rem;padding-right:2rem;padding-bottom:1.5rem;padding-left:2rem"><?php echo esc_html('Schedule an Appointment', 'fotawp') ?></a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
</div>
<!-- /wp:group -->