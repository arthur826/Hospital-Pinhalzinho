<?php

/*HEADER E FOOTER*/

function registrar_menu_header_links_de_paginas() {
    register_nav_menu('menu-header-links-de-paginas',__('Menu Header Links de Páginas')); //Criar funcão para registar o menu
}
function registrar_menu_footer_links_de_paginas() {
    register_nav_menu('menu-footer-links-de-paginas',__('Menu Footer Links de Páginas')); //Criar funcão para registar o menu
}
function registrar_menu_footer_links_uteis() {
    register_nav_menu('menu-footer-links-uteis',__('Menu Footer Links Úteis')); //Criar funcão para registar o menu
}


add_action('init', 'registrar_menu_header_links_de_paginas');//Inicializar função do menu
add_action('init', 'registrar_menu_footer_links_de_paginas');//Inicializar função do menu
add_action('init', 'registrar_menu_footer_links_uteis');//Inicializar função do menu


/**BLOG**/

function theme_setup() {
     add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_setup');

function custom_image_sizes() {
    add_image_size('post-default', 800, 600, true); // Exemplo de tamanho de imagem personalizado
}
add_action('after_setup_theme', 'custom_image_sizes');
?>

