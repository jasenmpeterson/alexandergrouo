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

// twitter :
require 'includes/vendor/autoload.php';
require(THEME_DIR . '/classes/twitter.php');

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
	wp_enqueue_script(
		'gmaps-api',
		'https://maps.googleapis.com/maps/api/js?key=AIzaSyA3Ibb_wNxXG5xwHIWvti3Ni_qYybQMNac',
		array(),
		null,
		true
	);

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
        'javascriptDirectory' => get_stylesheet_directory_uri() . '/javascript'
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

// acf options page(s) :

if(function_exists('acf_add_options_page')) {
	acf_add_options_page();
}

class pagination_links {

	function pagination($pages = '', $range = 4)
	{
		$showitems = ($range * 2)+1;

		global $paged;
		if(empty($paged)) $paged = 1;

		if($pages == '')
		{
			global $wp_query;
			$pages = $wp_query->max_num_pages;
			if(!$pages)
			{
				$pages = 1;
			}
		}

		if(1 != $pages)
		{
			$output = null;

			$output.= "<div class=\"pagination\"><span class=\"current--page\">Page ".$paged." of ".$pages."</span>";

			if($paged > 2 && $paged > $range+1 && $showitems < $pages)
				$output.= "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";

			if($paged > 1 && $showitems < $pages)
				$output.= "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";

			for ($i=1; $i <= $pages; $i++)
			{
				if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
				{
					$output.= ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
				}
			}

			if ($paged < $pages && $showitems < $pages)
				$output.= "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";
			if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages)
				$output.= "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
			$output.= "</div>\n";

			return $output;
		}
	}
}

// breadcrumbs :

class breadcrumbs {

	public function custom_breadcrumbs() {
		
		$output = null;

		// Settings
		$separator          = '&ndash;';
		$breadcrums_id      = 'breadcrumbs';
		$breadcrums_class   = 'breadcrumbs';
		$home_title         = 'blog';

		// If you have any custom post types with custom taxonomies, put the taxonomy name below (e.g. product_cat)
		$custom_taxonomy    = 'product_cat';

		// Get the query & post information
		global $post,$wp_query;

		// Do not display on the homepage
		if ( !is_front_page() ) {

			// Build the breadcrums
			$output.= '<ul id="' . $breadcrums_id . '" class="' . $breadcrums_class . '">';

			// Home page
			$output.= '<li class="item-home"><a class="bread-link bread-home" href="' . get_home_url() . '/blog" title="' . $home_title . '">' . $home_title . '</a></li>';
			$output.= '<li class="separator separator-home"> ' . $separator . ' </li>';

			if ( is_archive() && !is_tax() && !is_category() && !is_tag() ) {

				$output.= '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . post_type_archive_title($prefix, false) . '</strong></li>';

			} else if ( is_archive() && is_tax() && !is_category() && !is_tag() ) {

				// If post is a custom post type
				$post_type = get_post_type();

				// If it is a custom post type display name and link
				if($post_type != 'post') {

					$post_type_object = get_post_type_object($post_type);
					$post_type_archive = get_post_type_archive_link($post_type);

					$output.= '<li class="item-cat item-custom-post-type-' . $post_type . '"item-cat<a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
					$output.= '<li class="separator"> ' . $separator . ' </li>';

				}

				$custom_tax_name = get_queried_object()->name;
				$output.= '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . $custom_tax_name . '</strong></li>';

			} else if ( is_single() ) {

				// If post is a custom post type
				$post_type = get_post_type();

				// If it is a custom post type display name and link
				if($post_type != 'post') {

					$post_type_object = get_post_type_object($post_type);
					$post_type_archive = get_post_type_archive_link($post_type);

					$output.= '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
					$output.= '<li class="separator"> ' . $separator . ' </li>';

				}

				// Get post category info
				$category = get_the_category();

				if(!empty($category)) {

					// Get last category post is in
					$category = array_values($category);
					$last_category = end($category);

					// Get parent any categories and create array
					$get_cat_parents = rtrim(get_category_parents($last_category->term_id, true, ','),',');
					$cat_parents = explode(',',$get_cat_parents);

					// Loop through parent categories and store in variable $cat_display
					$cat_display = '';

				}

				// If it's a custom post type within a custom taxonomy
				$taxonomy_exists = taxonomy_exists($custom_taxonomy);
				if(empty($last_category) && !empty($custom_taxonomy) && $taxonomy_exists) {

					$taxonomy_terms = get_the_terms( $post->ID, $custom_taxonomy );
					$cat_id         = $taxonomy_terms[0]->term_id;
					$cat_nicename   = $taxonomy_terms[0]->slug;
					$cat_link       = get_term_link($taxonomy_terms[0]->term_id, $custom_taxonomy);
					$cat_name       = $taxonomy_terms[0]->name;

				}

				// Check if the post is in a category
				if(!empty($last_category)) {
					$output.= $cat_display;
					$output.= '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';

					// Else if post is in a custom taxonomy
				} else if(!empty($cat_id)) {

					$output.= '<li class="item-cat item-cat-' . $cat_id . ' item-cat-' . $cat_nicename . '"><a class="bread-cat bread-cat-' . $cat_id . ' bread-cat-' . $cat_nicename . '" href="' . $cat_link . '" title="' . $cat_name . '">' . $cat_name . '</a></li>';
					$output.= '<li class="separator"> ' . $separator . ' </li>';
					$output.= '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';

				} else {

					$output.= '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';

				}

			} else if ( is_category() ) {

				// Category page
				$output.= '<li class="item-current item-cat"><strong class="bread-current bread-cat">' . single_cat_title('', false) . '</strong></li>';

			} else if ( is_page() ) {

				// Standard page
				if( $post->post_parent ){

					// If child page, get parents
					$anc = get_post_ancestors( $post->ID );

					// Get parents in the right order
					$anc = array_reverse($anc);

					// Parent page loop
					if ( !isset( $parents ) ) $parents = null;
					foreach ( $anc as $ancestor ) {
						$parents .= '<li class="item-parent item-parent-' . $ancestor . '"><a class="bread-parent bread-parent-' . $ancestor . '" href="' . get_permalink($ancestor) . '" title="' . get_the_title($ancestor) . '">' . get_the_title($ancestor) . '</a></li>';
						$parents .= '<li class="separator separator-' . $ancestor . '"> ' . $separator . ' </li>';
					}

					// Display parent pages
					$output.= $parents;

					// Current page
					$output.= '<li class="item-current item-' . $post->ID . '"><strong title="' . get_the_title() . '"> ' . get_the_title() . '</strong></li>';

				} else {

					// Just display current page if not parents
					$output.= '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '"> ' . get_the_title() . '</strong></li>';

				}

			} else if ( is_tag() ) {

				// Tag page

				// Get tag information
				$term_id        = get_query_var('tag_id');
				$taxonomy       = 'post_tag';
				$args           = 'include=' . $term_id;
				$terms          = get_terms( $taxonomy, $args );
				$get_term_id    = $terms[0]->term_id;
				$get_term_slug  = $terms[0]->slug;
				$get_term_name  = $terms[0]->name;

				// Display the tag name
				$output.= '<li class="item-current item-tag-' . $get_term_id . ' item-tag-' . $get_term_slug . '"><strong class="bread-current bread-tag-' . $get_term_id . ' bread-tag-' . $get_term_slug . '">' . $get_term_name . '</strong></li>';

			} elseif ( is_day() ) {

				// Day archive

				// Year link
				$output.= '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
				$output.= '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';

				// Month link
				$output.= '<li class="item-month item-month-' . get_the_time('m') . '"><a class="bread-month bread-month-' . get_the_time('m') . '" href="' . get_month_link( get_the_time('Y'), get_the_time('m') ) . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</a></li>';
				$output.= '<li class="separator separator-' . get_the_time('m') . '"> ' . $separator . ' </li>';

				// Day display
				$output.= '<li class="item-current item-' . get_the_time('j') . '"><strong class="bread-current bread-' . get_the_time('j') . '"> ' . get_the_time('jS') . ' ' . get_the_time('M') . ' Archives</strong></li>';

			} else if ( is_month() ) {

				// Month Archive

				// Year link
				$output.= '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
				$output.= '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';

				// Month display
				$output.= '<li class="item-month item-month-' . get_the_time('m') . '"><strong class="bread-month bread-month-' . get_the_time('m') . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</strong></li>';

			} else if ( is_year() ) {

				// Display year archive
				$output.= '<li class="item-current item-current-' . get_the_time('Y') . '"><strong class="bread-current bread-current-' . get_the_time('Y') . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</strong></li>';

			} else if ( is_author() ) {

				// Auhor archive

				// Get the author information
				global $author;
				$userdata = get_userdata( $author );

				// Display author name
				$output.= '<li class="item-current item-current-' . $userdata->user_nicename . '"><strong class="bread-current bread-current-' . $userdata->user_nicename . '" title="' . $userdata->display_name . '">' . 'Author: ' . $userdata->display_name . '</strong></li>';

			} else if ( get_query_var('paged') ) {

				// Paginated archives
				$output.= '<li class="item-current item-current-' . get_query_var('paged') . '"><strong class="bread-current bread-current-' . get_query_var('paged') . '" title="Page ' . get_query_var('paged') . '">'.__('Page') . ' ' . get_query_var('paged') . '</strong></li>';

			} else if ( is_search() ) {

				// Search results page
				$output.= '<li class="item-current item-current-' . get_search_query() . '"><strong class="bread-current bread-current-' . get_search_query() . '" title="Search results for: ' . get_search_query() . '">Search results for: ' . get_search_query() . '</strong></li>';

			} elseif ( is_404() ) {

				// 404 page
				$output.= '<li>' . 'Error 404' . '</li>';
			}

			$output.= '</ul>';

			return $output;

		}

	}
}

// recent post widget :

function recent_post_widget() {

	register_sidebar( array(
		'name'          => 'Re',
		'id'            => 'recent_posts_widget',
	) );

}
add_action( 'widgets_init', 'recent_post_widget' );