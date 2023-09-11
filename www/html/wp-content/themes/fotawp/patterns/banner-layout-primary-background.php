<?php

/**
 * Title: Banner/Hero Layout with Primary Background
 * Slug: fotawp/banner-layout-primary-background
 * Categories: fotawp
 */
$fotawp_url = trailingslashit(get_template_directory_uri());
$fotawp_images = array(
    $fotawp_url . 'assets/images/pattern_img_4.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"8rem","bottom":"var:preset|spacing|80","right":"var:preset|spacing|70","left":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|40"}},"gradient":"first-primary-gradient","layout":{"type":"constrained","contentSize":"1080px"}} -->
<div class="wp-block-group has-first-primary-gradient-gradient-background has-background" style="padding-top:8rem;padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained","contentSize":"660px"}} -->
    <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--80)"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":1.2}},"textColor":"foregound-alt","fontSize":"xxx-large"} -->
        <h2 class="wp-block-heading has-text-align-center has-foregound-alt-color has-text-color has-xxx-large-font-size" style="font-style:normal;font-weight:500;line-height:1.2"><?php echo esc_html('Meet the Tech Partner for Your Business Growth', 'fotwap') ?></h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"color":{"text":"#d7caea"},"typography":{"lineHeight":1.7}}} -->
        <p class="has-text-align-center has-text-color" style="color:#d7caea;line-height:1.7"><?php echo esc_html('The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software.', 'fotawp') ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
        <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:button {"backgroundColor":"secondary","textColor":"heading-color","style":{"spacing":{"padding":{"left":"2rem","right":"2rem","top":"1.2rem","bottom":"1.2rem"}}},"className":"is-style-button-hover-white-bgcolor"} -->
            <div class="wp-block-button is-style-button-hover-white-bgcolor"><a class="wp-block-button__link has-heading-color-color has-secondary-background-color has-text-color has-background wp-element-button" style="padding-top:1.2rem;padding-right:2rem;padding-bottom:1.2rem;padding-left:2rem"><?php echo esc_html('Schedule an Appointment', 'fotawp') ?></a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->

    <!-- wp:image {"align":"center","id":195,"width":1024,"height":682,"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"10px"}}} -->
    <figure class="wp-block-image aligncenter size-large is-resized has-custom-border"><img src="<?php echo esc_url($fotawp_images[0]) ?>" alt="" class="wp-image-195" style="border-radius:10px" width="1024" height="682" /></figure>
    <!-- /wp:image -->
</div>
<!-- /wp:group -->