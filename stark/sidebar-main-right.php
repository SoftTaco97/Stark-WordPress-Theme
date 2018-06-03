<?php
/*
*
* Main left sidebar
*
*/
if ( is_active_sidebar('main-right-sidebar') ) : ?>
  <?php dynamic_sidebar('main-right-sidebar'); ?>
<?php else: ?>
  <div class="sidebar-module"> 
    <h4><?php _e( 'Add Your Widgets to this Sidebar', 'stark' ); ?></h4>
  </div>
<?php endif; ?>