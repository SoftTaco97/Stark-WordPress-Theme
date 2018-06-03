<?php
/**
*
* Template part for comment meta
*
*/
    if ( comments_open() ) {
        comments_popup_link( 'No comments yet', '1 comment', '% comments', 'comments-link', 'Comments are off for this post');
        echo '<br>';
}
?>
