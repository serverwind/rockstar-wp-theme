<?php 

function lestra_theme_support() {
	add_theme_support('title-tag'); //Добавление тайтла на страницы. Можно таким образом, можно в header.php с помощью get title
	add_theme_support('custom-logo'); //Возможность добавлять лого из настроек темы
	add_theme_support('post-thumbnails'); //возможность добавлять превью к статьям
}

add_action('after_setup_theme', lestra_theme_support);

//Загрузка CSS и JS
function lestra_register_styles() {
	wp_enqueue_style('lestra-style', get_template_directory_uri() . '/assets/css/style.css'); 
	wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css2?family=PT+Sans&display=swap', false, false); 
}

add_action('wp_enqueue_scripts', lestra_register_styles);

function lestra_register_scripts() {
	wp_enqueue_script('fontawesome', 'https://kit.fontawesome.com/5ddcf5fb58.js', array(), '1.0', true);
	wp_enqueue_script('lestra-script', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', lestra_register_scripts);


//Счётчик просмотров статей
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}

function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
 
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0)

?>
