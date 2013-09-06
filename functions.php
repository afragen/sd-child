<?php

add_action( 'admin_menu', 'mytheme_remove_menu_pages' );
function mytheme_remove_menu_pages() {
	remove_menu_page('link-manager.php');
}

