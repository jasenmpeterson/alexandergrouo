<?php
/**
 * Created by IntelliJ IDEA.
 * User: jasenpeterson
 * Date: 9/3/17
 * Time: 9:33 PM
 * Template Name: Expertise
 */

get_header();

global $smarty;

$smarty->assign('headline', get_field('headline', $page_id));
$smarty->assign('hero_text', get_field('hero_text', $page_id));
$smarty->assign('content_block', get_field('content_block', $page_id));
$smarty->assign('content_block_two', get_field('content_block_two', $page_id));
$smarty->assign('content_block_three', get_field('content_block_three', $page_id));
$smarty->assign('experience_stats', get_field('experience_stats', $page_id));
$smarty->assign('content_block_image', get_field('content_block_image', $page_id));

$smarty->display(THEME_DIR . '/smarty_templates/pages/expertise.tpl');

get_footer();