<?php

/**
 * Plugin Name:       Add Customizer
 * Plugin URI:        https://github.com/Kcor555/add-customizer
 * Description:       Adds a customizer option in the appearance menu.
 * Author:            Kris Cochran
 * Author URI:        https://github.com/Kcor555
 * Version:           1.0
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Copyright 2022 by Kris Cochran - All rights reserved.
 */

function add_customizer(): void {
	add_theme_page(
		'Customizer',
		'Customizer',
		'edit_theme_options',
		'customize.php'
	);
}

add_action( 'admin_menu', 'add_customizer' );
