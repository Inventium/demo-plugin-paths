<?php
/*
 Plugin Name: Demo Plugin Paths
 Plugin URI: http://website-in-a-weekend.net/plugins/demo-plugins/
 Description: A brief description of the Plugin.
 Version: 0.1
 Author: Dave Doolin
 Author URI: http://website-in-a-weekend.net/
 */

/*  Copyright 2009 David M. Doolin  (email : david.doolin@gmail.com)
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
 */



if (!class_exists("demo_plugin_paths")) {
	
    class demo_plugin_paths {

        function demo_plugin_paths() {
            add_action('admin_menu', array(&$this, 'on_admin_menu'));
        }

        function on_admin_menu() {
            add_options_page('Demo Paths Page', 'Demo Paths', 8, __FILE__ , array (&$this, 'paths_options'));
        }

        function paths_options() {
        	/**
        	 * Move all the html to it's own
        	 * file, makes everything much cleaner.
        	 */
            include('paths.html');	
		}
        
    }
	
}
					
					
$wpdpd = new demo_plugin_paths();

?>
