<?php
/**
 * Created by IntelliJ IDEA.
 * User: jasenpeterson
 * Date: 8/30/17
 * Time: 12:28 PM
 * Template Name: About Page
 */

get_header();

$current_page = sanitize_post($GLOBALS['wp_the_query']->get_queried_object());

$page_id = $current_page->ID;

global $smarty;

// about us video:
$about_us_video = get_field('about_page_introduction_video', $page_id);
$about_us_video_poster = get_field('about_page_video_poster', $page_id);
$smarty->assign('about_us_video', $about_us_video);
$smarty->assign('about_us_video_poster', $about_us_video_poster);

// about us searches:
$smarty->assign('searches', get_field('search_types', $page_id));

// culture video:
$our_culture_video = get_field('our_culture_video', $page_id);
$our_culture_video_poster = get_field('our_culture_video_poster', $page_id);
$smarty->assign('our_culture_video', $our_culture_video);
$smarty->assign('our_culture_video_poster', $our_culture_video_poster);

// our culture layout:
// about us layout:
$our_culture_layout = get_field('our_culture', $page_id);
$smarty->assign('our_culture_quote', $our_culture_layout[0]['quote']);
$smarty->assign('our_culture_content', $our_culture_layout[0]['content']);

// stats:
$smarty->assign('stats', get_field('stats', $page_id));
$smarty->assign('stats_title', get_field('stats_title', $page_id));
$smarty->assign('stats_image', get_field('stats_image', $page_id));

// content blocks:
$smarty->assign('content_block', get_field('content_block', $page_id));
$smarty->assign('content_block_two', get_field('content_block_two', $page_id));
$smarty->assign('content_block_three', get_field('content_block_three', $page_id));
$smarty->assign('content_block_four', get_field('content_block_four', $page_id));
$smarty->assign('content_block_five', get_field('content_block_five', $page_id));
$smarty->assign('content_block_image', get_field('content_block_image', $page_id));
$smarty->assign('content_block_image_two', get_field('content_block_image_two', $page_id));
$smarty->assign('content_block_image_three', get_field('content_block_image_three', $page_id));


$smarty->display(THEME_DIR . '/smarty_templates/pages/about.tpl');

get_footer();