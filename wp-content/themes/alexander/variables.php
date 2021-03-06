<?php
/**
 * Created by IntelliJ IDEA.
 * User: jasenpeterson
 * Date: 8/26/17
 * Time: 10:47 PM
 */

global $smarty;

// get the queried object and sanitize it :

$smarty->assign('pageTitle', get_the_title($page_id));

$smarty->assign('themeURL', THEME_URI);
$smarty->assign('siteURL', THEME_ROOT);

$smarty->assign('homeURL', get_bloginfo('url'));

$smarty->assign('siteTitle', get_bloginfo('name'));

$smarty->assign('currentYear', date('Y'));

$smarty->assign('facebook', get_field('facebook', 'option'));
$smarty->assign('linkedin', get_field('linkedin', 'option'));
$smarty->assign('twitter', get_field('twitter', 'option'));

$featured_image_src = wp_get_attachment_image_src(get_post_thumbnail_id($page_id), 'full-size');
$featured_image = $featured_image_src[0];
$smarty->assign('featured_image', $featured_image);

$smarty->assign('page_title', get_the_title($page_id));