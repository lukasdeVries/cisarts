<?php if (is_active_sidebar('portfolio')) { ?>
    <div class="portfolio">
        <div class="portfolio__header">
            <h2 class="portfolio__title">Portfolio en workshops</h2>
            <p class="portfolio__subtitle">Hieronder een impressie van mijn portfolio en cursus opdrachten. Neem een kijkje!</p>
        </div>
        <div class="portfolio__grid">
            <?php dynamic_sidebar('portfolio') ?>
        </div>
    </div>
<?php } ?>