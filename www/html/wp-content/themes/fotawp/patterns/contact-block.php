<?php

/**
 * Title: Contact Us Block with Map
 * Slug: fotawp/contact-block
 * Categories: fotawp
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|80","left":"var:preset|spacing|80"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
                <h2 class="wp-block-heading" style="font-style:normal;font-weight:500"><?php echo esc_html('Keep in Touch', 'fotawp') ?></h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"lineHeight":1.7}}} -->
                <p style="line-height:1.7"><?php echo esc_html('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.', 'fotawp') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:list {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"is-style-list-style-no-bullet"} -->
                <ul class="is-style-list-style-no-bullet" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:list-item {"style":{"typography":{"fontSize":"18px"}}} -->
                    <li style="font-size:18px"><a href="#"><?php echo esc_html('2824 Fleming Street, Montgomery', 'fotawp') ?></a></li>
                    <!-- /wp:list-item -->
                </ul>
                <!-- /wp:list -->

                <!-- wp:list {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"is-style-list-style-no-bullet"} -->
                <ul class="is-style-list-style-no-bullet" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:list-item {"style":{"typography":{"fontSize":"18px"}}} -->
                    <li style="font-size:18px"><a href="#"><?php echo esc_html('+1 (012) 345-6789', 'fotawp') ?></a></li>
                    <!-- /wp:list-item -->
                </ul>
                <!-- /wp:list -->

                <!-- wp:list {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"is-style-list-style-no-bullet"} -->
                <ul class="is-style-list-style-no-bullet" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:list-item {"style":{"typography":{"fontSize":"18px"}}} -->
                    <li style="font-size:18px"><a href="#"><?php echo esc_html('email@yoursite.com', 'fotawp') ?></a></li>
                    <!-- /wp:list-item -->
                </ul>
                <!-- /wp:list -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:html -->
            <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d87875.42875656532!2d-86.37198421745961!3d32.388118773485566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x888e8194b0d481f9%3A0x8e1b511d354285ff!2sMontgomery%2C%20AL%2C%20USA!5e0!3m2!1sen!2snp!4v1689317919328!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
            <!-- /wp:html -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->