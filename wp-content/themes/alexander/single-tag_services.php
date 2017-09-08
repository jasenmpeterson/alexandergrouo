<?php
/**
 * Created by IntelliJ IDEA.
 * User: jasenpeterson
 * Date: 9/8/17
 * Time: 10:17 AM
 */

get_header();

$current_page = sanitize_post($GLOBALS['wp_the_query']->get_queried_object());

$page_id = $current_page->ID;

global $smarty;

$smarty->assign('page_id', $page_id);

$smarty->assign('page_title', get_the_title($page_id));

$page = get_post($page_id);
$smarty->assign('page_content', apply_filters('the_content', wpautop($page->post_content)));

$smarty->display(THEME_DIR . '/smarty_templates/pages/single-service.tpl');

get_footer();