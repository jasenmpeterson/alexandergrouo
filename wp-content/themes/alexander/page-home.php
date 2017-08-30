<?php
/**
 * Created by IntelliJ IDEA.
 * User: jasenpeterson
 * Date: 8/27/17
 * Time: 2:51 PM
 * Template Name: Home
 */

get_header();

global $smarty;

$home_content = get_post($page_id);

$about_content_id = get_field('about_page_object', $page_id);
$about_content = get_post($about_content_id);
$about_image = get_field('about_page_image', $page_id);
$about_link = get_permalink($about_content_id);

$expertise_content_id = get_field('expertise_page_object', $page_id);
$expertise_content = get_post($expertise_content_id);
$expertise_link = get_permalink($expertise_content);
$expertise_image = get_field('expertise_image', $page_id);

$company_motto = get_field('company_motto', $page_id);

$locations_content = get_field('locations_copy', $page_id);
$locations_list = get_field('locations_list', $page_id);
$locations_image = get_field('locations_image', $page_id);
$locations_content_id = get_field('locations_page_object', $page_id);
$locations_link = get_permalink($locations_content_id);

$post_list_args = array(
	'post_type' => 'post',
	'post_status' => 'publish',
	'posts_per_page'=> 3
);
$post_list_array;
$post_list = new WP_Query($post_list_args);
if( $post_list->have_posts() ) {
	while( $post_list->have_posts() ) {
		$post_list->the_post();
		$post_list_array[get_the_ID()] = array(
			'link'=> get_permalink(),
			'title'=> get_the_title(),
			'content'=> get_the_excerpt()
		);
	}

	wp_reset_postdata();
};
$blog_post_id = get_field('blog_post_object', $page_id);
$blog_page_link = get_permalink($blog_post_id);

$tag_news_list_array;
$tag_news_args = array(
	'post_type'=> 'tag_news',
	'post_status' => 'published',
	'posts_per_page'=> 3
);
$tag_news_list = new WP_Query($tag_news_args);
if( $tag_news_list->have_posts() ) {
	while( $tag_news_list->have_posts() ) {
		$tag_news_list->the_post();
		$tag_news_list_array[get_the_ID()] = array(
			'link'=> get_permalink(),
			'title'=> get_the_title(),
			'content'=> get_the_content(),
			'date'=> get_the_date(),
			'link_or_media'=> get_field('link_or_media'),
			'link'=> get_field('link'),
			'media'=> get_field('file_attachment')
		);
	}

	wp_reset_postdata();
};

$featured_image_src = wp_get_attachment_image_src(get_post_thumbnail_id($page_id), 'full-size');
$featured_image = $featured_image_src[0];

// get page id :

$smarty->assign('content', wpautop($home_content->post_content));

$smarty->assign('about_content', wpautop($about_content->post_content));
$smarty->assign('about_page_image', $about_image);
$smarty->assign('about_link', $about_link);

$smarty->assign('expertise_content', wpautop($expertise_content->post_content));
$smarty->assign('expertise_image', $expertise_image);

$smarty->assign('company_motto', $company_motto);

$smarty->assign('posts', $post_list_array);
$smarty->assign('blog_link', $blog_page_link);

$smarty->assign('tag_news', $tag_news_list_array);

$smarty->assign('locations_content', $locations_content);
$smarty->assign('locations_list', $locations_list);
$smarty->assign('locations_image', $locations_image);
$smarty->assign('locations_link', $locations_link);

$smarty->assign('featured_image', $featured_image);

$smarty->display(THEME_DIR . '/smarty_templates/pages/home.tpl');

get_footer();