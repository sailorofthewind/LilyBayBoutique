<?php
/**
 * lilybayboutique functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package lilybayboutique
 */



/*********************************************/
/******* WOOCOMMERCE CUSTOM FUNCTIONS ********/
/*********************************************/



/**
* Allows WooCommerce support in Wordpress
*/
add_action( 'after_setup_theme', 'my_theme_woocommerce_support');

function my_theme_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}

/**
* Removes woocommerce_breadcrumb from woocommerce_before_main_content only in archive-product.php
*/
function remove_woocommerce_breadcrumbs() {
	if (is_shop()) {
		remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
	}
}

add_action( 'wp_head', 'remove_woocommerce_breadcrumbs' );

/**
* Removes sidebar from single-product.php
*/
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

/**
* Removes woocommerce_output_related_products from woocommerce_after_single_product_summary
*/
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);
/**
* Removes woocommerce_template_single_meta from woocommerce_after_single_product_summary
*/
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );

/**
* Renames product data tabs + additional_information data tab
*/
add_filter( 'woocommerce_product_tabs', 'woo_rename_tabs', 98 );

function woo_rename_tabs( $tabs ) {

	global $product;
	

	$tabs['reviews']['title'] = __( 'Ratings' );				// Rename the reviews tab

	if( $product->has_attributes() || $product->has_dimensions() || $product->has_weight() ) { // Check if product has attributes, dimensions or weight
		$tabs['additional_information']['title'] = __( 'Info' );	// Rename the additional information tab
	}
 
	return $tabs;
 
}

/**
* Sets number of products displayed per page
*/
add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 12;' ), 20 );

/**
* Custom My Account Page navigation
*/
function custom_account_menu_items() {
	$endpoints = array(
		'orders'          => get_option( 'woocommerce_myaccount_orders_endpoint', 'orders' ),
		'downloads'       => get_option( 'woocommerce_myaccount_downloads_endpoint', 'downloads' ),
		'edit-address'    => get_option( 'woocommerce_myaccount_edit_address_endpoint', 'edit-address' ),
		'payment-methods' => get_option( 'woocommerce_myaccount_payment_methods_endpoint', 'payment-methods' ),
		'edit-account'    => get_option( 'woocommerce_myaccount_edit_account_endpoint', 'edit-account' ),
		'customer-logout' => get_option( 'woocommerce_logout_endpoint', 'customer-logout' ),
	);

	$items = array(
		'dashboard'       => __( 'Dashboard', 'woocommerce' ),
		'orders'          => __( 'Order History', 'woocommerce' ),
		'edit-address'    => __( 'Address Book', 'woocommerce' ),
		'payment-methods' => __( 'Payment methods', 'woocommerce' ),
		'edit-account'    => __( 'Account details', 'woocommerce' ),
		'customer-logout' => __( 'Logout', 'woocommerce' ),
	);

	// Remove missing endpoints.
	foreach ( $endpoints as $endpoint_id => $endpoint ) {
		if ( empty( $endpoint ) ) {
			unset( $items[ $endpoint_id ] );
		}
	}

	// Check if payment gateways support add new payment methods.
	if ( isset( $items['payment-methods'] ) ) {
		$support_payment_methods = false;
		foreach ( WC()->payment_gateways->get_available_payment_gateways() as $gateway ) {
			if ( $gateway->supports( 'add_payment_method' ) || $gateway->supports( 'tokenization' ) ) {
				$support_payment_methods = true;
				break;
			}
		}

		if ( ! $support_payment_methods ) {
			unset( $items['payment-methods'] );
		}
	}

	return apply_filters( 'woocommerce_account_menu_items', $items );
}


/**
* Removes fields from checkout page
*/

// Hook in
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );

// Our hooked in function - $fields is passed via the filter!
function custom_override_checkout_fields( $fields ) {
     unset($fields['billing']['billing_company']);
     unset($fields['billing']['billing_state']);
     unset($fields['shipping']['shipping_company']);
     unset($fields['shipping']['shipping_state']);

     return $fields;
}


/**
* Leaves "Ship to a different address" checkbox unchecked by default
*/
add_filter( 'woocommerce_ship_to_different_address_checked', '__return_false' );


/*********************************************/
/**** WORDPRESS & THEME CUSTOM FUNCTIONS *****/
/*********************************************/


if ( ! function_exists( 'lilybayboutique_theme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function lilybayboutique_theme_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on lilybayboutique, use a find and replace
	 * to change 'lilybayboutique-theme' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'lilybayboutique-theme', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'Top Nav' => esc_html__( 'Primary', 'lilybayboutique-theme' ),
		'footer' => esc_html__( 'Footer Menu', 'lilybayboutique-theme' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'lilybayboutique_theme_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'lilybayboutique_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function lilybayboutique_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'lilybayboutique_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'lilybayboutique_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lilybayboutique_theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'lilybayboutique-theme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'lilybayboutique-theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'lilybayboutique_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function lilybayboutique_theme_scripts() {
	wp_enqueue_style( 'lilybayboutique-theme-style', get_stylesheet_uri() );

	wp_enqueue_script( 'lilybayboutique-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'lilybayboutique-theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'lilybayboutique_theme_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Replaces the excerpt "more" text by a link.
 */
function new_excerpt_more($more) {
	global $posts;
	return '... <a class="moretag" href="' . get_permalink($post->ID) . '"> READ MORE &raquo;</a>';
}

add_filter('excerpt_more', 'new_excerpt_more');

/**
 * Limit the excerpt lenght to a set number of words
 */

function custom_excerpt_length( $length ) {
	return 53;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

 /**
 * Removes “Category:”, “Tag:”, “Author:” from the_archive_title function.
 */
add_filter( 'get_the_archive_title', function ($title) {

    if ( is_category() ) {

            $title = single_cat_title( '', false );

        } elseif ( is_tag() ) {

            $title = single_tag_title( '', false );

        } elseif ( is_author() ) {

            $title = '<span class="vcard">' . get_the_author() . '</span>' ;

        }

    return $title;

});

 /**
 * Modifies the search plugin in the sidebar.
 */

function wpdocs_my_search_form( $form ) {

    $form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
    <div><label class="screen-reader-text" for="s">' . __( 'Search for:' ) . '</label>
    <input type="text" placeholder="Search" value="' . get_search_query() . '" name="s" id="s" />
    <input type="submit" id="searchsubmit" value="'. esc_attr__( 'find' ) .'" />
    </div>
    </form>';

    return $form;
}
add_filter( 'get_search_form', 'wpdocs_my_search_form' );
