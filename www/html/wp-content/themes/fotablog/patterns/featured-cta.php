<?php

/**
 * Title: Featured CTA Block
 * Slug: fotablog/featured-cta
 * Categories: fotablog-patterns
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","bottom":"0","left":"0","top":"0.8rem"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="padding-top:0.8rem;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"style":{"spacing":{"padding":{"right":"0","bottom":"var:preset|spacing|70"},"blockGap":{"top":"2.5rem","left":"2.5rem"}},"border":{"bottom":{"width":"0px","style":"none"}}}} -->
    <div class="wp-block-columns" style="border-bottom-style:none;border-bottom-width:0px;padding-right:0;padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url(get_stylesheet_directory_uri()) ?>/assets/images/pattern_technology.jpg","id":1242,"dimRatio":50,"minHeight":232,"isDark":false,"className":"fotablog-cta-box"} -->
            <div class="wp-block-cover is-light fotablog-cta-box" style="min-height:232px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1242" alt="" src="<?php echo esc_url(get_stylesheet_directory_uri()) ?>/assets/images/pattern_technology.jpg" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"}},"textColor":"background","fontSize":"small"} -->
                    <h4 class="wp-block-heading has-text-align-center has-background-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:600;text-transform:uppercase"><a href="#">Technology</a></h4>
                    <!-- /wp:heading -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url(get_stylesheet_directory_uri()) ?>/assets/images/pattern_lifestyle.jpg","id":1243,"dimRatio":50,"minHeight":232,"className":"fotablog-cta-box"} -->
            <div class="wp-block-cover fotablog-cta-box" style="min-height:232px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1243" alt="" src="<?php echo esc_url(get_stylesheet_directory_uri()) ?>/assets/images/pattern_lifestyle.jpg" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"}},"textColor":"background","fontSize":"small"} -->
                    <h4 class="wp-block-heading has-text-align-center has-background-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:500;text-transform:uppercase"><a href="#">Life Style</a></h4>
                    <!-- /wp:heading -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url(get_stylesheet_directory_uri()) ?>/assets/images/pattern_travel.jpg","id":1244,"dimRatio":50,"minHeight":232,"isDark":false,"className":"fotablog-cta-box"} -->
            <div class="wp-block-cover is-light fotablog-cta-box" style="min-height:232px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1244" alt="" src="<?php echo esc_url(get_stylesheet_directory_uri()) ?>/assets/images/pattern_travel.jpg" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"uppercase"}},"textColor":"background","fontSize":"small"} -->
                    <h4 class="wp-block-heading has-text-align-center has-background-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:500;text-transform:uppercase"><a href="#">Travelling</a></h4>
                    <!-- /wp:heading -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->