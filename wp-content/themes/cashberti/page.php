<?php get_header(); ?>
<?php 
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post(); 
            ?>
            <?php get_template_part('template_parts/_banner', null, array()); ?>
            <section id="primary" class="content">
                <div class="container">
                    <?php the_content() ?>
                </div>
            </section>            
            <?php 
        endwhile; 
    endif;
?>
<?php get_footer(); ?>