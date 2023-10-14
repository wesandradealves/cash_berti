<?php get_header(); ?>
<?php 
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post(); 
            ?>
            <?php get_template_part('template_parts/_banner', null, array()); ?>
            <?php 
                if(get_field('vantagens')) {
                    get_template_part('blocks/text-block', null, array(
                        "data" => get_field('vantagens')
                    ));                    
                }
                if(get_field('tabs')) {
                    get_template_part('blocks/tabs', null, array(
                        "data" => get_field('tabs')
                    ));                    
                }                   
                if(get_field('text')) {
                    get_template_part('blocks/text-block', null, array(
                        "data" => get_field('text')
                    ));                    
                }                
                ?>
            <?php 
        endwhile; 
    endif;
?>
<?php get_footer(); ?>