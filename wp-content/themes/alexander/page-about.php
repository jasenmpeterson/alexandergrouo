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

// about us layout:
$about_us_layout = get_field('about_page_introduction', $page_id);
$smarty->assign('about_us_title', $about_us_layout[0]['title']);
$smarty->assign('about_us_content', $about_us_layout[0]['content']);

// about us searches:
$smarty->assign('searches', get_field('search_types', $page_id));

// culture video:
$our_culture_video = get_field('our_culture_video', $page_id);
$our_culture_video_poster = get_field('our_culture_video_poster', $page_id);
$smarty->assign('our_culture_video', $about_us_video);
$smarty->assign('our_culture_video_poster', $our_culture_video_poster);

// our culture layout:
// about us layout:
$our_culture_layout = get_field('our_culture', $page_id);
$smarty->assign('our_culture_quote', $our_culture_layout[0]['quote']);
$smarty->assign('our_culture_content', $our_culture_layout[0]['content']);

$smarty->display(THEME_DIR . '/smarty_templates/pages/about.tpl');

get_footer();