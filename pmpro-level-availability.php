<?php
defined('ABSPATH') or die('No script kiddies please!');
/**
 * Plugin Name: Paid Memberships Pro - Membership Level Availability WordPress plugin
 * Description: Allow membership levels to be available for a limited time
 * Version: 0.0.1
 * Author: Jermaine McFarlane
 * Author URI: mailto://j.mcfarlane.mbbs@gmail.com
 */

// Define constants
define('PMPROLA_ROOT', __DIR__.'/');
define('PMPROLA_INCLUDES', PMPROLA_ROOT.'includes/');
define('PMPROLA_VIEWS', PMPROLA_ROOT.'views/');

include PMPROLA_INCLUDES.'Main.php';
$pmproLA = new \PMProLA\Main();
