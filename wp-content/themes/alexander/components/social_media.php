<?php
/**
 * Created by IntelliJ IDEA.
 * User: jasenpeterson
 * Date: 8/27/17
 * Time: 2:35 PM
 */

get_template_part('variables');

global $smarty;

$smarty->display(THEME_DIR . '/smarty_templates/components/social_media.tpl');