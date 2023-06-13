<?php
/*
    * Plugin Name: Cadastrar local e data da palestra
    * Description: Plugin para cadastrar local e data da proxima palestra realizada pela Alura
    * Version: 1.0.0
    * Author: Vítor Cavalcante Souza
*/

if (!defined('ABSPATH')) {
    die;
}


require_once plugin_dir_path(__FILE__) . '/includes/al_local_dia_palestra_settings.php';
require_once plugin_dir_path(__FILE__) . '/includes/al_local_dia_palestra_shortcode.php';
require_once plugin_dir_path(__FILE__) . '/includes/al_local_dia_palestra_scripts.php';
