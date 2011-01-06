<?php
/*---------------------------------*/
/* WIDGETIZED FOOTER - 4 COLUMNS   */
/* Mike Nichols - October 17, 2009 */
/*---------------------------------*/

/*-----------------------------------------*/
/* register sidebars for widgetized footer */
if (function_exists('register_sidebar')) {
	$sidebars = array(1, 2, 3, 4);
	foreach($sidebars as $number) {
		register_sidebar(array(
			'name' => 'Footer ' . $number,
			'id' => 'footer-' . $number,
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		));
	}
}

/*-----------------------*/
/* set up footer widgets */
/*
function widgetized_footer() {
?>
	</div>
	</div>

	<div class="footer_main_block">
	<div class="footer_center">

		<div class="footer_items">
  	  		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 1') ) : ?>
    		<?php endif; ?>
		</div>

		<div class="footer_items">
    		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 2') ) : ?>
    		<?php endif; ?>
		</div>

		<div class="footer_items">
    		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 3') ) : ?>
    		<?php endif; ?>
		</div>

		<div class="footer_items">
    		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 4') ) : ?>
    		<?php endif; ?>
		</div>
		
	</div>

<?php
}



add_action('thesis_hook_footer','widgetized_footer');
*/
/* remove the thesis attribution */
remove_action('thesis_hook_footer', 'thesis_attribution');
remove_action('thesis_hook_footer', 'thesis_attribution');
//remove_action('thesis_hook_footer', 'thesis_footer');

function after_content_area() { ?>
<div id="after_area" class="full_width">
	<div class="page">
		<div id="featured">

		<table class = "footer_custom" width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
		  	<td class="footer_top">&nbsp;</td>
		  	<td class="footer_top_center">&nbsp;</td>
			<td class="footer_top">&nbsp;</td>
		  </tr>
		  
		  <tr>
			<td>&nbsp;</td>
			<td width="990px">
			
			<div class="footer_main_block">
				<div class="footer_center">

					<div class="footer_before">&nbsp;</div>
					<div class="footer_items">
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 1') ) : ?>
						<?php endif; ?>
					</div>
			
					<div class="footer_items">
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 2') ) : ?>
						<?php endif; ?>
					</div>
			
					<div class="footer_items">
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 3') ) : ?>
						<?php endif; ?>
					</div>
					
					<div class="footer_after">&nbsp;</div>
					
					<div class="footer_items_right">
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 4') ) : ?>
						<?php endif; ?>
					</div>
					
				</div>
			</div>
			</td>
			<td>&nbsp;</td>
		  </tr>
		  <tr>
		  	<td class="footer_bottom">&nbsp;</td>
		  	<td>
				<div class="footer_bottom">
					<div>Copyright <a href="http://theinvisibleoffice.com/">theinvisibleoffice.com</a> &copy; <?php echo date('Y'); ?> </div>
					<div>All rights reseved.</div>
					<div><a href="http://robertokoci.com">Webdesign By robertokoci.com</a> | <a href="http://inventiumsystems.com/">Project by Inventium Systems</a></div>
				</div>
			</td>
			<td class="footer_bottom">&nbsp;</td>
		  </tr>
		</table>
		</div>
	</div>
</div>
<?php }
add_action('thesis_hook_after_html', 'after_content_area');

/*
function after_widgetized_footer() {
?>
<div class="legal">
<div class="wiaw_footer">
<a href="http://website-in-a-weekend.net/" title="Website in a Weekend - SEO, Tips& Tricks, Wordpress">Website in a Weekend - SEO, Tips &amp; Tricks, Wordpress</a> | Copyright &copy; 2009-2010 All Rights Reserved
</div>
<div>
	<a href="http://inventiumsystems.com/">Inventium Systems</a>  | 
	<a href="http://website-in-a-weekend.net/disclaimer">Disclaimer</a> | 
	<a href="http://website-in-a-weekend.net/privacy-policy">Privacy Policy</a> | 
	<a href="http://website-in-a-weekend.net/terms-and-conditions">Terms &amp; Conditions</a> | 
Design by <a href="http://robertokoci.com" title="Red Diamond Studio Web Design">Red Diamond Web Design</a>.
</div>
</div>
<?php
}
remove_action('thesis_hook_after_footer','after_footer');
add_action('thesis_hook_after_footer','after_widgetized_footer');

?>
*/