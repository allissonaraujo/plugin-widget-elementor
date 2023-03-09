<?php
/*
Plugin Name: Nome do plugin
Plugin URI: http://sitedoplugin.com
Description: Descrição do plugin
Version: 1.0
Author: Nome do Autor 
Author URI: http://seusite.com
*/

// Registrar o addon no Elementor
add_action( 'elementor/widgets/widgets_registered', function() {
    // Widget class
    class Exemplo_Widget extends \Elementor\Widget_Base {

        // Nome do widget 
        public function get_name() {
            return 'nome-widget';
        }

        // Título do widget
        public function get_title() {
            return __( 'Seu widget', 'elementor' );
        }

        // Ícone do widget 
        public function get_icon() {
            return 'eicon-pro-icon';
        }

        // Categoria do widget no painel do Elementor
        public function get_categories() {
            return [ 'general' ];
        }

        // Conteúdo do widget - Código lógico 
        protected function render() {
            echo 'Conteúdo do seu widget aqui';
        }
    }

    // Registrar o widget no Elementor
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Exemplo_Widget() );
} );
