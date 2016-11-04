<section class="page ">
    <div id="post-<?php the_ID(); ?>">
<!--    <div id="post---><?php //str_replace(' ', '-',the_title()); ?><!--">-->
        <h2 class=""><?php the_title(); ?></h2>
        <div class="page__inner">
            <div class="page__inner__content">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</section>