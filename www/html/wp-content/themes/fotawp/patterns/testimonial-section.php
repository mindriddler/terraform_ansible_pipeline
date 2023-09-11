<?php

/**
 * Title: Testimonial Section
 * Slug: fotawp/testimonial-section
 * Categories: fotawp,testimonials
 */
$fotawp_url = trailingslashit(get_template_directory_uri());
$fotawp_images = array(
  $fotawp_url  . 'assets/images/fota_testimonial_1.png',
  $fotawp_url  . 'assets/images/fota_testimonial_2.png',
  $fotawp_url  . 'assets/images/fota_testimonial_3.png',
  $fotawp_url  . 'assets/images/review_star.svg'
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"120px","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:120px;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"dimRatio":0,"overlayColor":"background","isDark":false} -->
  <div class="wp-block-cover is-light"><span aria-hidden="true" class="wp-block-cover__background has-background-background-color has-background-dim-0 has-background-dim"></span>
    <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
      <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:heading {"textAlign":"center","level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"foreground","fontSize":"x-small"} -->
        <h6 class="wp-block-heading has-text-align-center has-foreground-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:600"><?php echo esc_html('TESTIMONIALS', 'fotawp') ?></h6>
        <!-- /wp:heading -->

        <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"48px"}},"textColor":"heading-color"} -->
        <h1 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color" style="font-size:48px;font-style:normal;font-weight:600"><?php echo esc_html('Our Client’s Feedbacks', 'fotawp') ?></h1>
        <!-- /wp:heading -->

        <!-- wp:columns {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60"},"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} -->
        <div class="wp-block-columns" style="padding-top:var(--wp--preset--spacing--60)"><!-- wp:column {"style":{"spacing":{"padding":{"right":"0"}}}} -->
          <div class="wp-block-column" style="padding-right:0"><!-- wp:group {"style":{"border":{"radius":"10px","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"borderColor":"border-color","backgroundColor":"background","className":"is-style-fotawp-boxshadow","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-fotawp-boxshadow has-border-color has-border-color-border-color has-background-background-color has-background" style="border-width:1px;border-radius:10px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:image {"align":"center","id":1822,"width":70,"height":70,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
              <figure class="wp-block-image aligncenter size-full is-resized is-style-rounded"><img src="<?php echo esc_url($fotawp_images[0]) ?>" alt="" class="wp-image-1822" style="width:70px;height:70px" width="70" height="70" /></figure>
              <!-- /wp:image -->

              <!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"top":"var:preset|spacing|40"}}},"textColor":"heading-color","fontSize":"medium"} -->
              <h5 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-medium-font-size" style="padding-top:var(--wp--preset--spacing--40);font-style:normal;font-weight:600"><?php echo esc_html('Alex T', 'fotawp') ?></h5>
              <!-- /wp:heading -->

              <!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"0","bottom":"var:preset|spacing|30","left":"0"},"margin":{"top":"0","right":"0","left":"0","bottom":"0"}}},"textColor":"foreground","fontSize":"x-small"} -->
              <p class="has-text-align-center has-foreground-color has-text-color has-x-small-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:var(--wp--preset--spacing--30);padding-right:0;padding-bottom:var(--wp--preset--spacing--30);padding-left:0"><?php echo esc_html('Digital Marketing, CozyThemes', 'fotawp') ?></p>
              <!-- /wp:paragraph -->

              <!-- wp:image {"align":"center","id":726,"width":115,"height":20,"sizeSlug":"full","linkDestination":"none"} -->
              <figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url($fotawp_images[3]) ?>" alt="" class="wp-image-726" style="width:115px;height:20px" width="115" height="20" /></figure>
              <!-- /wp:image -->

              <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5"}},"textColor":"foreground"} -->
              <p class="has-text-align-center has-foreground-color has-text-color" style="line-height:1.5"><?php echo esc_html('Not only theme, it\s powerful tools for site building, native Full Site Editing block builder make it too easy for use and dozens of patterns, just WOW!!!', 'fotawp') ?></p>
              <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
          </div>
          <!-- /wp:column -->

          <!-- wp:column {"style":{"spacing":{"padding":{"right":"0","left":"0"}}}} -->
          <div class="wp-block-column" style="padding-right:0;padding-left:0"><!-- wp:group {"style":{"border":{"radius":"10px","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"borderColor":"border-color","backgroundColor":"background","className":"is-style-fotawp-boxshadow","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-fotawp-boxshadow has-border-color has-border-color-border-color has-background-background-color has-background" style="border-width:1px;border-radius:10px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:image {"align":"center","id":1823,"width":70,"height":70,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50%"}},"className":"is-style-fotawp-boxshadow"} -->
              <figure class="wp-block-image aligncenter size-full is-resized has-custom-border is-style-fotawp-boxshadow"><img src="<?php echo esc_url($fotawp_images[1]) ?>" alt="" class="wp-image-1823" style="border-radius:50%;width:70px;height:70px" width="70" height="70" /></figure>
              <!-- /wp:image -->

              <!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"top":"var:preset|spacing|40"}}},"textColor":"heading-color","fontSize":"medium"} -->
              <h5 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-medium-font-size" style="padding-top:var(--wp--preset--spacing--40);font-style:normal;font-weight:600"><?php echo esc_html('Liyana R', 'fotawp') ?></h5>
              <!-- /wp:heading -->

              <!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"0","bottom":"var:preset|spacing|30","left":"0"},"margin":{"top":"0","right":"0","left":"0","bottom":"0"}}},"textColor":"foreground","fontSize":"x-small"} -->
              <p class="has-text-align-center has-foreground-color has-text-color has-x-small-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:var(--wp--preset--spacing--30);padding-right:0;padding-bottom:var(--wp--preset--spacing--30);padding-left:0"><?php echo esc_html('Digital Marketing, CozyThemes', 'fotawp') ?></p>
              <!-- /wp:paragraph -->

              <!-- wp:image {"align":"center","id":726,"width":115,"height":20,"sizeSlug":"full","linkDestination":"none"} -->
              <figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url($fotawp_images[3]) ?>" alt="" class="wp-image-726" style="width:115px;height:20px" width="115" height="20" /></figure>
              <!-- /wp:image -->

              <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5"}},"textColor":"foreground"} -->
              <p class="has-text-align-center has-foreground-color has-text-color" style="line-height:1.5"><?php echo esc_html('Comes with global style variations is great for color choice, switching my favourite color with just one click option is great experience!', 'fotawp') ?></p>
              <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
          </div>
          <!-- /wp:column -->

          <!-- wp:column {"style":{"spacing":{"padding":{"left":"0"}}}} -->
          <div class="wp-block-column" style="padding-left:0"><!-- wp:group {"style":{"border":{"radius":"10px","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"borderColor":"border-color","backgroundColor":"background","className":"is-style-fotawp-boxshadow","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-fotawp-boxshadow has-border-color has-border-color-border-color has-background-background-color has-background" style="border-width:1px;border-radius:10px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:image {"align":"center","id":1826,"width":70,"height":70,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
              <figure class="wp-block-image aligncenter size-full is-resized is-style-rounded"><img src="<?php echo esc_url($fotawp_images[2]) ?>" alt="" class="wp-image-1826" style="width:70px;height:70px" width="70" height="70" /></figure>
              <!-- /wp:image -->

              <!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"top":"var:preset|spacing|40"}}},"textColor":"heading-color","fontSize":"medium"} -->
              <h5 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-medium-font-size" style="padding-top:var(--wp--preset--spacing--40);font-style:normal;font-weight:600"><?php echo esc_html('Lexy M', 'fotawp') ?></h5>
              <!-- /wp:heading -->

              <!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"0","bottom":"var:preset|spacing|30","left":"0"},"margin":{"top":"0","right":"0","left":"0","bottom":"0"}}},"textColor":"foreground","fontSize":"x-small"} -->
              <p class="has-text-align-center has-foreground-color has-text-color has-x-small-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:var(--wp--preset--spacing--30);padding-right:0;padding-bottom:var(--wp--preset--spacing--30);padding-left:0"><?php echo esc_html('Digital Marketing, CozyThemes', 'fotawp') ?></p>
              <!-- /wp:paragraph -->

              <!-- wp:image {"align":"center","id":726,"width":115,"height":20,"sizeSlug":"full","linkDestination":"none"} -->
              <figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url($fotawp_images[3]) ?>" alt="" class="wp-image-726" style="width:115px;height:20px" width="115" height="20" /></figure>
              <!-- /wp:image -->

              <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5"}},"textColor":"foreground"} -->
              <p class="has-text-align-center has-foreground-color has-text-color" style="line-height:1.5"><?php echo esc_html('As freelancer, dozens of beautiful patterns and elementor widgets built professionally adding the real value of the theme.', 'fotawp') ?></p>
              <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
          </div>
          <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
      </div>
      <!-- /wp:group -->
    </div>
  </div>
  <!-- /wp:cover -->
</div>
<!-- /wp:group -->