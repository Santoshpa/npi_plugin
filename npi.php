<?php

defined('ABSPATH') or die('No script kiddies please!!');
/**
 * Plugin Name:       Npi 
 * Plugin URI:        https://santoshpanta.com/
 * Description:       A contact form for npi.
 * Version:           1.0.0
 * Requires at least: 5.4
 * Requires PHP:      7.4
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
            $this->hello();
        }

        function hello()
        {
            echo 'Hello Npi College';
        }
        
    }

    new NPI;
}
