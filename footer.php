<footer class="footer">
    <div class="wrapper">
        <div class="footer__left">
            <?php dynamic_sidebar('footer_left') ?>
        </div>
        <div class="footer__right">
            <?php dynamic_sidebar('footer_right') ?>
        </div>
    </div>
</footer>
</div>
<div class="mobile-menu__overlay invisible">
    <?php wp_nav_menu(array(
        'menu' => 'main-menu',
        'menu_class' => 'mobile-menu',
        'container' => ''
    )) ?>
    <div class="mobile-menu__close">
        <i class="fa-solid fa-xmark"></i>
    </div>
</div>
<?php wp_footer() ?>
</body>

</html>