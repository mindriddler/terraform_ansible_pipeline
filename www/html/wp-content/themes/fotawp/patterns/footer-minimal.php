<?php

/**
 * Title: Footer Minimal
 * Slug: fotawp/footer-minimal
 * Categories: fotawp, footer
 */
$fotawp_url = trailingslashit(get_template_directory_uri());
$fotawp_images = array(
  $fotawp_url . 'assets/images/logo3.png',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|30","top":"var:preset|spacing|60"}},"color":{"background":"#fbf9fe"}},"textColor":"background","layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group has-background-color has-text-color has-background" style="background-color: #fbf9fe; padding-top: var(--wp--preset--spacing--60); padding-bottom: var(--wp--preset--spacing--30)">
  <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"0","bottom":"var:preset|spacing|50","left":"0"},"blockGap":"0px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
  <div class="wp-block-group" style="padding-top: var(--wp--preset--spacing--40); padding-right: 0; padding-bottom: var(--wp--preset--spacing--50); padding-left: 0">
    <!-- wp:image {"id":564,"width":154,"height":50,"sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($fotawp_images[0]) ?>" alt="" class="wp-image-564" width="154" height="50" /></figure>
    <!-- /wp:image -->
  </div>
  <!-- /wp:group -->

  <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}},"border":{"top":{"color":"#e5ddfa","width":"1px"},"bottom":{"width":"0px","style":"none"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
  <div class="wp-block-group alignwide" style="border-top-color: #e5ddfa; border-top-width: 1px; border-bottom-style: none; border-bottom-width: 0px; padding-top: var(--wp--preset--spacing--50); padding-right: var(--wp--preset--spacing--50); padding-bottom: var(--wp--preset--spacing--50); padding-left: var(--wp--preset--spacing--50)">
    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
    <p class="has-foreground-color has-text-color has-link-color"><?php echo esc_html('Proudly powered by WordPress&nbsp;|&nbsp;Theme: FotaWP by&nbsp;CozyThemes.', 'fotawp') ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:social-links {"openInNewTab":true,"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"className":"is-style-default","layout":{"type":"flex","flexWrap":"nowrap"}} -->
    <ul class="wp-block-social-links is-style-default">
      <!-- wp:social-link {"url":"#","service":"facebook"} /-->

      <!-- wp:social-link {"url":"#","service":"twitter"} /-->

      <!-- wp:social-link {"url":"#","service":"pinterest"} /-->

      <!-- wp:social-link {"url":"#","service":"spotify"} /-->

      <!-- wp:social-link {"url":"#","service":"instagram"} /-->
    </ul>
    <!-- /wp:social-links -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->