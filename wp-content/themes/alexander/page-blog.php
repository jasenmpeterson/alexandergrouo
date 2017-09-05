<?php
/**
 * Created by IntelliJ IDEA.
 * User: jasenpeterson
 * Date: 9/5/17
 * Time: 7:51 AM
 * Template Name: Blog
 */

get_header();

$current_page = sanitize_post($GLOBALS['wp_the_query']->get_queried_object());

$page_id = $current_page->ID;

global $smarty;

use twitter_feed\twitter;
$twitter = new twitter();
$twitter->display_feed();
$smarty->assign('twitter_feed', $twitter->content);

$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

$post_args = array(
	'post_type' => array('post','tag_news'),
	'post_status' => 'publish',
	'posts_per_page' => 6,
	'paged' => $paged
);
$tag_posts = new WP_Query($post_args);
$tag_posts_array = null;

if( $tag_posts->have_posts() ) {
	while( $tag_posts->have_posts() ) {
		$tag_posts->the_post();
		$tag_posts_array[] = array(
			'post_name' => get_the_title(),
			'post_date' => get_the_date(),
			'post_link' => get_permalink(),
			'post_type' => get_post_type()
		);
	}
	wp_reset_postdata();
};

$pagination = new pagination_links();
$smarty->assign('max_num_pages', $tag_posts->max_num_pages);
$smarty->assign('pagination',  $pagination);

$smarty->assign('posts', $tag_posts_array );

$smarty->display(THEME_DIR . '/smarty_templates/pages/blog.tpl');

get_footer();