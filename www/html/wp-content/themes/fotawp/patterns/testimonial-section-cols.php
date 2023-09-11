<?php

/**
 * Title: Testimonial Section 2 Columns
 * Slug: fotawp/testimonial-section-cols
 * Categories: fotawp,testimonials
 */
$fotawp_url = trailingslashit(get_template_directory_uri());
$fotawp_images = array(
    $fotawp_url . 'assets/images/fota_testimonial_1.png',
    $fotawp_url . 'assets/images/fota_testimonial_2.png',
    $fotawp_url . 'assets/images/fota_testimonial_3.png',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","right":"var:preset|spacing|70","bottom":"var:preset|spacing|80","left":"var:preset|spacing|70"}},"color":{"background":"#2a2a2d"}},"layout":{"type":"constrained","contentSize":"1080px"}} -->
<div class="wp-block-group has-background" style="background-color:#2a2a2d;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--70)"><!-- wp:heading {"textAlign":"center","level":1,"textColor":"foregound-alt"} -->
    <h1 class="wp-block-heading has-text-align-center has-foregound-alt-color has-text-color"><?php echo esc_html('Testimonials', 'fotawp') ?></h1>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","textColor":"foregound-alt"} -->
    <p class="has-text-align-center has-foregound-alt-color has-text-color"><?php echo esc_html('Lorem ipsum, or ipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.', 'fotawp') ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|70"},"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} -->
    <div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--70)"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|20"}},"backgroundColor":"foregound-alt","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-foregound-alt-background-color has-background" style="border-radius:10px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"style":{"typography":{"lineHeight":1.6}},"fontSize":"medium"} -->
                <p class="has-medium-font-size" style="line-height:1.6"><?php echo esc_html('Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate.', 'fotawp') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:spacer {"height":"22px"} -->
                <div style="height:22px" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->

                <!-- wp:image {"id":1822,"width":60,"height":60,"style":{"border":{"radius":"50px"}}} -->
                <figure class="wp-block-image is-resized has-custom-border"><img src="<?php echo esc_url($fotawp_images[0]) ?>" alt="" class="wp-image-1822" style="border-radius:50px" width="60" height="60" /></figure>
                <!-- /wp:image -->

                <!-- wp:spacer {"height":"10px"} -->
                <div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->

                <!-- wp:heading {"level":5} -->
                <h5 class="wp-block-heading"><?php echo esc_html('Mox M', 'fotawp') ?></h5>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><?php echo esc_html('Blogger / Lifestyle', 'fotawp') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|20"}},"backgroundColor":"foregound-alt","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-foregound-alt-background-color has-background" style="border-radius:10px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"style":{"typography":{"lineHeight":1.6}},"fontSize":"medium"} -->
                <p class="has-medium-font-size" style="line-height:1.6"><?php echo esc_html('Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate.', 'fotawp') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:spacer {"height":"22px"} -->
                <div style="height:22px" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->

                <!-- wp:image {"id":1822,"width":60,"height":60,"style":{"border":{"radius":"50px"}}} -->
                <figure class="wp-block-image is-resized has-custom-border"><img src="<?php echo esc_url($fotawp_images[1]) ?>" alt="" class="wp-image-1822" style="border-radius:50px" width="60" height="60" /></figure>
                <!-- /wp:image -->

                <!-- wp:spacer {"height":"10px"} -->
                <div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->

                <!-- wp:heading {"level":5} -->
                <h5 class="wp-block-heading"><?php echo esc_html('Mox M', 'fotawp') ?></h5>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><?php echo esc_html('Blogger / Lifestyle', 'fotawp') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"},"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} -->
    <div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|20"}},"backgroundColor":"foregound-alt","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-foregound-alt-background-color has-background" style="border-radius:10px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"style":{"typography":{"lineHeight":1.6}},"fontSize":"medium"} -->
                <p class="has-medium-font-size" style="line-height:1.6"><?php echo esc_html('Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate.', 'fotawp') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:spacer {"height":"22px"} -->
                <div style="height:22px" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->

                <!-- wp:image {"id":1822,"width":60,"height":60,"style":{"border":{"radius":"50px"}}} -->
                <figure class="wp-block-image is-resized has-custom-border"><img src="<?php echo esc_url($fotawp_images[2]) ?>" alt="" class="wp-image-1822" style="border-radius:50px" width="60" height="60" /></figure>
                <!-- /wp:image -->

                <!-- wp:spacer {"height":"10px"} -->
                <div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->

                <!-- wp:heading {"level":5} -->
                <h5 class="wp-block-heading"><?php echo esc_html('Mox M', 'fotawp') ?></h5>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><?php echo esc_html('Blogger / Lifestyle', 'fotawp') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|20"}},"backgroundColor":"foregound-alt","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-foregound-alt-background-color has-background" style="border-radius:10px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"style":{"typography":{"lineHeight":1.6}},"fontSize":"medium"} -->
                <p class="has-medium-font-size" style="line-height:1.6"><?php echo esc_html('Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate.', 'fotawp') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:spacer {"height":"22px"} -->
                <div style="height:22px" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->

                <!-- wp:image {"id":1822,"width":60,"height":60,"style":{"border":{"radius":"50px"}}} -->
                <figure class="wp-block-image is-resized has-custom-border"><img src="<?php echo esc_url($fotawp_images[0]) ?>" alt="" class="wp-image-1822" style="border-radius:50px" width="60" height="60" /></figure>
                <!-- /wp:image -->

                <!-- wp:spacer {"height":"10px"} -->
                <div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->

                <!-- wp:heading {"level":5} -->
                <h5 class="wp-block-heading"><?php echo esc_html('Mox M', 'fotawp') ?></h5>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><?php echo esc_html('Blogger / Lifestyle', 'fotawp') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->