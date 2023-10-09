<?php get_header(); ?>
    <?php get_template_part('template_parts/_banner', null, array( 
        'body' => get_field('404_body', 'option'),
        'image' => get_field('404_imagem', 'option'),
    )); ?>   
<?php get_footer(); ?>