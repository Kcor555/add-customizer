<?php

/**
 * Plugin Name:       Add Customizer
 * Plugin URI:        https://wordpress.org/plugins/search/add-customizer/
 * Description:       Adds the customizer link in the admin appearance menu.
 * Author:            Kris Cochran
 * Author URI:        https://github.com/Kcor555
 * Version:           1.0
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Copyright 2022 by Kris Cochran - All rights reserved.
 */

add_action( 'admin_menu',
	function () {
		add_theme_page(
			__('Customizer', 'add-customizer'),
			__('Customizer', 'add-customizer'),
			'edit_theme_options',
			'customize.php'
		);
	}
);
