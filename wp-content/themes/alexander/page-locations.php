<?php
/**
 * Created by IntelliJ IDEA.
 * User: jasenpeterson
 * Date: 9/4/17
 * Time: 8:42 PM
 * Template Name: Locations
 */


get_header();

$current_page = sanitize_post($GLOBALS['wp_the_query']->get_queried_object());

$page_id = $current_page->ID;

global $smarty;

$smarty->assign('locations', get_field('locations', $page_id));
$smarty->assign('locations_title', get_field('locations_title', $page_id));
$smarty->assign('locations_content', get_field('locations_content', $page_id));
$smarty->assign('locations_form', do_shortcode('[contact-form-7 id="728" title="Locations Form"]'));

$smarty->display(THEME_DIR . '/smarty_templates/pages/locations.tpl');

get_footer();