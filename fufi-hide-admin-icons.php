<?php
/*
Plugin Name: Hide Admin Icons
Plugin URI: http://wordpress.org/plugins/hide-admin-icons/
Description: Hides the icons in the admin menu and page titles.
Version: 1.4
Author: Barry Ceelen
Author URI: http://functionsfile.com

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
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

add_action( 'admin_enqueue_scripts', 'fufi_hai_admin_enqueue_scripts' );

function fufi_hai_admin_enqueue_scripts() {
	wp_enqueue_style( 'fufi_hide_admin_icons', plugins_url( 'fufi-hide-admin-icons.css', __FILE__) );
}
