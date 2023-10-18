<?php get_header(); ?>
<?php get_template_part('template_parts/_banner', null, array()); ?>
<?php 
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post(); 
            the_content();
        endwhile; 
    endif;
?>
<?php get_footer(); ?>