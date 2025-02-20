<?php
$newsItems = new WP_Query(array(
    'posts_per_page' => 2,
    'post_type' => 'post',
    'category_name' => 'nieuws',
    'order' => 'desc'
));
?>
<?php 
if ($newsItems->have_posts()) { ?>
    <h2 class="news__header">Nieuws!</h2>
    <a href="#" class="news__subheader has-chevron">Meer nieuws berichten <i class="fa-solid fa-chevron-right"></i></a>
    <div class="news__grid">
        <?php while ($newsItems->have_posts()) {
            $newsItems->the_post() ?>
            <div class="news__item">
                <?php if (has_post_thumbnail()) { ?>
                    <div class="news__image-container">
                        <?php echo get_the_post_thumbnail(); ?>
                    </div>
                <?php } ?>
                <div class="news__text">
                    <h3 class="news__title"><?php the_title() ?></h3>
                    <p class="news__content"><?php echo strip_tags(get_the_content()) ?></p>
                </div>
                <div class="news__footer">
                    <a class="news__readmore has-chevron" href="<?php the_permalink() ?>">Lees meer <i class="fa-solid fa-chevron-right"></i></a>
                    <div class="news__post-info">
                        <p><i class="fa-solid fa-calendar"></i> <?php echo get_the_date('d M y') ?></p>
                        <p><i class="fa-solid fa-user"></i> <?php the_author() ?></p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
<?php } else { ?>
    <h2 class="news__empty-alert">Geen nieuws berichten op het moment...</h2>
<?php } ?>