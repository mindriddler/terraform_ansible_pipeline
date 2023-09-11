<?php
 /**
  * Title: Default Page Template
  * Slug: fotawp/template-page
  * Categories: template
  * Inserter: false
  */
  ?>
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
  <!-- wp:cover {"overlayColor":"background-alt","minHeight":209,"isDark":false,"style":{"spacing":{"padding":{"top":"var:preset|spacing|80"}}}} -->
  <div class="wp-block-cover is-light" style="padding-top: var(--wp--preset--spacing--80); min-height: 209px">
    <span aria-hidden="true" class="wp-block-cover__background has-background-alt-background-color has-background-dim-100 has-background-dim"></span>
    <div class="wp-block-cover__inner-container">
      <!-- wp:post-title {"textAlign":"center","fontSize":"xxx-large"} /-->
      <!-- wp:spacer {"height":"253px"} -->
      <div style="height: 253px" aria-hidden="true" class="wp-block-spacer"></div>
      <!-- /wp:spacer -->
    </div>
  </div>
  <!-- /wp:cover -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="padding-top: var(--wp--preset--spacing--60); padding-right: var(--wp--preset--spacing--40); padding-bottom: var(--wp--preset--spacing--60); padding-left: var(--wp--preset--spacing--40)">
  <!-- wp:post-featured-image {"width":"100%","height":"600px","style":{"border":{"radius":"10px"}},"className":"is-style-fotawp-post-featured-image-overlap"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"960px"}} -->
<div class="wp-block-group" style="padding-top: var(--wp--preset--spacing--60); padding-right: var(--wp--preset--spacing--40); padding-bottom: var(--wp--preset--spacing--60); padding-left: var(--wp--preset--spacing--40)">
  <!-- wp:columns {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
  <div class="wp-block-columns" style="padding-top: var(--wp--preset--spacing--50); padding-right: var(--wp--preset--spacing--50); padding-bottom: var(--wp--preset--spacing--50); padding-left: var(--wp--preset--spacing--50)">
    <!-- wp:column {"width":"100%","style":{"spacing":{"padding":{"right":"var:preset|spacing|50"}}}} -->
    <div class="wp-block-column" style="padding-right: var(--wp--preset--spacing--50); flex-basis: 100%"><!-- wp:post-content /--></div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->
</div>
<!-- /wp:group -->