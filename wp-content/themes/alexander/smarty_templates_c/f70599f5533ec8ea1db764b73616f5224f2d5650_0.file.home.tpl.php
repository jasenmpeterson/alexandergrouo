<?php
/* Smarty version 3.1.30, created on 2017-08-29 15:10:00
  from "/Users/jasenpeterson/www/alexandergroup/wp-content/themes/alexander/smarty_templates/pages/home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a583c89f0059_19887416',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f70599f5533ec8ea1db764b73616f5224f2d5650' => 
    array (
      0 => '/Users/jasenpeterson/www/alexandergroup/wp-content/themes/alexander/smarty_templates/pages/home.tpl',
      1 => 1504019390,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59a583c89f0059_19887416 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="home--page--banner page--banner row center-xs middle-xs">
    <section class="page--banner--image" style="background: url(<?php echo $_smarty_tpl->tpl_vars['featured_image']->value;?>
)"></section>
    <div class="col-xs page--banner--content">
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    </div>
</section>

<section class="home--about--section row">
    <div class="col-xs">
        <div class="row">
            <div class="col-xs-2 silver"></div>
            <div class="col-xs">
                <div class="row box--shadow--all">
                    <div class="col-xs page--banner--image--container">
                        <section class="page--banner--image about--page--image" style="background: url(<?php echo $_smarty_tpl->tpl_vars['about_page_image']->value['url'];?>
)"></section>
                    </div>
                    <div class="col-xs-4 baby--blue--gradient">
                        <div class="box">
                            <?php echo $_smarty_tpl->tpl_vars['about_content']->value;?>

                            <a href="<?php echo $_smarty_tpl->tpl_vars['about_link']->value;?>
" class="button--default">
                                <span>Learn More</span>
                                <div class="line"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row home--company--motto company--motto middle-xs center-xs">
            <section class="col-xs-12">
                <div class="box">
                    <?php echo $_smarty_tpl->tpl_vars['company_motto']->value;?>

                </div>
            </section>
        </div>
    </div>
    <div class="col-xs-3 silver">
        <section class="box">
            <section class="post--list">
                <section class="home--post--title post--title">Blog</section>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['link'];?>
">
                        <?php echo $_smarty_tpl->tpl_vars['post']->value['content'];?>

                    </a>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </section>
            <a href="<?php echo $_smarty_tpl->tpl_vars['blog_link']->value;?>
" class="button--default">
                <span>Read More</span>
                <div class="line"></div>
            </a>
        </section>
    </div>
    <div class="col-xs-1 dark--blue"></div>
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

    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</section><?php }
}
