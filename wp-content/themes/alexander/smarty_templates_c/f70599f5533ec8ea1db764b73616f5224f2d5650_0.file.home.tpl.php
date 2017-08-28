<?php
/* Smarty version 3.1.30, created on 2017-08-28 13:40:43
  from "/Users/jasenpeterson/www/alexandergroup/wp-content/themes/alexander/smarty_templates/pages/home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a41d5ba72210_55190449',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f70599f5533ec8ea1db764b73616f5224f2d5650' => 
    array (
      0 => '/Users/jasenpeterson/www/alexandergroup/wp-content/themes/alexander/smarty_templates/pages/home.tpl',
      1 => 1503927639,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59a41d5ba72210_55190449 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/Users/jasenpeterson/www/alexandergroup/wp-content/themes/alexander/smarty/libs/plugins/modifier.date_format.php';
?>
<section class="page--banner home--banner row center-xs middle-xs swatch color-dark background-light-400">
    <div class="col-xs">
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    </div>
</section>

<section class="home--about--section row">
    <div class="col-xs">
        <div class="row">
            <div class="col-xs-2 swatch color-dark background-light-400"></div>
            <div class="col-xs">
                <div class="row">
                    <div class="col-xs">

                    </div>
                    <div class="col-xs-6 swatch color-dark background-light-400">
                        <?php echo $_smarty_tpl->tpl_vars['about_content']->value;?>

                    </div>
                </div>
            </div>
        </div>
        <div class="row company--motto middle-xs center-xs">
            <section class="col-xs-12">
                <?php echo $_smarty_tpl->tpl_vars['company_motto']->value;?>

            </section>
        </div>
    </div>
    <div class="col-xs-3">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
            <?php echo $_smarty_tpl->tpl_vars['post']->value->post_excerpt;?>

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>
    <div class="col-xs-1 swatch color-dark background-light-400"></div>
</section>

<section class="home--expertise--section row">
    <div class="col-xs-6">

    </div>
    <div class="col-xs">
        <?php echo $_smarty_tpl->tpl_vars['expertise_content']->value;?>

    </div>
</section>

<section class="home--locations--section row">
    <div class="col-xs-6">
        <div class="row">
            <section class="col-xs-12 home--locations--content">
                <?php echo $_smarty_tpl->tpl_vars['locations_content']->value;?>

            </section>
        </div>
        <div class="row">
            <div class="col-xs-1 swatch color-dark background-light-400"></div>
            <section class="col-xs-4 home--locations-list">
                <ul>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['locations_list']->value, 'location');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['location']->value) {
?>
                        <li><?php echo $_smarty_tpl->tpl_vars['location']->value['location'];?>
</li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
            </section>
        </div>
    </div>
    <div class="col-xs swatch color-dark background-light-400"></div>
</section>

<section class="home--tag--news row">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tag_news']->value, 'news');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
?>
        <div class="col-xs-4">
            <span class="date--object"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['news']->value->post_date);?>
</span>
            <h3><?php echo $_smarty_tpl->tpl_vars['news']->value->post_title;?>
</h3>
        </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</section><?php }
}
