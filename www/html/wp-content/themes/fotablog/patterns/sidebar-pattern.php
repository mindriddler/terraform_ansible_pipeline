<?php

/**
 * Title: Default Sidebar Block
 * Slug: fotablog/sidebar-pattern
 * Categories: fotablog-patterns
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0">
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|50","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50"}},"border":{"radius":"0px","color":"#bbbbbb","width":"1px"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group has-border-color" style="border-color: #bbbbbb; border-width: 1px; border-radius: 0px; padding-top: var(--wp--preset--spacing--60); padding-right: var(--wp--preset--spacing--50); padding-bottom: var(--wp--preset--spacing--60); padding-left: var(--wp--preset--spacing--50)">
        <!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"uppercase"}},"fontSize":"x-small","fontFamily":"ibm-plex-sans"} -->
        <h4 class="wp-block-heading has-text-align-center has-ibm-plex-sans-font-family has-x-small-font-size" style="font-style: normal; font-weight: 500; text-transform: uppercase">About Me</h4>
        <!-- /wp:heading -->

        <!-- wp:image {"align":"center","id":1250,"width":140,"height":200,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50%"}}} -->
        <figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="<?php echo esc_url(get_stylesheet_directory_uri())  ?>/assets/images/pattern_sidebar.jpg" alt="" class="wp-image-1250" style="border-radius: 50%" width="140" height="200" /></figure>
        <!-- /wp:image -->

        <!-- wp:paragraph {"align":"center","fontSize":"x-small"} -->
        <p class="has-text-align-center has-x-small-font-size">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}},"border":{"radius":"0px","color":"#bbbbbb","width":"1px"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group has-border-color" style="
      border-color: #bbbbbb;
      border-width: 1px;
      border-radius: 0px;
      margin-top: var(--wp--preset--spacing--60);
      margin-bottom: var(--wp--preset--spacing--60);
      padding-top: var(--wp--preset--spacing--60);
      padding-right: var(--wp--preset--spacing--60);
      padding-bottom: var(--wp--preset--spacing--60);
      padding-left: var(--wp--preset--spacing--60);
    ">
        <!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"uppercase"}},"fontSize":"x-small","fontFamily":"ibm-plex-sans"} -->
        <h4 class="wp-block-heading has-text-align-center has-ibm-plex-sans-font-family has-x-small-font-size" style="font-style: normal; font-weight: 500; text-transform: uppercase">Follow us on</h4>
        <!-- /wp:heading -->

        <!-- wp:social-links {"iconColor":"heading-color","iconColorValue":"#2A2A2A","iconBackgroundColor":"foregound-alt","iconBackgroundColorValue":"#FEFEFE","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"},"margin":{"top":"var:preset|spacing|50"}}},"className":"fotablog-sidebar-socials","layout":{"type":"flex","justifyContent":"center"}} -->
        <ul class="wp-block-social-links has-icon-color has-icon-background-color fotablog-sidebar-socials" style="margin-top: var(--wp--preset--spacing--50)">
            <!-- wp:social-link {"url":"#","service":"spotify"} /-->

            <!-- wp:social-link {"url":"#","service":"twitter"} /-->

            <!-- wp:social-link {"url":"#","service":"linkedin"} /-->

            <!-- wp:social-link {"url":"#","service":"facebook"} /-->
        </ul>
        <!-- /wp:social-links -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"0","right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"backgroundColor":"heading-color","layout":{"type":"constrained"}} -->
    <div class="wp-block-group has-heading-color-background-color has-background" style="padding-top: var(--wp--preset--spacing--60); padding-right: var(--wp--preset--spacing--50); padding-bottom: 0; padding-left: var(--wp--preset--spacing--50)">
        <!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"textTransform":"uppercase"}},"textColor":"background","fontSize":"x-small","fontFamily":"ibm-plex-sans"} -->
        <h4 class="wp-block-heading has-text-align-center has-background-color has-text-color has-ibm-plex-sans-font-family has-x-small-font-size" style="text-transform: uppercase">Subscribe to my news letter</h4>
        <!-- /wp:heading -->

        <!-- wp:contact-form-7/contact-form-selector {"id":93,"title":"Newsletter","className":"fotablog-sidebar-newsletter"} -->
        <div class="wp-block-contact-form-7-contact-form-selector fotablog-sidebar-newsletter">[contact-form-7 id="93" title="Newsletter"]</div>
        <!-- /wp:contact-form-7/contact-form-selector -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|50","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50"}},"border":{"color":"#bbbbbb","width":"1px"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group has-border-color" style="
      border-color: #bbbbbb;
      border-width: 1px;
      margin-top: var(--wp--preset--spacing--60);
      margin-bottom: var(--wp--preset--spacing--60);
      padding-top: var(--wp--preset--spacing--60);
      padding-right: var(--wp--preset--spacing--50);
      padding-bottom: var(--wp--preset--spacing--60);
      padding-left: var(--wp--preset--spacing--50);
    ">
        <!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"}},"fontSize":"x-small","fontFamily":"ibm-plex-sans"} -->
        <h4 class="wp-block-heading has-text-align-center has-ibm-plex-sans-font-family has-x-small-font-size" style="margin-bottom: var(--wp--preset--spacing--40); font-style: normal; font-weight: 500; text-transform: uppercase">Categories</h4>
        <!-- /wp:heading -->

        <!-- wp:categories {"className":"is-style-fotawp-categories-bullet-hide-style fotablog-sidebar-categories"} /-->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->