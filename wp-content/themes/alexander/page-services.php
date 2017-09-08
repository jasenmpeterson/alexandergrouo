<?php
/**
 * Created by IntelliJ IDEA.
 * User: jasenpeterson
 * Date: 9/4/17
 * Time: 2:08 PM
 * Template Name: Services
 */

get_header();

$current_page = sanitize_post($GLOBALS['wp_the_query']->get_queried_object());

$page_id = $current_page->ID;

global $smarty;

$current_page = sanitize_post($GLOBALS['wp_the_query']->get_queried_object());

$page_id = $current_page->ID;

$services_args = array(
	'post_type' => 'page',
	'post_status' => 'publish',
	'p'=> $page_id
);
$services = new WP_Query($services_args);
if( $services->have_posts() ) {
	while( $services->have_posts() ) {
		$services->the_post();
		$smarty->assign('content', wpautop(get_the_content()));
		$smarty->assign('content_block', get_field('content_block'));
		$smarty->assign('content_block_two', get_field('content_block_two'));
		$smarty->assign('content_block_image', get_field('content_block_image'));
		$smarty->assign('content_block_image_two', get_field('content_block_image_two'));
		$smarty->assign('industries', get_field('industries'));
		$smarty->assign('industries_title', get_field('industries_title'));
		$smarty->assign('functions', get_field('functions'));
		$smarty->assign('functions_title', get_field('functions_title'));
	}

	wp_reset_postdata();
};

$services = get_field('services_linkage', $page_id);
$services_array = null;

foreach($services as $service) {
	foreach($service as $item) {
		$services_array[] = array(
			'title' => $item->post_title,
			'link' => get_permalink($item->ID),
			'label' => get_the_terms($item->ID, 'services')
		);
	}
}

$smarty->assign('services', $services_array);

$smarty->display(THEME_DIR . '/smarty_templates/pages/services.tpl');

get_footer();