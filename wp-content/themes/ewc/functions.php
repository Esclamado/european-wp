<?php 

add_action( 'wp_enqueue_scripts', 'salient_child_enqueue_styles');
function salient_child_enqueue_styles() {
	
		$nectar_theme_version = nectar_get_theme_version();
		
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css', array('font-awesome'), $nectar_theme_version);

    if ( is_rtl() ) 
   		wp_enqueue_style(  'salient-rtl',  get_template_directory_uri(). '/rtl.css', array(), '1', 'screen' );
}

function salient_redux_custom_fonts( $custom_fonts ) {
    return array(
        'Custom Fonts' => array(
             'eurostile-extended' => "eurostile-extended",
			 'museo-sans' => "museo-sans"
        )
    );
}
add_filter( "redux/salient_redux/field/typography/custom_fonts", "salient_redux_custom_fonts" );

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name' => 'Home Games',
		'id' => 'home-games-sidebar',
		'description' => 'Home Games',
		'before_widget' => '<li id="%1$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
}

?>