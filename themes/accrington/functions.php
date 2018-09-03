<?php
/**
 * Accrington Tailoring functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Accrington
 * @since 1.0
 */
/**
 * Enqueue scripts and styles.
 */
function accrington_scripts() {	

	$var = 1.0;
	wp_enqueue_style( 'bootstrap', get_theme_file_uri( '/css/bootstrap.css?ver=' . $var ), array(), null );	
	wp_enqueue_style( 'flaticon', get_theme_file_uri( '/fonts/flaticon/flaticon.css?ver=' . $var ), array(), null );	
	wp_enqueue_style( 'slick', get_theme_file_uri( '/css/slick.css?ver=' . $var ), array(), null );	
	wp_enqueue_style( 'liMarquee', get_theme_file_uri( '/css/liMarquee.css?ver=' . $var ), array(), null );	
	wp_enqueue_style( 'colorbox', get_theme_file_uri( '/css/colorbox.css?ver=' . $var ), array(), null );	
	wp_enqueue_style( 'nouislider', get_theme_file_uri( '/css/jquery.nouislider.css?ver=' . $var ), array(), null );	
	wp_enqueue_style( 'style', get_theme_file_uri( '/style.css?ver=' . $var ), array(), null );	

	//All scripts loaded in footer
	wp_register_script('jquery-1.11.3.min', get_theme_file_uri( '/js/jquery-1.11.3.min.js' ), array(), '1.0', true );  
    wp_enqueue_script('jquery-1.11.3.min');

	wp_register_script('modernizr', get_theme_file_uri( '/js/modernizr.custom.02163.js' ), array(), '1.0', true );  
    wp_enqueue_script('modernizr');

	wp_register_script('finger', get_theme_file_uri( '/js/jquery.finger.min.js' ), array(), '1.0', true );  
    wp_enqueue_script('finger');

	wp_register_script('doubletaptogo', get_theme_file_uri( '/js/doubletaptogo.js' ), array(), '1.0', true );  
    wp_enqueue_script('doubletaptogo');

	wp_register_script('bootstrap', get_theme_file_uri( '/js/bootstrap.min.js' ), array(), '1.0', true );  
    wp_enqueue_script('bootstrap');

	wp_register_script('jquery.easing', get_theme_file_uri( '/js/jquery.easing.1.3.min.js' ), array(), '1.0', true );  
    wp_enqueue_script('jquery.easing');

	wp_register_script('slick.min', get_theme_file_uri( '/js/slick.min.js' ), array(), '1.0', true );  
    wp_enqueue_script('slick.min');

	wp_register_script('inview', get_theme_file_uri( '/js/jquery.inview.min.js' ), array(), '1.0', true );  
    wp_enqueue_script('inview');

	wp_register_script('liMarquee', get_theme_file_uri( '/js/jquery.liMarquee.min.js' ), array(), '1.0', true );  
    wp_enqueue_script('liMarquee');

	wp_register_script('colorbox', get_theme_file_uri( '/js/jquery.colorbox-min.js' ), array(), '1.0', true );  
    wp_enqueue_script('colorbox');

	wp_register_script('coolbaby', get_theme_file_uri( '/js/coolbaby.js' ), array(), '1.0', true );  
    wp_enqueue_script('coolbaby');

	wp_register_script('emailHide', get_theme_file_uri( '/js/jquery.emailHide.js' ), array(), '1.0', true );  
    wp_enqueue_script('emailHide');

	wp_register_script('form', get_theme_file_uri( '/js/jquery.form.js' ), array(), '1.0', true );  
    wp_enqueue_script('form');

}

add_action( 'wp_enqueue_scripts', 'accrington_scripts' );

//--------------custom meta boxes-------------------------
//--------------custom meta boxes-------------------------

define('MY_WORDPRESS_FOLDER',$_SERVER['DOCUMENT_ROOT']);
define('MY_THEME_FOLDER',str_replace('\\','/',dirname(__FILE__)));
define('MY_THEME_PATH','/' . substr(MY_THEME_FOLDER,stripos(MY_THEME_FOLDER,'wp-content')));

add_action('admin_init','my_meta_init');

function my_meta_init()
{
	// review the function reference for parameter details
	// http://codex.wordpress.org/Function_Reference/wp_enqueue_script
	// http://codex.wordpress.org/Function_Reference/wp_enqueue_style

	wp_enqueue_style('my_meta_css', MY_THEME_PATH . '/custom/meta.css');

	// review the function reference for parameter details
	// http://codex.wordpress.org/Function_Reference/add_meta_box

	foreach (array('post','page') as $type) 
	{
		add_meta_box('my_all_meta', 'Header Text', 'my_meta_setup', $type, 'normal', 'high');
	}
	
	add_action('save_post','my_meta_save');
}

function my_meta_setup()
{
	global $post;
 
	// using an underscore, prevents the meta variable
	// from showing up in the custom fields section
	$meta = get_post_meta($post->ID,'_my_meta',TRUE);
 
	// instead of writing HTML here, lets do an include
	include(MY_THEME_FOLDER . '/custom/meta.php');
 
	// create a custom nonce for submit verification later
	echo '<input type="hidden" name="my_meta_noncename" value="' . wp_create_nonce(__FILE__) . '" />';
}

function my_meta_save($post_id) 
{
	// authentication checks

	// make sure data came from our meta box
	if (!wp_verify_nonce($_POST['my_meta_noncename'],__FILE__)) return $post_id;

	// check user permissions
	if ($_POST['post_type'] == 'page') 
	{
		if (!current_user_can('edit_page', $post_id)) return $post_id;
	}
	else 
	{
		if (!current_user_can('edit_post', $post_id)) return $post_id;
	}

	// authentication passed, save data

	// var types
	// single: _my_meta[var]
	// array: _my_meta[var][]
	// grouped array: _my_meta[var_group][0][var_1], _my_meta[var_group][0][var_2]

	$current_data = get_post_meta($post_id, '_my_meta', TRUE);	
 
	$new_data = $_POST['_my_meta'];

	my_meta_clean($new_data);
	
	if ($current_data) 
	{
		if (is_null($new_data)) delete_post_meta($post_id,'_my_meta');
		else update_post_meta($post_id,'_my_meta',$new_data);
	}
	elseif (!is_null($new_data))
	{
		add_post_meta($post_id,'_my_meta',$new_data,TRUE);
	}

	return $post_id;
}

function my_meta_clean(&$arr)
{
	if (is_array($arr))
	{
		foreach ($arr as $i => $v)
		{
			if (is_array($arr[$i])) 
			{
				my_meta_clean($arr[$i]);

				if (!count($arr[$i])) 
				{
					unset($arr[$i]);
				}
			}
			else 
			{
				if (trim($arr[$i]) == '') 
				{
					unset($arr[$i]);
				}
			}
		}

		if (!count($arr)) 
		{
			$arr = NULL;
		}
	}
}

//Extra information meta box
add_action( 'add_meta_boxes', 'acc_custom_meta_box' );
function acc_custom_meta_box() {
    $post_types = get_post_types();
    foreach ( $post_types as $post_type ) {
        add_meta_box( 'my_all_meta', 'Extra Information', 'my_meta_setup', $post_type, 'normal', 'high' );
    }
}