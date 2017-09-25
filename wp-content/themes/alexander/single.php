<?php
/**
 * Created by IntelliJ IDEA.
 * User: jasenpeterson
 * Date: 9/5/17
 * Time: 11:15 AM
 */

get_header();

$current_page = sanitize_post($GLOBALS['wp_the_query']->get_queried_object());

$page_id = $current_page->ID;

global $smarty;

$smarty->assign('page_id', $page_id);

$breadcrumbs = new breadcrumbs();

$post_args = array(
	'post_type' => array('post','tag_news'),
	'post_status' => 'publish',
	'p' => $page_id
);
$tag_posts = new WP_Query($post_args);
$tag_posts_array = null;

if( $tag_posts->have_posts() ) {
	while( $tag_posts->have_posts() ) {
		$tag_posts->the_post();
		$post_content = preg_replace('/style=[^>]*/', '', get_the_content());
		$post_content = preg_replace("/<img[^>]+\>/i", "(image) ", $post_content);
		$smarty->assign('post_date', get_the_date('F j, Y', $page_id));
		$smarty->assign('post_content', wpautop($post_content));
		$smarty->assign('post_author', get_the_author() );
		$smarty->assign('post_author_link', get_author_posts_url(get_the_author_meta('ID')) );
	}
	wp_reset_postdata();
};

$recent_posts = do_shortcode('[rpwe limit="10" thumb="" styles_default="" date=""]');

$smarty->assign('recent_posts', $recent_posts);

$smarty->assign('breadcrumbs', $breadcrumbs->custom_breadcrumbs());

$smarty->display(THEME_DIR . '/smarty_templates/pages/single.tpl');

get_footer();