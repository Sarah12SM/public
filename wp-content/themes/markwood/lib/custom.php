<?php

//For Favorites list
add_shortcode('fav-link', 'wpfp_link');

/**
* Filter the custom inner shortcodes array to add your own shortcode 'myshortcode'
* @param $shortcodes (array)
* @return $shortcodes
*/
add_filter('wpv_custom_inner_shortcodes', 'prefix_add_my_shortcodes');
 
function prefix_add_my_shortcodes($shortcodes) {
    $shortcodes[] = 's-protect-content';
    return $shortcodes;
}

// excerpts
add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
}

//Curriculum
function get_curriculum(){
$ids = wpfp_get_users_favorites();
$list = '';
foreach ($ids as $value) {
	# code...
	$list .= $value . ', ';
}
return $list;
}
//Protected content function



function user_has_subscription($id=null){
	if (!$id){
		$member = MS_Model_Member::get_current_member();
	} else {
		$member = MS_Model_Member::get_members(array('search'=>$id));
		$member = $member[0];
		}
	return $member->has_membership();
	}

define( 'UPLOADS', ''.'assets' );

?>