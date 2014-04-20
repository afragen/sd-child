<?php

add_action( 'admin_menu', 'ajf_remove_menu_pages' );
function ajf_remove_menu_pages() {
	remove_menu_page('link-manager.php');
}

//http://www.paulund.co.uk/automatically-link-twitter
add_filter('the_content', 'paulund_content_twitter_mention');   
add_filter('comment_text', 'paulund_content_twitter_mention');
function paulund_content_twitter_mention($content) {
	return preg_replace('/([^a-zA-Z0-9-_&])@([0-9a-zA-Z_]+)/', "$1<a href=\"http://twitter.com/$2\" target=\"_blank\" rel=\"nofollow\">@$2</a>", $content);
}

