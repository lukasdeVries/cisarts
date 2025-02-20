<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cisarts local</title>
    <?php wp_head() ?>
</head>

<body>
    <div class="big-wrapper">
        <header>
            <div class="header">
                <div class="header__menubars-container">
                    <i class="fa-solid fa-bars"></i>
                </div>
                <div class="header__title-banner">
                    <h1 class="header__title"> <a href="<?php echo home_url() ?>">cisarts</a></h1>
                    <p class="header__subtitle">Schildercursussen en workshops</p>
                </div>
                <div class="wrapper">
                    <div class="header__menu">
                        <?php wp_nav_menu(array(
                            'menu' => 'main-menu',
                            'class' => 'main-menu',
                            'container' => ''
                        )) ?>
                    </div>
                </div>
                <?php if (has_post_thumbnail()) { ?>
                    <div class="header__banner">
                        <?php echo get_the_post_thumbnail() ?>
                        <div class="welcomecard__wrapper">
                            <div class="welcomecard">
                                <h2>Welkom bij Cisarts</h2>
                                <p>In het kort weten wat ik doe?</p>
                                <a href="<?php echo get_page_uri('contact') ?>/contact">Klik hier!</a>
                            </div>
                        </div>
                        <div class="image-overlay"></div>
                    </div>
                <?php } ?>
            </div>
        </header>