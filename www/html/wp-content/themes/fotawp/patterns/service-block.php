<?php

/**
 * Title: Services Block
 * Slug: fotawp/services-block
 * Categories: fotawp
 */
$fotawp_url = trailingslashit(get_template_directory_uri());
$fotawp_images = array(
    $fotawp_url . 'assets/images/pattern_thumb.png',
);
?>
<!-- wp:group {"style":{"color":{"background":"#181717"},"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"7rem","bottom":"7rem"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-background" style="background-color:#181717;padding-top:7rem;padding-right:var(--wp--preset--spacing--50);padding-bottom:7rem;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"750px"}} -->
    <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"foregound-alt"} -->
        <h1 class="wp-block-heading has-text-align-center has-foregound-alt-color has-text-color" style="font-style:normal;font-weight:500"><?php echo esc_html('Services Block', 'fotawp') ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"18px","lineHeight":1.9}},"textColor":"tertiary-light"} -->
        <p class="has-text-align-center has-tertiary-light-color has-text-color" style="font-size:18px;line-height:1.9"><?php echo esc_html('The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn\'t distract from the layout.', 'fotawp') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:spacer {"height":"20px"} -->
    <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"3.5rem","left":"3.5rem"}}}} -->
    <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":160,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"10px"}}} -->
            <figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url($fotawp_images[0]) ?>" alt="" class="wp-image-160" style="border-radius:10px" /></figure>
            <!-- /wp:image -->

            <!-- wp:spacer {"height":"1px"} -->
            <div style="height:1px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->

            <!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"28px","fontStyle":"normal","fontWeight":"500"}},"textColor":"background"} -->
            <h3 class="wp-block-heading has-text-align-center has-background-color has-text-color" style="font-size:28px;font-style:normal;font-weight:500"><?php echo esc_html('Mobile Application', 'fotawp') ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center","style":{"color":{"text":"#d7d7d7"}},"fontSize":"small"} -->
            <p class="has-text-align-center has-text-color has-small-font-size" style="color:#d7d7d7"><?php echo esc_html('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 'fotawp') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
            <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:button {"backgroundColor":"foregound-alt","textColor":"black","style":{"typography":{"textDecoration":"none"}},"className":"is-style-button-hover-primary-bgcolor"} -->
                <div class="wp-block-button is-style-button-hover-primary-bgcolor" style="text-decoration:none"><a class="wp-block-button__link has-black-color has-foregound-alt-background-color has-text-color has-background wp-element-button"><?php echo esc_html('Read More', 'fotawp') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":120,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"10px"}}} -->
            <figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url($fotawp_images[0]) ?>" alt="" class="wp-image-120" style="border-radius:10px" /></figure>
            <!-- /wp:image -->

            <!-- wp:spacer {"height":"1px"} -->
            <div style="height:1px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->

            <!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"28px","fontStyle":"normal","fontWeight":"500"}},"textColor":"background"} -->
            <h3 class="wp-block-heading has-text-align-center has-background-color has-text-color" style="font-size:28px;font-style:normal;font-weight:500"><?php echo esc_html('StartUp Ideas', 'fotawp') ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center","style":{"color":{"text":"#d7d7d7"}},"fontSize":"small"} -->
            <p class="has-text-align-center has-text-color has-small-font-size" style="color:#d7d7d7"><?php echo esc_html('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 'fotawp') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
            <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:button {"backgroundColor":"foregound-alt","textColor":"black","style":{"typography":{"textDecoration":"none"}},"className":"is-style-button-hover-primary-bgcolor"} -->
                <div class="wp-block-button is-style-button-hover-primary-bgcolor" style="text-decoration:none"><a class="wp-block-button__link has-black-color has-foregound-alt-background-color has-text-color has-background wp-element-button"><?php echo esc_html('Read More', 'fotawp') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":120,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"10px"}}} -->
            <figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url($fotawp_images[0]) ?>" alt="" class="wp-image-120" style="border-radius:10px" /></figure>
            <!-- /wp:image -->

            <!-- wp:spacer {"height":"1px"} -->
            <div style="height:1px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->

            <!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"28px","fontStyle":"normal","fontWeight":"500"}},"textColor":"background"} -->
            <h3 class="wp-block-heading has-text-align-center has-background-color has-text-color" style="font-size:28px;font-style:normal;font-weight:500"><?php echo esc_html('Business Strategy', 'fotawp') ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center","style":{"color":{"text":"#d7d7d7"}},"fontSize":"small"} -->
            <p class="has-text-align-center has-text-color has-small-font-size" style="color:#d7d7d7"><?php echo esc_html('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 'fotawp') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
            <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:button {"backgroundColor":"foregound-alt","textColor":"black","style":{"typography":{"textDecoration":"none"}},"className":"is-style-button-hover-primary-bgcolor"} -->
                <div class="wp-block-button is-style-button-hover-primary-bgcolor" style="text-decoration:none"><a class="wp-block-button__link has-black-color has-foregound-alt-background-color has-text-color has-background wp-element-button"><?php echo esc_html('Read More', 'fotawp') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->