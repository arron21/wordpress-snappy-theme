<?php
/*
    Template Name: Single Page Theme Page
*/


get_header(); ?>

<main>

            <?php
            $args = array("post_type" => "page", "order" => "ASC", "orderby" => "menu_order");
            $the_query = new WP_Query($args);
            ?>
            <?php if(have_posts()):while($the_query->have_posts()):$the_query->the_post(); ?>
                <?php get_template_part("content", "page"); ?>
            <?php endwhile; endif; ?>

</main>


<?php get_footer(); ?>
