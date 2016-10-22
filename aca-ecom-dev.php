<?php
/**
 * Plugin Name: ACA Ecommerce Plugin
 * Plugin URI: http://alexrusin.com
 * Description: A simple plugin that create ecommerce capabilities to your website.
 * Version: 0.1
 * Author: Alex Rusin
 * Author URI: http://alexrusin.com
 * License: GPL2
 */

/*  @2016  Alex Rusin (email : alex@alexrusin.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

    //Exit if accessed directly
if(!defined('ABSPATH')){
    exit;
}

require_once (plugin_dir_path(__FILE__).'/inc/class.CustomPost.inc');
require_once (plugin_dir_path(__FILE__).'/inc/class.ACAProductPost.inc');
require_once (plugin_dir_path(__FILE__).'/inc/class.CustomTaxonomy.inc');

require_once (plugin_dir_path(__FILE__).'inc/enqueues.php');

$aca_custom_post = new ACAProductPost("Product", "Products");
$aca_custom_tax = new CustomTaxonomy("Product Category", "Product Categories", $aca_custom_post->get_slug());
// Flush rewrite rules to add "review" as a permalink slug
function aca_rewrite_flush() {
    //$aca_custom_post->register_post();
    flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'aca_rewrite_flush' );

//import custom fields for product category
include_once(plugin_dir_path(__FILE__).'advanced-custom-fields/acf.php');
include_once(plugin_dir_path(__FILE__).'inc/customfields.php');
//define( 'ACF_LITE', true );