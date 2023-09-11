<?php

/**
 * Title: Team block dark
 * Slug: fotawp/team-block-dark
 * Categories: fotawp
 */
$fotawp_url = trailingslashit(get_template_directory_uri());
$fotawp_images = array(
    $fotawp_url . 'assets/images/fota_testimonial_1.png',
    $fotawp_url . 'assets/images/fota_testimonial_2.png',
    $fotawp_url . 'assets/images/fota_testimonial_3.png',
);
?>
<!-- wp:group {"style":{"color":{"background":"#141212"},"spacing":{"padding":{"top":"7rem","bottom":"7rem","right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-background" style="background-color:#141212;padding-top:7rem;padding-right:var(--wp--preset--spacing--50);padding-bottom:7rem;padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"textAlign":"center","level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"secondary"} -->
    <h6 class="wp-block-heading has-text-align-center has-secondary-color has-text-color" style="font-style:normal;font-weight:500"><?php echo esc_html('OUR TEAM', 'fotawp') ?></h6>
    <!-- /wp:heading -->

    <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"48px"}},"textColor":"foregound-alt"} -->
    <h1 class="wp-block-heading has-text-align-center has-foregound-alt-color has-text-color" style="font-size:48px;font-style:normal;font-weight:500"><?php echo esc_html('Meet the Experts', 'fotawp') ?></h1>
    <!-- /wp:heading -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|70"},"blockGap":{"top":"2rem","left":"3rem"}}}} -->
    <div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--70)"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|20"}},"backgroundColor":"foregound-alt","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-foregound-alt-background-color has-background" style="border-radius:10px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:image {"align":"center","id":42,"width":120,"height":120,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50%"}}} -->
                <figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="<?php echo esc_url($fotawp_images[0]) ?>" alt="" class="wp-image-42" style="border-radius:50%" width="120" height="120" /></figure>
                <!-- /wp:image -->

                <!-- wp:spacer {"height":"20px"} -->
                <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->

                <!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
                <h4 class="wp-block-heading has-text-align-center" style="font-style:normal;font-weight:500"><?php echo esc_html('Alex D', 'fotawp') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:heading {"textAlign":"center","level":6,"style":{"color":{"text":"#7d7d7d"},"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"small"} -->
                <h6 class="wp-block-heading has-text-align-center has-text-color has-small-font-size" style="color:#7d7d7d;font-style:normal;font-weight:300"><?php echo esc_html('Software Engineer', 'fotawp') ?></h6>
                <!-- /wp:heading -->

                <!-- wp:social-links {"iconColor":"heading-color","iconColorValue":"#25133F","iconBackgroundColor":"background-alt","iconBackgroundColorValue":"#FBF9FE","align":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"},"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
                <ul class="wp-block-social-links aligncenter has-icon-color has-icon-background-color" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                    <!-- wp:social-link {"url":"#","service":"instagram"} /-->

                    <!-- wp:social-link {"url":"#","service":"github"} /-->
                </ul>
                <!-- /wp:social-links -->

                <!-- wp:paragraph {"align":"center","textColor":"sub-heading-color","fontSize":"small"} -->
                <p class="has-text-align-center has-sub-heading-color-color has-text-color has-small-font-size"><?php echo esc_html('The placeholder text, beginning with the line&nbsp;“Lorem ipsum dolor sit amet, consectetur adipiscing elit”, looks like Latin because in its youth, centuries ago, it was Latin.', 'fotawp') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|20"}},"backgroundColor":"foregound-alt","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-foregound-alt-background-color has-background" style="border-radius:10px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:image {"align":"center","id":42,"width":120,"height":120,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50%"}}} -->
                <figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="<?php echo esc_url($fotawp_images[1]) ?>" alt="" class="wp-image-42" style="border-radius:50%" width="120" height="120" /></figure>
                <!-- /wp:image -->

                <!-- wp:spacer {"height":"20px"} -->
                <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->

                <!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
                <h4 class="wp-block-heading has-text-align-center" style="font-style:normal;font-weight:500"><?php echo esc_html('Lexy M', 'fotawp') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:heading {"textAlign":"center","level":6,"style":{"color":{"text":"#7d7d7d"},"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"small"} -->
                <h6 class="wp-block-heading has-text-align-center has-text-color has-small-font-size" style="color:#7d7d7d;font-style:normal;font-weight:300"><?php echo esc_html('Software Engineer', 'fotawp') ?></h6>
                <!-- /wp:heading -->

                <!-- wp:social-links {"iconColor":"heading-color","iconColorValue":"#25133F","iconBackgroundColor":"background-alt","iconBackgroundColorValue":"#FBF9FE","align":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"},"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
                <ul class="wp-block-social-links aligncenter has-icon-color has-icon-background-color" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                    <!-- wp:social-link {"url":"#","service":"instagram"} /-->

                    <!-- wp:social-link {"url":"#","service":"github"} /-->
                </ul>
                <!-- /wp:social-links -->

                <!-- wp:paragraph {"align":"center","textColor":"sub-heading-color","fontSize":"small"} -->
                <p class="has-text-align-center has-sub-heading-color-color has-text-color has-small-font-size"><?php echo esc_html('The placeholder text, beginning with the line&nbsp;“Lorem ipsum dolor sit amet, consectetur adipiscing elit”, looks like Latin because in its youth, centuries ago, it was Latin.', 'fotawp') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|20"}},"backgroundColor":"foregound-alt","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-foregound-alt-background-color has-background" style="border-radius:10px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:image {"align":"center","id":42,"width":120,"height":120,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50%"}}} -->
                <figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="<?php echo esc_url($fotawp_images[2]) ?>" alt="" class="wp-image-42" style="border-radius:50%" width="120" height="120" /></figure>
                <!-- /wp:image -->

                <!-- wp:spacer {"height":"20px"} -->
                <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->

                <!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
                <h4 class="wp-block-heading has-text-align-center" style="font-style:normal;font-weight:500"><?php echo esc_html('Liyana T', 'fotawp') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:heading {"textAlign":"center","level":6,"style":{"color":{"text":"#7d7d7d"},"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"small"} -->
                <h6 class="wp-block-heading has-text-align-center has-text-color has-small-font-size" style="color:#7d7d7d;font-style:normal;font-weight:300"><?php echo esc_html('Software Engineer', 'fotawp') ?></h6>
                <!-- /wp:heading -->

                <!-- wp:social-links {"iconColor":"heading-color","iconColorValue":"#25133F","iconBackgroundColor":"background-alt","iconBackgroundColorValue":"#FBF9FE","align":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"},"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
                <ul class="wp-block-social-links aligncenter has-icon-color has-icon-background-color" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                    <!-- wp:social-link {"url":"#","service":"instagram"} /-->

                    <!-- wp:social-link {"url":"#","service":"github"} /-->
                </ul>
                <!-- /wp:social-links -->

                <!-- wp:paragraph {"align":"center","textColor":"sub-heading-color","fontSize":"small"} -->
                <p class="has-text-align-center has-sub-heading-color-color has-text-color has-small-font-size"><?php echo esc_html('The placeholder text, beginning with the line&nbsp;“Lorem ipsum dolor sit amet, consectetur adipiscing elit”, looks like Latin because in its youth, centuries ago, it was Latin.', 'fotawp') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->