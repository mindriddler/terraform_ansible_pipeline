<?php

/**
 * Title: Team block white scheme
 * Slug: fotawp/team-block-white
 * Categories: fotawp
 */
$fotawp_url = trailingslashit(get_template_directory_uri());
$fotawp_images = array(
    $fotawp_url . 'assets/images/pattern_image_6.jpg',
    $fotawp_url . 'assets/images/pattern_image_7.jpg',
    $fotawp_url . 'assets/images/pattern_image_8.jpg',
    $fotawp_url . 'assets/images/pattern_image_9.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"secondary","fontSize":"small"} -->
    <h5 class="wp-block-heading has-text-align-center has-secondary-color has-text-color has-small-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html('OUR TEAM', 'fotawp') ?></h5>
    <!-- /wp:heading -->

    <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"54px","fontStyle":"normal","fontWeight":"500"}}} -->
    <h2 class="wp-block-heading has-text-align-center" style="font-size:54px;font-style:normal;font-weight:500"><?php echo esc_html('Meet the Experts', 'fotawp') ?></h2>
    <!-- /wp:heading -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"3rem"},"margin":{"top":"var:preset|spacing|70"}}}} -->
    <div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--70)"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"><!-- wp:image {"align":"wide","id":69,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"7px"}},"className":"is-style-fotawp-boxshadow-hover"} -->
                <figure class="wp-block-image alignwide size-full has-custom-border is-style-fotawp-boxshadow-hover"><img src="<?php echo esc_url($fotawp_images[0]) ?>" alt="" class="wp-image-69" style="border-radius:7px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
                <h4 class="wp-block-heading has-text-align-center" style="margin-top:var(--wp--preset--spacing--60)"><?php echo esc_html('Micheal K', 'fotawp') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
                <p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--30)"><?php echo esc_html('Full Stack Web Developer', 'fotawp') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:social-links {"iconColor":"heading-color","iconColorValue":"#25133F","iconBackgroundColor":"background-alt","iconBackgroundColorValue":"#FBF9FE","align":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"},"margin":{"top":"var:preset|spacing|50"}}}} -->
                <ul class="wp-block-social-links aligncenter has-icon-color has-icon-background-color" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:social-link {"url":"#","service":"instagram"} /-->

                    <!-- wp:social-link {"url":"#","service":"github"} /-->

                    <!-- wp:social-link {"url":"#","service":"linkedin"} /-->
                </ul>
                <!-- /wp:social-links -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"><!-- wp:image {"align":"wide","id":82,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"7px"}},"className":"is-style-fotawp-boxshadow-hover"} -->
                <figure class="wp-block-image alignwide size-full has-custom-border is-style-fotawp-boxshadow-hover"><img src="<?php echo esc_url($fotawp_images[1]) ?>" alt="" class="wp-image-82" style="border-radius:7px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
                <h4 class="wp-block-heading has-text-align-center" style="margin-top:var(--wp--preset--spacing--60)"><?php echo esc_html('Liyana R', 'fotawp') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
                <p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--30)"><?php echo esc_html('Lead Product Designer', 'fotawp') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:social-links {"iconColor":"heading-color","iconColorValue":"#25133F","iconBackgroundColor":"background-alt","iconBackgroundColorValue":"#FBF9FE","align":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"},"margin":{"top":"var:preset|spacing|50"}}}} -->
                <ul class="wp-block-social-links aligncenter has-icon-color has-icon-background-color" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:social-link {"url":"#","service":"instagram"} /-->

                    <!-- wp:social-link {"url":"#","service":"github"} /-->

                    <!-- wp:social-link {"url":"#","service":"linkedin"} /-->
                </ul>
                <!-- /wp:social-links -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"><!-- wp:image {"align":"wide","id":83,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"7px"}},"className":"is-style-fotawp-boxshadow-hover"} -->
                <figure class="wp-block-image alignwide size-full has-custom-border is-style-fotawp-boxshadow-hover"><img src="<?php echo esc_url($fotawp_images[2]) ?>" alt="" class="wp-image-83" style="border-radius:7px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
                <h4 class="wp-block-heading has-text-align-center" style="margin-top:var(--wp--preset--spacing--60)"><?php echo esc_html('Matt H', 'fotawp') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
                <p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--30)"><?php echo esc_html('UI/UX Designer', 'fotawp') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:social-links {"iconColor":"heading-color","iconColorValue":"#25133F","iconBackgroundColor":"background-alt","iconBackgroundColorValue":"#FBF9FE","align":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"},"margin":{"top":"var:preset|spacing|50"}}}} -->
                <ul class="wp-block-social-links aligncenter has-icon-color has-icon-background-color" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:social-link {"url":"#","service":"instagram"} /-->

                    <!-- wp:social-link {"url":"#","service":"github"} /-->

                    <!-- wp:social-link {"url":"#","service":"linkedin"} /-->
                </ul>
                <!-- /wp:social-links -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"><!-- wp:image {"align":"wide","id":69,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"7px"}},"className":"is-style-fotawp-boxshadow-hover"} -->
                <figure class="wp-block-image alignwide size-full has-custom-border is-style-fotawp-boxshadow-hover"><img src="<?php echo esc_url($fotawp_images[3]) ?>" alt="" class="wp-image-69" style="border-radius:7px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
                <h4 class="wp-block-heading has-text-align-center" style="margin-top:var(--wp--preset--spacing--60)"><?php echo esc_html('Caty L', 'fotawp') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
                <p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--30)"><?php echo esc_html('Product Manager', 'fotawp') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:social-links {"iconColor":"heading-color","iconColorValue":"#25133F","iconBackgroundColor":"background-alt","iconBackgroundColorValue":"#FBF9FE","align":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"},"margin":{"top":"var:preset|spacing|50"}}}} -->
                <ul class="wp-block-social-links aligncenter has-icon-color has-icon-background-color" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:social-link {"url":"#","service":"instagram"} /-->

                    <!-- wp:social-link {"url":"#","service":"github"} /-->

                    <!-- wp:social-link {"url":"#","service":"linkedin"} /-->
                </ul>
                <!-- /wp:social-links -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->