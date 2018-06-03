<?php 
/*
*
* Footer Sidebar
*
*/
if ( is_active_sidebar('footer-sidebar') ) : ?>
  <?php dynamic_sidebar('footer-sidebar'); ?>
<?php else: ?>
  <div class="sidebar-module"> 
    <h4><?php _e( 'Add Your Widgets to this Footer Sidebar', 'stark' ); ?></h4>
  </div>
<?php endif; ?>
