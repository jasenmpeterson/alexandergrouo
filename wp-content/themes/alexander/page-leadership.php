<?php
/**
 * Created by IntelliJ IDEA.
 * User: jasenpeterson
 * Date: 9/2/17
 * Time: 8:06 PM
 * Template Name: Leadership
 */

get_header();

$current_page = sanitize_post($GLOBALS['wp_the_query']->get_queried_object());

$page_id = $current_page->ID;

global $smarty;

// leadership profiles:
$smarty->assign('leadership_profiles', get_field('leadership', $page_id));

$smarty->display(THEME_DIR . '/smarty_templates/pages/leadership.tpl');

get_footer();