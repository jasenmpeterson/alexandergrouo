<?php
/* Smarty version 3.1.30, created on 2017-09-06 16:47:01
  from "/Users/jasenpeterson/www/alexandergroup/wp-content/themes/alexander/smarty_templates/components/navigation.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b02685aa5e45_04100236',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52dbc050d4a95335729171575e5092353344eb62' => 
    array (
      0 => '/Users/jasenpeterson/www/alexandergroup/wp-content/themes/alexander/smarty_templates/components/navigation.tpl',
      1 => 1504716416,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../components/social_media.tpl' => 1,
  ),
),false)) {
function content_59b02685aa5e45_04100236 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="nav-inline">
    <?php echo $_smarty_tpl->smarty->registered_objects['navigation'][0]->display_navigation(array(),$_smarty_tpl);?>

</nav>

<nav class="mobile--menu box--shadow--all">
    <?php echo $_smarty_tpl->smarty->registered_objects['navigation'][0]->display_navigation(array(),$_smarty_tpl);?>

    <?php $_smarty_tpl->_subTemplateRender("file:../components/social_media.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</nav><?php }
}
