<?php
/*
*
* Footer Center Sidebar
*
*/
if ( is_active_sidebar('footer-center-sidebar') ) : ?>
  <?php dynamic_sidebar('footer-center-sidebar'); ?>
<?php else: ?>
  <div class="sidebar-module"> 
    <h4><?php _e( 'Add Your Widgets to this Footer Center Sidebar', 'stark' ); ?></h4>
  </div>
<?php endif; ?>