<?php

/**
 * Title: Banner/Hero Layout with CTA Box
 * Slug: fotawp/banner-layout-with-cta-box
 * Categories: fotawp
 */
$fotawp_url = trailingslashit(get_template_directory_uri());
$fotawp_icon_images = array(
    $fotawp_url . 'assets/images/icon_easy_customize.svg',
    $fotawp_url . 'assets/images/icon_mobile_first.svg',
    $fotawp_url . 'assets/images/icon_pagebuilder.svg'
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"9rem","bottom":"var:preset|spacing|60","right":"var:preset|spacing|70","left":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|40"},"color":{"background":"#eff0f3"}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-background" style="background-color:#eff0f3;padding-top:9rem;padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--80)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained","contentSize":"660px"}} -->
    <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":1.2}},"textColor":"heading-color","fontSize":"xxx-large"} -->
        <h2 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-xxx-large-font-size" style="font-style:normal;font-weight:500;line-height:1.2"><?php echo esc_html('Ultimate Partner for Your Business Growth', 'fotawp') ?></h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":1.7}},"textColor":"foreground","fontSize":"small"} -->
        <p class="has-text-align-center has-foreground-color has-text-color has-small-font-size" style="line-height:1.7"><?php echo esc_html('The passage experienced a surge in popularity during the 1960s when Letraset used.', 'fotawp') ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
        <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:button {"backgroundColor":"primary","textColor":"foregound-alt","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"1.2rem","bottom":"1.2rem"}}},"className":"is-style-button-hover-secondary-bgcolor"} -->
            <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-foregound-alt-color has-primary-background-color has-text-color has-background wp-element-button" style="padding-top:1.2rem;padding-right:var(--wp--preset--spacing--50);padding-bottom:1.2rem;padding-left:var(--wp--preset--spacing--50)"><?php echo esc_html('Schedule an Appointment', 'fotawp') ?></a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
        <div class="wp-block-columns"><!-- wp:column {"style":{"border":{"width":"0px","style":"none"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"is-style-default"} -->
            <div class="wp-block-column is-style-default" style="border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|50","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50"}},"border":{"radius":"4px","width":"1px"}},"borderColor":"border-color","backgroundColor":"background","className":"is-style-fotawp-boxshadow","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-fotawp-boxshadow has-border-color has-border-color-border-color has-background-background-color has-background" style="border-width:1px;border-radius:4px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)"><!-- wp:image {"align":"center","id":974,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"unset"}},"className":"fotawp-duotone-primary"} -->
                    <figure class="wp-block-image aligncenter size-full fotawp-duotone-primary"><img src="<?php echo esc_url($fotawp_icon_images[0]) ?>" alt="" class="wp-image-974" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:heading {"textAlign":"center","level":4,"textColor":"heading-color","fontSize":"large"} -->
                    <h4 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-large-font-size"><?php echo esc_html('Easy Customizable', 'fotawp') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"18px"}}} -->
                    <p class="has-text-align-center" style="font-size:18px"><?php echo esc_html('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.', 'fotawp') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                    <div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","backgroundColor":"background","textColor":"foreground","style":{"typography":{"fontSize":"18px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"is-style-button-hover-secondary-color"} -->
                        <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-color" style="font-size:18px"><a class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background has-text-align-center wp-element-button" href="#" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php echo esc_html('Learn More', 'fotawp') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"style":{"border":{"width":"0px","style":"none"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"is-style-default"} -->
            <div class="wp-block-column is-style-default" style="border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|50","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50"}},"border":{"radius":"4px","width":"1px"}},"borderColor":"border-color","backgroundColor":"background","className":"is-style-fotawp-boxshadow","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-fotawp-boxshadow has-border-color has-border-color-border-color has-background-background-color has-background" style="border-width:1px;border-radius:4px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)"><!-- wp:image {"align":"center","id":974,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"unset"}},"className":"fotawp-duotone-primary"} -->
                    <figure class="wp-block-image aligncenter size-full fotawp-duotone-primary"><img src="<?php echo esc_url($fotawp_icon_images[1]) ?>" alt="" class="wp-image-974" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:heading {"textAlign":"center","level":4,"textColor":"heading-color","fontSize":"large"} -->
                    <h4 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-large-font-size"><?php echo esc_html('Responsive Layout', 'fotawp') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"18px"}}} -->
                    <p class="has-text-align-center" style="font-size:18px"><?php echo esc_html('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.', 'fotawp') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                    <div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","backgroundColor":"background","textColor":"foreground","style":{"typography":{"fontSize":"18px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"is-style-button-hover-secondary-color"} -->
                        <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-color" style="font-size:18px"><a class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background has-text-align-center wp-element-button" href="#" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php echo esc_html('Learn More', 'fotawp') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"style":{"border":{"width":"0px","style":"none"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"is-style-default"} -->
            <div class="wp-block-column is-style-default" style="border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|50","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50"}},"border":{"radius":"4px","width":"1px"}},"borderColor":"border-color","backgroundColor":"background","className":"is-style-fotawp-boxshadow","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-fotawp-boxshadow has-border-color has-border-color-border-color has-background-background-color has-background" style="border-width:1px;border-radius:4px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)"><!-- wp:image {"align":"center","id":164,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"unset"}},"className":"fotawp-duotone-primary"} -->
                    <figure class="wp-block-image aligncenter size-full fotawp-duotone-primary"><img src="<?php echo esc_url($fotawp_icon_images[2]) ?>" alt="" class="wp-image-164" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:heading {"textAlign":"center","level":4,"textColor":"heading-color","fontSize":"large"} -->
                    <h4 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-large-font-size"><?php echo esc_html('Pagebuilder', 'fotawp') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"18px"}}} -->
                    <p class="has-text-align-center" style="font-size:18px"><?php echo esc_html('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.', 'fotawp') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                    <div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","backgroundColor":"background","textColor":"foreground","style":{"typography":{"fontSize":"18px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"is-style-button-hover-secondary-color"} -->
                        <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-color" style="font-size:18px"><a class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background has-text-align-center wp-element-button" href="#" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php echo esc_html('Learn More', 'fotawp') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"style":{"border":{"width":"0px","style":"none"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"is-style-default"} -->
            <div class="wp-block-column is-style-default" style="border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|50","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50"}},"border":{"radius":"4px","width":"1px"}},"borderColor":"border-color","backgroundColor":"background","className":"is-style-fotawp-boxshadow","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-fotawp-boxshadow has-border-color has-border-color-border-color has-background-background-color has-background" style="border-width:1px;border-radius:4px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)"><!-- wp:image {"align":"center","id":974,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"unset"}},"className":"fotawp-duotone-primary"} -->
                    <figure class="wp-block-image aligncenter size-full fotawp-duotone-primary"><img src="<?php echo esc_url($fotawp_icon_images[1]) ?>" alt="" class="wp-image-974" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:heading {"textAlign":"center","level":4,"textColor":"heading-color","fontSize":"large"} -->
                    <h4 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-large-font-size"><?php echo esc_html('SEO Optimized', 'fotawp') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"18px"}}} -->
                    <p class="has-text-align-center" style="font-size:18px"><?php echo esc_html('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.', 'fotawp') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                    <div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","backgroundColor":"background","textColor":"foreground","style":{"typography":{"fontSize":"18px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"is-style-button-hover-secondary-color"} -->
                        <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-color" style="font-size:18px"><a class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background has-text-align-center wp-element-button" href="#" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php echo esc_html('Learn More', 'fotawp') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->