<?php /* Template Name: Frontpage */ ?>
<?php get_header(); ?>
<?php 
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post(); 
            ?>
            <?php get_template_part('template_parts/_banner', null, array()); ?>
            <?php 
        endwhile; 
    endif;
?>
<?php get_footer(); ?>