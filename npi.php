<?php

defined('ABSPATH') or die('No script kiddies please!!');
/**
 * Plugin Name:       Npi 
 * Plugin URI:        https://santoshpanta.com/
 * Description:       A contact form for npi.
 * Version:           1.0.0
 * Requires at least: 5.4
 * Author:            Santosh Panta
 * Author URI:        https://santoshpanta.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       npi
 * Domain Path:       /languages
 */

if(!class_exists('NPI')) {
    
    class NPI
    {
        
        function __construct()
        {
            $this->define_constants();   
            $this->register_settings();
            
            add_action('admin_menu', array( $this, 'npi_admin_menu' ));
            add_shortcode('npi-contact-form', array( $this, 'contact_form_design' ));
        }

        function define_constants()
        {

            defined('NPI_PATH') or define('NPI_PATH', plugin_dir_path(__FILE__));
            defined('NPI_URL') or define('NPI_URL', plugin_dir_url(__FILE__));
            defined('NPI_VERSION') or define('NPI_VERSION', '1.0.0');
        }
        
        function npi_admin_menu()
        {
            add_menu_page('NPI Contact Form', 'NPI Contact', 'manage_options', 'npi', array( $this, 'ss_settings_page' ), 'dashicons-share');
        }

        function ss_settings_page()
        {
        }

        function register_settings()
        {
        }

        function contact_form_design()
        {
            echo "I am a contact form from NPI contact form plugin.";
        }
    }
    new NPI;
}