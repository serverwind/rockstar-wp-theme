<?php get_header(); ?>
    <main>
        <section class='first-part'>
            <!-- Свежие новости -->
            <section class='page-promo'>
                <h1>Сообщество фанатов ROCKSTARGAMES</h1>
                <span class='page-promo-desc'>Все самые свежие новости, инсайды, лучшие гайды и т. д.</span>
            </section>

            <section class='new-pub'>
            <?php // loop: 2 самых свежих поста
                $args = [
                    'post_type' => 'post',
                    'showposts' => 2, 
                ];

                $loop = new WP_Query($args);

                while ( $loop->have_posts() ) :
                $loop->the_post();

                $category = get_the_category(); //получаем данные категории постов
            ?>
            <div class='new-pub-wrapper'>
                <?php 
                    $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '630'); ?>
                        <a rel="nofollow" href='<?php the_permalink(); ?>' title="<?php the_title(); ?>">
                            <img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>"/>
                        </a>
                        <div class='new-pub-meta'>
                            <span class='pub-category'>
                                <a href="<?php echo get_category_link( $category[0] ); ?>"><?php echo $category[0]->name; ?></a>
                            </span>
                            <span class='new-pub-date'><?php the_time('d.m.Y'); ?></span>
                            <div class='new-pub-title'>
                                <a href='<?php the_permalink(); ?>'><?php the_title(); ?></a>
                            </div>
                        </div>
            </div>
            <?php 
                endwhile; 
                wp_reset_postdata(); 
                // loop: 2 самых свежих поста - КОНЕЦ.
            ?>
            </section>

            <!-- Последние публикации -->
            <h2>Последние публикации</h2>     
            <section class='new-articles'>
                <?php // loop: 8 (-2 верхних) самых свежих поста
                $args = [
                    'post_type' => 'post',
                    'showposts' => 8, 
                    'offset' => 2,
                ];

                $loop = new WP_Query($args);

                while ( $loop->have_posts() ) :
                $loop->the_post();

                $category = get_the_category(); //получаем данные категории постов
            ?>
            <div class='new-articles-wrapper'>
                <?php 
                    $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '630'); ?>
                        <a rel="nofollow" href='<?php the_permalink(); ?>' title="<?php the_title(); ?>">
                            <img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>"/>
                        </a>
                        <div class='new-articles-meta'>
                            <span class='pub-category'>
                                <a href="<?php echo get_category_link( $category[0] ); ?>"><?php echo $category[0]->name; ?></a>
                            </span>
                            <span class='pub-date'><?php the_time('d.m.Y'); ?></span>
                            <div class='new-articles-title'>
                                <a href='<?php the_permalink(); ?>'><?php the_title(); ?></a>
                            </div>
                        </div>
            </div>
            <?php 
                endwhile; 
                wp_reset_postdata(); 
                // loop: 8(-2) самых свежих поста - КОНЕЦ.
            ?>
                <div class='popular-posts'>
                    <h3>Популярные статьи</h3>
                    <div class='popular-posts-wrapper'>
                        <a href='single.html'><img src="assets/img/gta-sample5.jpg"></a>
                        <span class='popular-articles-title'><a href='single.html'>GTA 5 1.53 update: список изменений</a></span>
                    </div>
                    <div class='popular-posts-wrapper'>
                        <a href='single.html'><img src="assets/img/gta-sample4.jpg"></a>
                        <span class='popular-articles-title'><a href='single.html'>Ролевые игры в GTA 5</a></span>
                    </div>
                    <div class='popular-posts-wrapper'>
                        <a href='single.html'><img src="assets/img/rdr-sample1.jpg"></a>
                        <span class='popular-articles-title'><a href='single.html'>RDR 2 - все пасхалки</a></span>
                    </div>
                </div>
            </section>
        </section>
        <!-- .first-part -->
        
        <section class='second-part'>
            <section class='video-promo'>
                <h2>Видео</h2>
                <div class='video-filter-buttons'>
                    <button class='video-filter-recent'>Свежие</button>
                    <button class='video-filter-pop'>Популярные</button>
                </div>
            </section>
            <div class='new-video'>
                <div class='new-video-wrapper'>
                    <a href='single.html'><img src='assets/img/gta-sample2.jpg'></a>
                    <div class='new-video-title'>
                        <a href='single.html'>GTA 5 1.53 update: список изменений</a>
                    </div>
                    <div class='just-bg'></div>
                </div>
                <div class='new-video-wrapper'>
                    <a href='single.html'><img src='assets/img/rdr-sample1.jpg'></a>
                    <div class='new-video-title'>
                        <a href='single.html'>Read Dead Redemption 2 - все пасхалки</a>
                    </div>
                    <div class='just-bg'></div>
                </div>
                <div class='new-video-wrapper'>
                    <a href='single.html'><img src='assets/img/rdr-sample2.jpg'></a>
                    <div class='new-video-title'>
                        <a href='single.html'>Red Dead Redemption 2 ожидает большое улучшение ФПС благодаря NVIDIA DLSS</a>
                    </div>
                    <div class='just-bg'></div>
                </div>
                <div class='new-video-wrapper'>
                    <a href='single.html'><img src='assets/img/gta-sample3.jpg'></a>
                    <div class='new-video-title'>
                        <a href='single.html'>GTA Online - обновление, улучшающее оптимизацию</a>
                    </div>
                    <div class='just-bg'></div>
                </div>
                <div class='new-video-wrapper'>
                    <a href='single.html'><img src='assets/img/gta-sample4.jpg'></a>
                    <div class='new-video-title'>
                        <a href='single.html'>Ролевые игры в GTA 5</a>
                    </div>
                    <div class='just-bg'></div>
                </div>
                <div class='new-video-wrapper'>
                    <a href='single.html'><img src='assets/img/gta-sample5.jpg'></a>
                    <div class='new-video-title'>
                        <a href='single.html'>GTA 5 1.53 update: список изменений</a>
                    </div>
                    <div class='just-bg'></div>
                </div>
            </div>
        </section>
        <!-- .second-part -->
        <section class='third-part'>
            <div class='new-files'>
                <h2>Файлы</h2>
                <div class='new-files-wrapper'>
                    <a href='single.html'><img src="assets/img/gta-sample3.jpg"></a>
                    <div class='new-files-info'>
                        <div class='new-files-info-meta'>
                            <span class='pub-category'><a href='single.html'>GTA 5</a></span>
                            <span class='pub-date'>5.07.2021</span>
                        </div>
                        <div class='new-files-title'><a href='single.html'>GTA Online - обновление, улучшающее оптимизацию</a></div>
                        <div class='new-files-info-desc'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</div>
                    </div>
                </div>
                <div class='new-files-wrapper'>
                    <a href='single.html'><img src="assets/img/rdr-sample1.jpg"></a>
                    <div class='new-files-info'>
                        <div class='new-files-info-meta'>
                            <span class='pub-category cat-second'><a href='single.html'>Red Dead Redemption 2</a></span>
                            <span class='pub-date'>3.07.2021</span>
                        </div>
                        <div class='new-files-title'><a href='single.html'>RDR 2 - все пасхалки</a></div>
                        <div class='new-files-info-desc'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</div>
                    </div>
                </div>
                <div class='new-files-wrapper'>
                    <a href='single.html'><img src="assets/img/rdr-sample2.jpg"></a>
                    <div class='new-files-info'>
                        <div class='new-files-info-meta'>
                            <span class='pub-category cat-second'><a href='single.html'>Red Dead Redemption 2</a></span>
                            <span class='pub-date'>1.07.2021</span>
                        </div>
                        <div class='new-files-title'><a href='single.html'>Red Dead Redemption 2 ожидает большое улучшение ФПС благодаря NVIDIA DLSS</a></div>
                        <div class='new-files-info-desc'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</div>
                    </div>
                </div>
                <div class='new-files-wrapper'>
                    <a href='single.html'><img src="assets/img/gta-sample5.jpg"></a>
                    <div class='new-files-info'>
                        <div class='new-files-info-meta'>
                            <span class='pub-category'><a href='single.html'>GTA 5</a></span>
                            <span class='pub-date'>1.07.2021</span>
                        </div>
                        <div class='new-files-title'><a href='single.html'>Ролевые игры в GTA 5</a></div>
                        <div class='new-files-info-desc'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</div>
                    </div>
                </div>
            </div>
            <div class='files-cat'>
                <h2>Категории</h2>
                <div class='files-cat-wrapper'>
                    <a href='single.html'>GTA 5</a>
                    <span class='files-num-wrapper'>
                        <span class='files-cat-num'>325</span>
                    </span>
                </div>
                <div class='files-cat-wrapper'>
                    <a href='single.html'>Read Dead Redemption 2</a>
                    <span class='files-num-wrapper'>
                        <span class='files-cat-num-second'>86</span>
                    </span>
                </div>
                <div class='files-cat-wrapper'>
                    <a href='single.html'>GTA Online</a>
                    <span class='files-num-wrapper'>
                        <span class='files-cat-num-third'>24</span>
                    </span>
                </div>
                <div class='files-cat-wrapper'>
                    <a href='single.html'>Остальное</a>
                    <span class='files-num-wrapper'>
                        <span class='files-cat-num-any'>6</span>
                    </span>
                </div>
                <div class='tags'>
                    <span class='tag-item'>
                        <a href='single.html'>Метка 1</a>
                    </span>
                    <span class='tag-item'>
                        <a href='single.html'>Метка 2Метка 2</a>
                    </span>
                    <span class='tag-item'>
                        <a href='single.html'>Метка 3</a>
                    </span>
                    <span class='tag-item'>
                        <a href='single.html'>Метка 4Метка 4 Метка 4</a>
                    </span>
                    <span class='tag-item'>
                        <a href='single.html'>Метка 5</a>
                    </span>
                    <span class='tag-item'>
                        <a href='single.html'>Метка 6</a>
                    </span>
                    <span class='tag-item'>
                        <a href='single.html'>Метка 7</a>
                    </span>
                </div>
            </div>
        </section>
        <!-- .third-part -->
        <section class='fourth-part'>
            <div class='streams-promo'>
                <h2>Стримы</h2>
                <div class='stream-filter-buttons'>
                    <button class='stream-filter-gta'>GTA</button>
                    <button class='stream-filter-rdr'>Read Dead Redemption</button>
                    <button class='stream-filter-misc'>Другие</button>
                </div>
            </div>
            <div class='streams'>
                <div class='stream-wrapper'>
                    <a href='single.html'><img src="assets/img/gta-sample2.jpg"></a>
                    <div class='stream-pub-meta'>
                        <div class='stream-title'><a href='single.html'>Встречайте Pfister Comet S2 – новый автомобиль GTA Online</a></div>
                    </div>
                    <div class='just-bg'></div>
                </div>
                <div class='stream-wrapper'>
                    <a href='single.html'><img src="assets/img/rdr-sample1.jpg"></a>
                    <div class='stream-pub-meta'>
                        <div class='stream-title'><a href='single.html'>Встречайте Pfister Comet S2 – новый автомобиль GTA Online</a></div>
                    </div>
                    <div class='just-bg'></div>
                </div>
            </div>
            <div class='streams-load-more'><button>Загрузить еще</button></div>
        </section>
        <!-- .fourth-part -->
        <section class='five-part'>
            <div class='games-slider'>
                <div class='games-slider-1'>
                    <a href='single.html'><img src='assets/img/game-sample1.jpg'></a>
                </div>
                <div class='games-slider-2'>
                    <a href='single.html'><img src='assets/img/game-sample2.jpg'></a>
                </div>
                <div class='games-slider-3'>
                    <a href='single.html'><img src='assets/img/game-sample3.jpg'></a>
                </div>
                <div class='games-slider-4'>
                    <a href='single.html'><img src='assets/img/game-sample4.jpg'></a>
                </div>
                <div class='games-slider-5'>
                    <a href='single.html'><img src='assets/img/game-sample4.jpg'></a>
                </div>
                <div class='games-slider-6'>
                    <a href='single.html'><img src='assets/img/game-sample4.jpg'></a>
                </div>
            </div>
        </section>
        <!-- .five-part -->
    </main>
<?php get_footer(); ?>