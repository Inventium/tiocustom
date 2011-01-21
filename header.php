<?php
/*---------------------------------*/
/* WIDGETIZED FOOTER - 4 COLUMNS   */
/* Mike Nichols - October 17, 2009 */
/*---------------------------------*/

function tioheader() {?>
<div class="tioheader"><a href="http://theinvisibleoffice.com/"><img src="/wp-content/themes/thesis_18/custom/images/logo.jpg"/></a></div>
<?php
}
remove_action('thesis_hook_header','thesis_default_header');
add_action('thesis_hook_header','tioheader');
?>