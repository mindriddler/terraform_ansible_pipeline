<?php

/**
 * Title: Featured Banner Block
 * Slug: fotablog/featured-banner-block
 * Categories: fotablog-patterns
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url(get_stylesheet_directory_uri()) ?>/assets/images/pattern_banner.jpg","id":1241,"dimRatio":40,"overlayColor":"heading-color","minHeight":640,"isDark":false} -->
<div class="wp-block-cover is-light" style="min-height:640px"><span aria-hidden="true" class="wp-block-cover__background has-heading-color-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1241" alt="" src="<?php echo esc_url(get_stylesheet_directory_uri())  ?>/assets/images/pattern_banner.jpg" data-object-fit="cover" />
    <div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","contentSize":"760px"}} -->
        <div class="wp-block-group"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"300"}},"textColor":"foregound-alt","fontSize":"x-small"} -->
            <p class="has-text-align-center has-foregound-alt-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:300;text-transform:uppercase">Technology</p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"textAlign":"center","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"textColor":"foregound-alt","fontSize":"xx-large"} -->
            <h2 class="wp-block-heading has-text-align-center has-foregound-alt-color has-text-color has-xx-large-font-size" style="margin-bottom:var(--wp--preset--spacing--60);font-style:normal;font-weight:700;text-transform:uppercase">A designer’s Guide to psychology</h2>
            <!-- /wp:heading -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","textColor":"background","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"0px"},"typography":{"textTransform":"uppercase"}},"className":"is-style-button-hover-primary-color fotablog-button-outline","fontSize":"x-small"} -->
                <div class="wp-block-button has-custom-font-size is-style-button-hover-primary-color fotablog-button-outline has-x-small-font-size" style="text-transform:uppercase"><a class="wp-block-button__link has-background-color has-transparent-background-color has-text-color has-background wp-element-button" style="border-radius:0px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)">Read More</a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:group -->
    </div>
</div>
<!-- /wp:cover -->