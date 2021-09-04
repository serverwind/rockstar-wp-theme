<section class='new-pub-single'>
<h3>Свежие статьи</h3>
<?php // loop: 3 самых свежих поста
    $args = [
        'post_type' => 'post',
        'showposts' => 3,
        ];

        $loop = new WP_Query($args);

        while ( $loop->have_posts() ) :
            $loop->the_post();

            $category = get_the_category(); //получаем данные категории постов
?>
<div class='new-pub-single-wrapper'>
    <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '630'); ?>
    <a rel="nofollow" href='<?php the_permalink(); ?>' title="<?php the_title(); ?>">
        <img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" />
    </a>
    <div class='new-pub-single-meta'>
        <span class='pub-category'>
            <a href="<?php echo get_category_link( $category[0] ); ?>"><?php echo $category[0]->name; ?></a>
        </span>
        <span class='new-pub-single-date'><?php the_time('d.m.Y'); ?></span>
        <div class='new-pub-single-title'>
            <a href='<?php the_permalink(); ?>'><?php the_title(); ?></a>
        </div>
    </div>
</div>
<?php endwhile; wp_reset_postdata(); // loop: 3 самых свежих поста - КОНЕЦ. ?>
</section>