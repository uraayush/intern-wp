<?php
/**
 * functions
 */
if (! function_exists('intern_theme_setup')) {
    function intern_theme_setup() {
        add_theme_support( 'title-tag' );
        /**
		 * Add post-formats support.
		 */
		add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
			)
		);
        add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );
        register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary menu', 'interns' ),
				'footer'  => __( 'Secondary menu', 'interns' ),
			)
		);
    }
}
add_action( 'after_setup_theme', 'intern_theme_setup' );

/**
 * Register custom widgets
 */
function interns_widget_init() {

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer', 'interns' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'interns' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'interns_widget_init' );

/**
 * Enqueue
 */
function interns_scripts() {
	// Note, the is_IE global variable is defined by WordPress and is used
	// to detect if the current browser is internet explorer.
	global $is_IE, $wp_scripts;
	if ( $is_IE ) {
		// If IE 11 or below, use a flattened stylesheet with static values replacing CSS Variables.
		wp_enqueue_style( 'intern-styles', get_template_directory_uri() . '/assets/css/ie.css', array(), wp_get_theme()->get( 'Version' ) );
	} else {
		// If not IE, use the standard stylesheet.
		wp_enqueue_style( 'intern-styles', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
	}

    if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', get_template_directory_uri() . '/layout/scripts/jquery.min.js', false, null);
        wp_enqueue_script('jquery');
    }
 


	wp_register_script(
		'intern-easypiechart.min',
		get_template_directory_uri() . '/layout/scripts/jquery.easypiechart.min.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);

    wp_enqueue_script('intern-backtotop', get_template_directory_uri() . '/layout/scripts/jquery.backtotop.js', ['jquery'], null, true);

    wp_enqueue_script(
        'intern-mobilemenu',
        get_template_directory_uri() . '/layout/scripts/jquery.mobilemenu.js',
        array( 'jquery' ),
        wp_get_theme()->get( 'Version' ),
        true
    );
    wp_enqueue_script('intern-easypiechart.min', get_template_directory_uri() . '/layout/scripts/jquery.easypiechart.min.js', ['jquery'], null, true);

}
add_action( 'wp_enqueue_scripts', 'interns_scripts' );

/**
 * create custom post type
 */
function interns_post_type_init()
{
    register_post_type(
        'news',
        array(
            'labels' => array(
                'name' => __('News', 'intern'),
                'singular_name' => __('News', 'intern'),
            ),
            'public' => true,
            'publicly_queryable' => true,
            'has_archive' => false,
            'show_ui' => true,
            'show_in_rest' => true,
            // 'hierarchical' => true,
            'menu_icon' => 'dashicons-welcome-write-blog',
            'rewrite' => array( 'slug' => 'news' ),
            'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' )
        )
    );
}

add_action('init', 'interns_post_type_init');
