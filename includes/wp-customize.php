<?php 

function cr_customize_register($wp_customize){

    //  ============================================================================================================
    //  = header             =
    //  ============================================================================================================
        // $wp_customize->add_section('cr_baner', array(
        //     'title'    => __('Banner', 'cr'),
        //     'description' => '',
        //     'priority' => 1,
        // ));

        // $wp_customize->add_setting( 'cr_baner_img' );

        // $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cr_baner_img', array(
        //     'label'    => __( 'baner', 'cr' ),
        //     'section'    => 'cr_baner',
        //     'settings' => 'cr_baner_img',
        // ) ) );



        // $wp_customize->add_setting('cr_enlace_banner', array(
        //     'default'        => '',
        //     'capability'     => 'edit_theme_options',
        //     'type'           => 'option',
     
        // ));
     
        // $wp_customize->add_control('cr_enlace_banner', array(
        //     'label'      => __('Enlace', 'cr'),
        //     'section'    => 'cr_baner',
        //     'settings'   => 'cr_enlace_banner',
        // ));


    //  ============================================================================================================
    //  = header             =
    //  ============================================================================================================
        $wp_customize->add_section('cr_header', array(
            'title'    => __('Header', 'cr'),
            'description' => '',
            'priority' => 2,
        ));

    //  =============================
    //  = Logo              =
    //  =============================

    $wp_customize->add_setting( 'cr_logo' );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cr_logo', array(
	    'label'    => __( 'Logo', 'cr' ),
	    'section'    => 'cr_header',
	    'settings' => 'cr_logo',
	) ) );





     //  =============================
    //  = Datos            =
    //  =============================

   $wp_customize->add_section('cr_contacto', array(
            'title'    => __('Datos', 'cr'),
            'description' => '',
            'priority' => 1,
    ));
    //  =============================
    //  = logo footer           =
    //  =============================

    $wp_customize->add_setting( 'cr_logo_pie' );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cr_logo_pie', array(
        'label'    => __( 'Logo (pie de página)', 'cr' ),
        'section'    => 'cr_contacto',
        'settings' => 'cr_logo_pie',
    ) ) );

    //  =============================
    //  = descriptión              =
    //  =============================
    $wp_customize->add_setting('cr_logo_enlace', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('cr_logo_enlace', array(
        'label'      => __('Enlace logo  (pie de página)', 'cr'),
        'section'    => 'cr_contacto',
        'settings'   => 'cr_logo_enlace',
    ));

    //  =============================
    //  = Facebook               =
    //  =============================
    $wp_customize->add_setting('cr_facebook', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('cr_facebook', array(
        'label'      => __('Facebook', 'cr'),
        'section'    => 'cr_contacto',
        'settings'   => 'cr_facebook',
    ));

    //  $wp_customize->add_setting('cr_facebook_title', array(
    //     'default'        => '',
    //     'capability'     => 'edit_theme_options',
    //     'type'           => 'option',
 
    // ));
 
    // $wp_customize->add_control('cr_facebook_title', array(
    //     'label'      => __('Facebook (pie de página)', 'cr'),
    //     'section'    => 'cr_contacto',
    //     'settings'   => 'cr_facebook_title',
    // ));

     //  =============================
    //  = Twitter         =
    //  =============================
    $wp_customize->add_setting('cr_twitter', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('cr_twitter', array(
        'label'      => __('Twitter', 'cr'),
        'section'    => 'cr_contacto',
        'settings'   => 'cr_twitter',
    ));

    //  $wp_customize->add_setting('cr_twitter_title', array(
    //     'default'        => '',
    //     'capability'     => 'edit_theme_options',
    //     'type'           => 'option',
 
    // ));
 
    // $wp_customize->add_control('cr_twitter_title', array(
    //     'label'      => __('Twitter (pie de página)', 'cr'),
    //     'section'    => 'cr_contacto',
    //     'settings'   => 'cr_twitter_title',
    // ));
     //  =============================
    //  = Instagram        =
    //  =============================
    $wp_customize->add_setting('cr_instagram', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('cr_instagram', array(
        'label'      => __('Instagram', 'cr'),
        'section'    => 'cr_contacto',
        'settings'   => 'cr_instagram',
    ));

    //  $wp_customize->add_setting('cr_instagram_title', array(
    //     'default'        => '',
    //     'capability'     => 'edit_theme_options',
    //     'type'           => 'option',
 
    // ));
 
    // $wp_customize->add_control('cr_instagram_title', array(
    //     'label'      => __('Instagram (pie de página)', 'cr'),
    //     'section'    => 'cr_contacto',
    //     'settings'   => 'cr_instagram_title',
    // ));
     //  =============================
    //  = Telefono         =
    //  =============================
    // $wp_customize->add_setting('cr_tel', array(
    //     'default'        => '',
    //     'capability'     => 'edit_theme_options',
    //     'type'           => 'option',
 
    // ));
 
    // $wp_customize->add_control('cr_tel', array(
    //     'label'      => __('Telefóno', 'cr'),
    //     'section'    => 'cr_contacto',
    //     'settings'   => 'cr_tel',
    // ));
     //  =============================
    //  = email        =
    //  =============================
    // $wp_customize->add_setting('cr_email', array(
    //     'default'        => '',
    //     'capability'     => 'edit_theme_options',
    //     'type'           => 'option',
 
    // ));
 
    // $wp_customize->add_control('cr_email', array(
    //     'label'      => __('Email', 'cr'),
    //     'section'    => 'cr_contacto',
    //     'settings'   => 'cr_email',
    // ));

    //  =============================
    //  = info             =
    //  =============================
    // $wp_customize->add_setting('cr_info_pie', array(
    //     'default'        => '',
    //     'capability'     => 'edit_theme_options',
    //     'type'           => 'option',
 
    // ));
 
    // $wp_customize->add_control('cr_info_pie', array(
    //     'label'      => __('Info (pie de página)', 'cr'),
    //     'section'    => 'cr_contacto',
    //     'settings'   => 'cr_info_pie',
    // ));
 

    
    //  ============================================================================================================
//  = footer              =
//  ============================================================================================================
     $wp_customize->add_panel('cr_home', array(
        'title'    => __('Descripción', 'cr'),
        'description' => '',
        'priority' => 3,
    ));
    $wp_customize->add_section( 'cr_section', array(
        'priority'       => 10,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __('Actualidad', 'cr'),
        'panel'  => 'cr_home',
    ) );
    // $wp_customize->add_section( 'cr_section2', array(
    //     'priority'       => 10,
    //     'capability'     => 'edit_theme_options',
    //     'theme_supports' => '',
    //     'title'          => __('Nuestras marcas', 'cr'),
    //     'panel'  => 'cr_home',
    // ) );
    //  $wp_customize->add_section( 'cr_section3', array(
    //     'priority'       => 10,
    //     'capability'     => 'edit_theme_options',
    //     'theme_supports' => '',
    //     'title'          => __('Nuestras tiendas', 'cr'),
    //     'panel'  => 'cr_home',
    // ) );

    // Sección 1
    $wp_customize->add_setting('cr_sec_title', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('cr_sec_title', array(
        'label'      => __('Descripción', 'cr'),
        'section'    => 'cr_section',
        'settings'   => 'cr_sec_title',
        'type' => 'textarea',
    ));
  
    // sección 2
    // $wp_customize->add_setting('cr_sec2_title', array(
    //     'default'        => '',
    //     'capability'     => 'edit_theme_options',
    //     'type'           => 'option',
 
    // ));
 
    // $wp_customize->add_control('cr_sec2_title', array(
    //     'label'      => __('Descripción', 'cr'),
    //     'section'    => 'cr_section2',
    //     'settings'   => 'cr_sec2_title',
    //     'type' => 'textarea',
    // ));

    // sección 3
    // $wp_customize->add_setting('cr_sec3_title', array(
    //     'default'        => '',
    //     'capability'     => 'edit_theme_options',
    //     'type'           => 'option',
 
    // ));
 
    // $wp_customize->add_control('cr_sec3_title', array(
    //     'label'      => __('Descripción', 'cr'),
    //     'section'    => 'cr_section3',
    //     'settings'   => 'cr_sec3_title',
    //     'type' => 'textarea',
    // ));
    
    

    //  =============================
    //  = Sobre nosotros           =
    //  =============================
    $wp_customize->add_setting( 'cr_logo_bottom' );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cr_logo_bottom', array(
	    'label'    => __( 'Logo', 'cr' ),
	    'section'    => 'footer_bottom',
	    'settings' => 'cr_logo_bottom',
	) ) );

     $wp_customize->add_setting('cr_desc_bottom', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('cr_desc_bottom', array(
        'label'      => __('Descripción', 'cr'),
        'section'    => 'footer_bottom',
        'settings'   => 'cr_desc_bottom',
    ));

    $wp_customize->add_setting('cr_footer_kontakt', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('cr_footer_kontakt', array(
        'label'      => __('Contacto', 'cr'),
        'section'    => 'footer_bottom',
        'settings'   => 'cr_footer_kontakt',
    ));

    $wp_customize->add_setting('cr_tresc_bottom', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('cr_tresc_bottom', array(
        'label'      => __('Contenido del botón', 'cr'),
        'section'    => 'footer_bottom',
        'settings'   => 'cr_tresc_bottom',
    ));

    $wp_customize->add_setting('cr_link_bottom', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('cr_link_bottom', array(
        'label'      => __('Enlace del botón', 'cr'),
        'section'    => 'footer_bottom',
        'settings'   => 'cr_link_bottom',
    ));


 
   
}
 
add_action('customize_register', 'cr_customize_register');