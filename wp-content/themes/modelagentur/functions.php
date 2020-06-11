<?php 
add_action('wp_enqueue_scripts', 'modelageuntur_styles');
add_action('wp_enqueue_scripts', 'modelageuntur_styles_footer');
add_action( 'wp_enqueue_scripts', 'jquery' );

function modelageuntur_styles(){
    wp_enqueue_style('tachyons', get_template_directory_uri() . "/assets/css/tachyons.min.css" );
    wp_enqueue_style('main', get_stylesheet_uri());
    
}

function modelageuntur_styles_footer(){
    wp_enqueue_style('slick-theme', get_template_directory_uri() . "/assets/css/slick.css", array(), '18.1');
    wp_enqueue_style('slick', get_template_directory_uri() . "/assets/css/slick-theme.css", array(), '18.1' );
    
}

function jquery(){
    // отменяем зарегистрированный jQuery
	// вместо "jquery-core", можно вписать "jquery", тогда будет отменен еще и jquery-migrate
	wp_deregister_script( 'jquery-core' );
	wp_register_script( 'jquery-core', '//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
	wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'slick', get_template_directory_uri() . "/assets/js/slick.min.js", array('jquery'), '18.1', true);
    wp_enqueue_script( 'main', get_template_directory_uri() . "/assets/js/script.js", array('jquery'), null, true);
}

add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails', array('post') );


add_filter( 'nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 4 );

function filter_nav_menu_link_attributes( $atts, $item, $args, $depth ) {

    if($args->menu == 'footer-menu'){
        $class = 'dim link dib mb2 silver';
	    $atts['class'] = isset( $atts['class'] ) ? "{$atts['class']} $class" : $class;
    }
    if($args->menu == 'header-menu'){
        $class = 'dim link light-gray mb2';
	    $atts['class'] = isset( $atts['class'] ) ? "{$atts['class']} $class" : $class;
    }
    
        
    
    
	
	return $atts;
}

add_filter( 'get_custom_logo', 'change_logo_class' );

function change_logo_class( $html ) {
    $html = str_replace( 'custom-logo-link', 'link', $html );
    $html = str_replace( 'custom-logo', 'ph4 mb2 mb0-l', $html );
    

    return $html;
}



function wpse_get_content_without_images() {
    $content = get_the_content();
    $content = preg_replace( '/<img[^>]+./', '', $content );
    echo $content;
} 

add_image_size('model_cart_preview', 276, 363, true);


function get_post_block_gallery_images( $post = 0 ) {
    $post = get_post( $post );

    // Запись не нашлась - возвращаем пустой массив
    if ( ! is_a( $post, 'WP_Post' ) ) {
        return [];
    }

    // Блок "Галерея" не нашелся - возвращаем пустой массив
    if ( ! has_block( 'gallery', $post->post_content ) ) {
        return [];
    }

    // Ищем все блоки в контенте
    $post_blocks = parse_blocks( $post->post_content );

    // Перебираем все блоки в поисках нужного
    foreach ( $post_blocks as $block ) {
        // Ищем блок "Галерея" с переданными ID изображений
        if ( $block['blockName'] === 'core/gallery' && ! empty( $block['attrs']['ids'] ) ) {
            return array_map( function ( $image_id ) {
                // Получаем ссылку на оригинал изображения
                return wp_get_attachment_image_url( $image_id, 'model_cart_preview' );
            }, $block['attrs']['ids'] );
        }
    }

    // Если блок "Галерея" не нашелся - возвращаем пустой массив
    return [];
}

?>