<?php 

//Plugin name: Dark mode
//Description: Activa el modo oscuro de tu theme
//version: 1.0
//Author: Sebastian Mitre
//Author Uri: https://github.com/smmitre

function estilos_plugin() {

    $estilos_url = plugin_dir_url(__FILE__);

    wp_enqueue_style( 'modo_oscuro', $estilos_url.'/assets/css/estilo.css', '', '1.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'estilos_plugin' );