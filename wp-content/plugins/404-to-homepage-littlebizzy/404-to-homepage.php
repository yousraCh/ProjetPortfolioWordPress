<?php
/*
Plugin Name: 404 To Homepage
Plugin URI: https://www.littlebizzy.com/plugins/404-to-homepage
Description: Redirects all 404 (Not Found) errors to the homepage for a better user experience, less abuse from bots, and 100% elimination of Google GSC warnings.
Version: 1.0.1
Author: LittleBizzy
Author URI: https://www.littlebizzy.com

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

Copyright 2016 by LittleBizzy

*/


/* Initialization */

// Avoid script calls via plugin URL
if (!function_exists('add_action'))
	die;

// This plugin constants
define('NTFTHP_FILE', __FILE__);
define('NTFTHP_PATH', dirname(NTFTHP_FILE));
define('NTFTHP_VERSION', '1.0');


/* 404 hooks */

/**
 * Early method to detect 404 context
 * Minimum WP version: 4.5.0
 */
add_filter('pre_handle_404', 'ntfthp_pre_handle_404', 0, 2);
function ntfthp_pre_handle_404($preempt, $wp_query) {
	if ($wp_query->is_404()) {
		require_once(NTFTHP_PATH.'/404-redirect.php');
		NTFTHP_Redirect::go();
	}
	return $preempt;
}

/**
 * Detect 404 on 'wp' hook
 * For any WP version
 */
add_action('wp', 'ntfthp_wp');
function ntfthp_wp() {
	if (is_404()) {
		require_once(NTFTHP_PATH.'/404-redirect.php');
		NTFTHP_Redirect::go();
	}
}