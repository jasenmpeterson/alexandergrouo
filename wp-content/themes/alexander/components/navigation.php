<?php
/**
 * Created by IntelliJ IDEA.
 * User: jasenpeterson
 * Date: 8/26/17
 * Time: 10:58 PM
 */

class navigation {

	public function display_navigation() {

		wp_nav_menu(array(

			'theme_location' => 'primary_menu',
			'container' => false,
			'menu_id' => 'desktop',
			'menu_class' => 'desktop'

		));

		return;
	}
}

get_template_part('variables');

global $smarty;

$navigation = new navigation();

$smarty->registerObject('navigation', $navigation);

$smarty->display(THEME_DIR . '/smarty_templates/components/navigation.tpl');