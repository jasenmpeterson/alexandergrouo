<?php
/**
 * Created by IntelliJ IDEA.
 * User: jasenpeterson
 * Date: 8/26/17
 * Time: 10:47 PM
 */

global $smarty;

// get the queried object and sanitize it :

$current_page = sanitize_post($GLOBALS['wp_the_query']->get_queried_object());

$pageSlug = $current_page->post_name;

$smarty->assign('pageSlug', $pageSlug);

$page_id = $current_page->ID;

$smarty->assign('pageID', $page_id);

$smarty->assign('pageTitle', get_the_title($page_id));

$smarty->assign('themeURL', THEME_URI);

$smarty->assign('homeURL', get_bloginfo('url'));

$smarty->assign('siteTitle', get_bloginfo('name'));

$smarty->assign('currentYear', date('Y'));

$smarty->assign('facebook', get_field('facebook', 'option'));
$smarty->assign('linkedin', get_field('linkedin', 'option'));
$smarty->assign('twitter', get_field('twitter', 'option'));