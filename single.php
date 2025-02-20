<?php get_header() ?>

<main>
    <div class="wrapper">
        <h1 class="page__title"><?php the_title() ?></h1>
        <div class="page__content">
            <?php the_content() ?>
        </div>        
    </div>
</main>

<?php get_footer() ?>