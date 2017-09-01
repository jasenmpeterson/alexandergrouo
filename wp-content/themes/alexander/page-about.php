<?php
/**
 * Created by IntelliJ IDEA.
 * User: jasenpeterson
 * Date: 8/30/17
 * Time: 12:28 PM
 * Template Name: About Page
 */

get_header();

global $smarty;

// about us video:
$about_us_video = get_field('about_page_introduction_video', $page_id, false, false);
$smarty->assign('about_us_video', $about_us_video);

$smarty->display(THEME_DIR . '/smarty_templates/pages/about.tpl');

get_footer();