<!-- function for bringing up all the functions included on this page -->

<?php get_header(); ?>




        <!-- modal menu -->
        <?php get_template_part('parts/banner', 'top-main-frontpage'); ?>
        <?php get_template_part('parts/modal', 'page-slider'); ?>

        <?php

        echo get_template_directory_uri();
        echo bloginfo('template_directory');

        ?>



<?php get_footer(); ?>

