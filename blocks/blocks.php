<?php
function register_acf_block_types() {

    // register Block.
    acf_register_block_type(array(
        'name'              => 'campana',
        'title'             => __('La campaña'),
        'description'       => __('A custom la campaña block.'),
        'render_template'   => 'blocks/la_campana.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'la campaña', 'dentista' ),
    ));
    // register Block.
    acf_register_block_type(array(
        'name'              => 'participaygana',
        'title'             => __('Participa y gana'),
        'description'       => __('A custom participa y gana block.'),
        'render_template'   => 'blocks/participa_y_gana.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'participa', 'dentista' ),
    ));
    // register Block.
    acf_register_block_type(array(
        'name'              => 'dondeestamos',
        'title'             => __('Dónde estamos'),
        'description'       => __('A custom dónde estamos block.'),
        'render_template'   => 'blocks/donde_estamos.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'dónde estamos', 'donde', 'dentista' ),
    ));
     // register Block.
    acf_register_block_type(array(
        'name'              => 'actualidad',
        'title'             => __('Actualidad'),
        'description'       => __('A custom actualidad block.'),
        'render_template'   => 'blocks/actualidad.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'actualidad', 'dentista' ),
        'enqueue_assets'    => function(){
            wp_enqueue_style( 'block-slider', get_template_directory_uri() . '/blocks/inc/owl.carousel.min.css' );
            wp_enqueue_script('cr-owl-carousel', get_template_directory_uri().'/blocks/inc/owl.carousel.min.js',  array(), '20130456', true );
            wp_enqueue_script( 'block-slider-script', get_template_directory_uri() . '/blocks/inc/script.js', array(), '20130457', true );
        },
    ));
     // register Block.
    acf_register_block_type(array(
        'name'              => 'Titulo',
        'title'             => __('Título con id (h2)'),
        'description'       => __('A custom título con id (anchor) block.'),
        'render_template'   => 'blocks/titulo_anchor.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'título', 'dentista' ),
    ));

}

// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
}
?>