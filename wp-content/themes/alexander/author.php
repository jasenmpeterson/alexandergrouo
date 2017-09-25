<?php
/**
 * Created by IntelliJ IDEA.
 * User: jasenpeterson
 * Date: 9/25/17
 * Time: 9:29 AM
 */

get_header();

$current_page = sanitize_post($GLOBALS['wp_the_query']->get_queried_object());

$page_id = $current_page->ID;
$author = $current_page->data->user_login;
$author_id = $current_page->data->ID;

global $smarty;

$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

$post_args = array(
	'post_type' => array('post','tag_news'),
	'post_status' => 'publish',
	'author' => $author_id,
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
			'post_type' => get_post_type(),
			'link' => ( get_post_type() == 'tag_news' ) ? get_field('link') : '',
			'media' => ( get_post_type() == 'tag_news' ) ? get_field('file_attachment') : '',
			'author' => get_the_author(),
		);
	}
	wp_reset_postdata();
};

$pagination = new pagination_links();
$smarty->assign('max_num_pages', $tag_posts->max_num_pages);
$smarty->assign('pagination',  $pagination);

$smarty->assign('posts', $tag_posts_array );

$smarty->assign('author_name', $author );

$smarty->display(THEME_DIR . '/smarty_templates/pages/author.tpl');

get_footer();