<?php
/**
 * Created by IntelliJ IDEA.
 * User: jasenpeterson
 * Date: 9/2/17
 * Time: 8:06 PM
 * Template Name: Leadership
 */

get_header();

global $smarty;

// leadership profiles:
$smarty->assign('leadership_profiles', get_field('leadership', $page_id));

$smarty->display(THEME_DIR . '/smarty_templates/pages/leadership.tpl');

get_footer();