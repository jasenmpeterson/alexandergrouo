<?php
/* Smarty version 3.1.30, created on 2017-09-05 18:22:15
  from "/Users/jasenpeterson/www/alexandergroup/wp-content/themes/alexander/smarty_templates/pages/home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59aeeb57535705_47389738',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f70599f5533ec8ea1db764b73616f5224f2d5650' => 
    array (
      0 => '/Users/jasenpeterson/www/alexandergroup/wp-content/themes/alexander/smarty_templates/pages/home.tpl',
      1 => 1504635728,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59aeeb57535705_47389738 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="home--page--banner page--banner row center-xs middle-xs">
    <section class="page--banner--image" style="background: url(<?php echo $_smarty_tpl->tpl_vars['featured_image']->value;?>
)"></section>
    <div class="col-xs page--banner--content">
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="926.945 947.945 60.109 60.109" class="scroll--down">
            <g transform="translate(811.5 954.5)">
                <circle cx="28.055" cy="28.055" r="28.055" transform="translate(117.445 -4.555)"></circle>
                <path d="M129.52 21.014l16.336 7.813 16.336-7.813"></path>
            </g>
        </svg>
    </div>
</section>
<section style="visibility: hidden; position: relative; top: -150px" class="hidden-anchor"></section>
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

<section class="home--expertise--section row middle-xs">
    <div class="col-xs-6 page--banner--image--container">
        <section class="page--banner--image expertise--page--image" style="background: url(<?php echo $_smarty_tpl->tpl_vars['expertise_image']->value;?>
)"></section>
    </div>
    <div class="col-xs home-page-expertise-content">
        <section class="box">
            <?php echo $_smarty_tpl->tpl_vars['expertise_content']->value;?>

            <a href="<?php echo $_smarty_tpl->tpl_vars['exprtise_link']->value;?>
" class="button--default">
                <span>Read More</span>
                <div class="line"></div>
            </a>
        </section>
    </div>
</section>

<section class="home--locations--section row">
    <div class="col-xs-4">
        <div class="row">
            <section class="col-xs-12 home--locations--content">
                <div class="box">
                    <?php echo $_smarty_tpl->tpl_vars['locations_content']->value;?>

                </div>
            </section>
        </div>
        <div class="row">
            <div class="col-xs-3 silver"></div>
            <section class="col-xs-9 home--locations-list baby--blue--gradient">
                <div class="box">
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
                    <a href="<?php echo $_smarty_tpl->tpl_vars['locations_link']->value;?>
" class="button--default button--reverse">
                        <span>View all our locations</span>
                        <div class="line"></div>
                    </a>
                </div>
            </section>
        </div>
    </div>
    <div class="col-xs-8 page--banner--image--container">
        <section class="page--banner--image locations--page--image" style="background: url(<?php echo $_smarty_tpl->tpl_vars['locations_image']->value;?>
)"></section>
    </div>
</section>

<section class="home--tag--news row">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tag_news']->value, 'news');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
?>
        <div class="col-xs-4">
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['news']->value['link_or_media'];
$_prefixVariable1=ob_get_clean();
if ($_prefixVariable1 === 'Media') {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['news']->value['media'];?>
" target="_blank">
                <?php } else { ?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['news']->value['link'];?>
" target="_blank">
            <?php }?>
                <span class="post--date"><?php echo $_smarty_tpl->tpl_vars['news']->value['date'];?>
</span>
                <h1><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</h1>
            </a>
        </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</section><?php }
}
