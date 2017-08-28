<?php
/**
 * Created by IntelliJ IDEA.
 * User: jasenpeterson
 * Date: 8/26/17
 * Time: 10:17 PM
 */

if (! defined('WPINC')) {
    die;
}

defined('THEME_DIR') or define('THEME_DIR', get_template_directory());
defined('THEME_URI') or define('THEME_URI', get_template_directory_uri());
defined('THEME_ROOT') or define('THEME_ROOT', get_home_url());

// smarty template engine :

require(THEME_DIR . '/smarty/libs/Smarty.class.php');

class Smarty_Base extends Smarty
{
    public function __construct()
    {
        parent::__construct();


        $this->setTemplateDir(THEME_DIR . '/smarty_templates');
        $this->setCompileDir(THEME_DIR . '/smarty_templates_c');
        $this->setCacheDir(THEME_DIR . '/smarty/libs/cache');
        $this->setConfigDir(THEME_DIR . '/smarty/libs/configs');
    }
}

// make sure wp_title, wp_head, and wp_footer are sent to all smarty templates :

class Smarty_Wordpress extends Smarty_Base
{
    public function __construct()
    {
        parent::__construct();

        $wptitle = wp_title(' | ', false, 'right');
        if ($wptitle) {
            $this->assign('page_title', sprintf("%s %s", $wptitle, get_bloginfo('name')));
        } else {
            $this->assign('page_title', sprintf("%s", get_bloginfo('name')));
        }

        $this->assign('resource', get_stylesheet_directory_uri() . '/resource');

        /* get wp_head */
        ob_start();
        wp_head();
        $this->assign('wp_head', ob_get_contents());
        ob_end_clean();

        /* get wp_footer */
        ob_start();
        wp_footer();
        $this->assign('wp_footer', ob_get_contents());
        ob_end_clean();
    }
}

$smarty = new Smarty_Base();

// theme assets :

function theme_assets()
{
    wp_enqueue_script('javascript', THEME_URI . '/javascript/global.js', array(), null, true);
    wp_enqueue_style('turret-css', THEME_URI . '/includes/turretcss.min.css', array(), null);
    wp_enqueue_style('flexbox-grid-css', THEME_URI . '/includes/flexboxgrid.css', array(), null);
    wp_enqueue_style('css', THEME_URI . '/styles/global.css', array(), null);

    $ajax_url = admin_url('admin-ajax.php');

    global $wp_query;

    $pageParams = array(

        'siteURL' => THEME_URI,
        'root'    => get_home_url(),
        'ajaxurl'  => $ajax_url,
        'noposts'  => esc_html__('No older posts found'),
        'loadmore' => esc_html__('Load more'),
    );

    wp_localize_script('javascript', 'pageParams', $pageParams);
}

add_action('wp_enqueue_scripts', 'theme_assets');

// add additional body classes :

function add_slug_body_class($classes)
{
    global $post;
    if (isset($post)) {
        $classes[] = $post->post_type . '-' . $post->post_name;

        foreach (get_the_category() as $category) {
            $cat_name = $category->cat_name;

            $cat_name = str_replace(' ', '-', strtolower($cat_name));

            $classes[] = $cat_name . ' ';
        }
    }

    return $classes;
}

add_filter('body_class', 'add_slug_body_class');

// featured image support :

add_theme_support('post-thumbnails');

// ACF - google API key :

function acf_google_maps_api()
{
    acf_update_setting('google_api_key', 'AIzaSyA3Ibb_wNxXG5xwHIWvti3Ni_qYybQMNac');
}

add_action('acf/init', 'acf_google_maps_api');

// iframe filter :

function filter_ptags_on_images($content)
{
    $content = preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
    return preg_replace('/<p>\s*(<iframe .*>*.<\/iframe>)\s*<\/p>/iU', '\1', $content);
}

// IFRAME WRAPPER

function iframe_wrapper($content)
{

    // match any iframes
    $pattern = '~<iframe.*</iframe>|<embed.*</embed>~';

    preg_match_all($pattern, $content, $matches);


    foreach ($matches[0] as $match) {
        // wrap matched iframe with div

        $wrappedframe = '<section class="responsive-video-container">' . $match . '</section>';

        //replace original iframe with new in content
        $content = str_replace($match, $wrappedframe, $content);
    }


    return $content;
}

// blacklist wordpress nav class names - https://wpscholar.com/blog/remove-extraneous-wordpress-nav-menu-class-names/ :

add_filter('nav_menu_css_class', function (array $classes, $item, $args, $depth) {
    $disallowed_class_names = array(
        "menu-item-object-{$item->object}",
        "menu-item-type-{$item->type}",
        "menu-item-{$item->ID}",
        "current-{$item->object}-parent",
        "current-{$item->type}-parent",
        "current-{$item->object}-ancestor",
        "current-{$item->type}-ancestor",
        'page_item',
        'page_item_has_children',
        "page-item-{$item->object_id}",
        'current_page_item',
        'current_page_parent',
        'current_page_ancestor',
    );
    foreach ($classes as $class) {
        if (in_array($class, $disallowed_class_names)) {
            $key = array_search($class, $classes);
            if (false !== $key) {
                unset($classes[ $key ]);
            }
        }
    }

    return $classes;
}, 10, 4);

// allow all tiny mce html tags :

function override_mce_options($initArray)
{
    $opts = '*[*]';
    $initArray['valid_elements'] = $opts;
    $initArray['extended_valid_elements'] = $opts;
    return $initArray;
}
add_filter('tiny_mce_before_init', 'override_mce_options');

// register menus :

register_nav_menus(array(

    'primary_menu'   => __('Primary Menu'),
    'secondary_menu' => __('Secondary Menu'),
    'mobile_menu' => __('Mobile Menu'),
    'footer_menu'    => __('Footer Menu'),

));

// custom excerpt length :

function excerpt($limit)
{
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ", $excerpt).'...';
    } else {
        $excerpt = implode(" ", $excerpt);
    }
    $excerpt = preg_replace('`[[^]]*]`', '', $excerpt);
    return $excerpt;
}

function content($limit)
{
    $content = explode(' ', get_the_content(), $limit);
    if (count($content)>=$limit) {
        array_pop($content);
        $content = implode(" ", $content).'...';
    } else {
        $content = implode(" ", $content);
    }
    $content = preg_replace('/[.+]/', '', $content);
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]&gt;', $content);
    return $content;
}