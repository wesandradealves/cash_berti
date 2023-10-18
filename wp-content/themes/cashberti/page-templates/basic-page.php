<?php /* Template Name: Basic Page */ ?>
<?php get_header(); ?>
<?php get_template_part('template_parts/_banner', null, array()); ?>
<section class="content">
    <div class="container">
        <?php 
            if ( have_posts() ) :
                while ( have_posts() ) :
                    the_post(); 
                    the_content();
                endwhile; 
            endif;
        ?>
    </div>
</section>
<?php get_footer(); ?>