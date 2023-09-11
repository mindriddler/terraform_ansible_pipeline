<?php

/**
 * Title: Featured Posts Block
 * Slug: fotablog/featured-post-block
 * Categories: fotablog-patterns
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} -->
    <div class="wp-block-columns"><!-- wp:column {"width":"70%"} -->
        <div class="wp-block-column" style="flex-basis:70%"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:separator {"style":{"layout":{"selfStretch":"fill"}},"backgroundColor":"accent","className":"fotablog-heading-seprator"} -->
                <hr class="wp-block-separator has-text-color has-accent-color has-alpha-channel-opacity has-accent-background-color has-background fotablog-heading-seprator" />
                <!-- /wp:separator -->

                <!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase"}},"textColor":"foreground","fontSize":"x-small","fontFamily":"ibm-plex-sans"} -->
                <h4 class="wp-block-heading has-foreground-color has-text-color has-ibm-plex-sans-font-family has-x-small-font-size" style="font-style:normal;font-weight:400;text-transform:uppercase">Life Style</h4>
                <!-- /wp:heading -->

                <!-- wp:separator {"style":{"layout":{"selfStretch":"fill"}},"backgroundColor":"accent","className":"fotablog-heading-seprator"} -->
                <hr class="wp-block-separator has-text-color has-accent-color has-alpha-channel-opacity has-accent-background-color has-background fotablog-heading-seprator" />
                <!-- /wp:separator -->
            </div>
            <!-- /wp:group -->

            <!-- wp:query {"queryId":25,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list","columns":2}} -->
            <div class="wp-block-query"><!-- wp:post-template -->
                <!-- wp:post-featured-image {"height":"540px"} /-->

                <!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"var:preset|spacing|30"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
                <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-right:0;padding-left:0"><!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"28px"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"is-style-title-hover-secondary-color"} /-->

                    <!-- wp:post-excerpt {"textAlign":"center","fontSize":"x-small"} /-->

                    <!-- wp:read-more {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"}},"textColor":"foreground","className":"is-style-readmore-hover-primary-color fotablog-more-buttons","fontSize":"x-small"} /-->
                </div>
                <!-- /wp:group -->
                <!-- /wp:post-template -->
            </div>
            <!-- /wp:query -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60)"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
                <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:separator {"style":{"layout":{"selfStretch":"fill"}},"backgroundColor":"accent","className":"fotablog-heading-seprator"} -->
                    <hr class="wp-block-separator has-text-color has-accent-color has-alpha-channel-opacity has-accent-background-color has-background fotablog-heading-seprator" />
                    <!-- /wp:separator -->

                    <!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase"}},"textColor":"foreground","fontSize":"x-small","fontFamily":"ibm-plex-sans"} -->
                    <h4 class="wp-block-heading has-foreground-color has-text-color has-ibm-plex-sans-font-family has-x-small-font-size" style="font-style:normal;font-weight:400;text-transform:uppercase">Most Recent</h4>
                    <!-- /wp:heading -->

                    <!-- wp:separator {"style":{"layout":{"selfStretch":"fill"}},"backgroundColor":"accent","className":"fotablog-heading-seprator"} -->
                    <hr class="wp-block-separator has-text-color has-accent-color has-alpha-channel-opacity has-accent-background-color has-background fotablog-heading-seprator" />
                    <!-- /wp:separator -->
                </div>
                <!-- /wp:group -->

                <!-- wp:query {"queryId":25,"query":{"perPage":"10","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list","columns":2},"className":"fotablog-latestpots-masonry"} -->
                <div class="wp-block-query fotablog-latestpots-masonry"><!-- wp:post-template -->
                    <!-- wp:post-featured-image {"isLink":true,"height":"","style":{"border":{"radius":"0px"}}} /-->

                    <!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"18px","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"margin":{"top":"var:preset|spacing|50","right":"0","bottom":"0","left":"0"}}},"className":"is-style-title-hover-secondary-color"} /-->

                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
                    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:0"><!-- wp:separator {"style":{"layout":{"selfStretch":"fill","flexSize":null}},"backgroundColor":"primary"} -->
                        <hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background" />
                        <!-- /wp:separator -->

                        <!-- wp:post-date {"textAlign":"center","style":{"typography":{"fontStyle":"italic","fontWeight":"300"}},"textColor":"primary","fontSize":"x-small","fontFamily":"ibm-plex-serif"} /-->

                        <!-- wp:separator {"style":{"layout":{"selfStretch":"fill","flexSize":null}},"backgroundColor":"primary"} -->
                        <hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background" />
                        <!-- /wp:separator -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:post-excerpt {"textAlign":"center","moreText":"","textColor":"foreground","fontSize":"x-small"} /-->

                    <!-- wp:group {"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group"><!-- wp:read-more {"content":"Read Mroe","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"}},"textColor":"foreground","className":"is-style-readmore-hover-primary-color fotablog-more-buttons","fontSize":"x-small"} /--></div>
                    <!-- /wp:group -->
                    <!-- /wp:post-template -->

                    <!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
                    <!-- wp:query-pagination-previous /-->

                    <!-- wp:query-pagination-numbers /-->

                    <!-- wp:query-pagination-next /-->
                    <!-- /wp:query-pagination -->
                </div>
                <!-- /wp:query -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"30%","style":{"spacing":{"padding":{"top":"0.55rem"}}},"className":"fotablog-home-sidebar"} -->
        <div class="wp-block-column fotablog-home-sidebar" style="padding-top:0.55rem;flex-basis:30%"><!-- wp:template-part {"slug":"sidebar","theme":"fotablog","area":"uncategorized"} /--></div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->