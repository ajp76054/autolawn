<?php
/**
 * Plugin Name: Expanded Admin Menus
 * Plugin URI: http://xavisys.com/wordpress-plugins/expanded-admin-menus/
 * Description: Forces all admin menus to be expanded all the time
 * Version: 0.0.3
 * Author: Aaron D. Campbell
 * Author URI: http://xavisys.com/
 */

function bd_expand_admin_menus() {
	?><script type="text/javascript">
	var eam_open_menu_items = eam_get_open_items();

	jQuery('#adminmenu>li.wp-not-current-submenu:not(.wp-menu-separator):has(ul)').each(function(index){
		'use strict';
		jQuery(this).addClass('no-arrow').prepend('<div class="expand-arrow"></div>');
		if ( eam_open_menu_items[ jQuery(this).attr('id') ] )
			jQuery(this).addClass('wp-has-current-submenu').removeClass('wp-not-current-submenu');
	});
	jQuery('#adminmenu').find('div.expand-arrow').bind( 'click.eam', function() {
		'use strict';
		jQuery(this).parent().toggleClass('wp-has-current-submenu').toggleClass('wp-not-current-submenu');
		if ( jQuery(this).parent().hasClass('wp-has-current-submenu') )
			eam_open_menu_items[jQuery(this).parent().attr('id')] = 1;
		else
			delete eam_open_menu_items[jQuery(this).parent().attr('id')];
		eam_store_open_items( eam_open_menu_items );
	});
	function eam_get_open_items() {
		'use strict';
		try {
			var open_items = JSON.parse( getUserSetting( 'eam_open_menu_items', '{}' ) );
		} catch( e ) {
			var open_items = {};
		}
		return open_items;
	}
	function eam_store_open_items( eam_open_menu_items ) {
		'use strict';
		// Add - before string because setUserSetting removes the first non-alpha-numeric character
		setUserSetting( 'eam_open_menu_items', '-'+JSON.stringify(eam_open_menu_items) );
	}
	</script><?php
}
add_action( 'adminmenu', 'bd_expand_admin_menus' );

function bd_expanded_admin_menus_head() {
	?>
	<style type="text/css">
	#adminmenu li.no-arrow .wp-menu-arrow {display: none;}
	#adminmenu div.expand-arrow{
		width:28px;
		height:30px;
		float:right;
		background: transparent url(<?php echo admin_url( '/images/arrows.png' ); ?>) no-repeat 6px 7px;
	}
	</style>
	<?php
}
add_action( 'admin_print_styles', 'bd_expanded_admin_menus_head', 100 );
