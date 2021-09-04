<?php 
    $category = get_the_category(); //получаем данные категории поста
    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); //получаем превью поста
    setPostViews(get_the_ID()); //получаем количество просмотров поста 
?>

<section class='article-header'>
    <div class='article-header-misc'>
        <h1><?php the_title(); ?></h1>
        <span class='pub-category'><?php echo $category[0]->name; ?></span>
        <span class='pub-date'><?php the_time('d.m.Y'); ?></span>
        <span class='pub-views'><i class="far fa-eye"></i> <?php echo getPostViews(get_the_ID()); ?></span>
        <span class='pub-comm'><i class="far fa-comment-alt"></i> 2</span>
    </div>
    <div class='just-bg-single' style='background-image:url(<?php echo $image[0]; ?>)'></div>
</section>

<section class='single'>
    <article class='single-article'>

        <?php the_content(); ?>
        
        <section class='single-meta'>
            <!-- Убрать .star-orange при создании темы на вордпресс -->
            <span class='single-meta-rating'><?php if(function_exists('the_ratings')) { the_ratings(); } ?></span>
            <span class='single-meta-social'><a href='single.html'><i class="fab fa-vk"></i></a>
                <a href='single.html'><i class="fab fa-facebook-f"></i></a>
                <a href='single.html'><i class="fab fa-twitter"></i></a>
                <a href='single.html'><i class="fab fa-telegram-plane"></i></a>
            </span>
        </section>
    
    </article>

    <!-- Сайдбар -->
    <?php get_template_part('template-parts/sidebar', 'default'); ?>
    <!-- Комментарии -->
    <?php comments_template(); ?>
</section>