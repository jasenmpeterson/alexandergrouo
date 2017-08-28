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

$expertise_content_id = get_field('expertise_page_object', $page_id);
$expertise_content = get_post($expertise_content_id);

$company_motto = get_field('company_motto', $page_id);

$locations_content = get_field('locations_copy', $page_id);
$locations_list = get_field('locations_list', $page_id);

$post_list_args = array(
	'numberposts'=> 3,
	'post_type' => 'post'
);
$post_list = get_posts($post_list_args);

$tag_news_args = array(
	'numberposts'=>3,
	'post_type'=> 'tag_news'
);

$tag_news_list = get_posts($tag_news_args);

$smarty->assign('content', wpautop($home_content->post_content));

$smarty->assign('about_content', wpautop($about_content->post_content));

$smarty->assign('expertise_content', wpautop($expertise_content->post_content));

$smarty->assign('company_motto', $company_motto);

$smarty->assign('posts', $post_list);

$smarty->assign('tag_news', $tag_news_list);

$smarty->assign('locations_content', $locations_content);
$smarty->assign('locations_list', $locations_list);

$smarty->display(THEME_DIR . '/smarty_templates/pages/home.tpl');

get_footer();