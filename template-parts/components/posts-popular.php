<div class='popular-posts'>
    <h3>Популярные статьи</h3>
    <?php // loop: 3 самых популярных поста
        $args = [
            'post_type' => 'post',
            'showposts' => 3,
            'meta_key' => 'post_views_count',
            'orderby' => 'meta_value_num',
            ];

        $loop = new WP_Query($args);

        while ( $loop->have_posts() ) :
            $loop->the_post();

        $category = get_the_category(); //получаем данные категории постов
?>
    <div class='popular-posts-wrapper'>
        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '630'); ?>
        <a rel="nofollow" href='<?php the_permalink(); ?>' title="<?php the_title(); ?>">
            <img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" />
        </a>
        <span class='popular-articles-title'><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></span>
    </div>
    <?php endwhile; wp_reset_postdata(); // loop: 3 самых популярных поста - КОНЕЦ. ?>
</div>