<?php /* Template Name: Trabalhe Conosco */ ?>
<?php get_header(); ?>
<?php 
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post(); 
            ?>
            <?php get_template_part('template_parts/_banner', null, array()); ?>
            <?php the_content() ?>
            <?php 
        endwhile; 
    endif;
?>
<?php if(get_Field('form_form_id')) : ?>
<section class="form">
    <div class="container d-flex flex-wrap align-items-end">
        <?php if(get_field('form_imagem')) : ?>
            <div class="d-none d-xl-block flex-fill">
                <img loading="lazy" class="img-fluid" src="<?php echo get_field('form_imagem'); ?>">
            </div>
        <?php endif; ?>
        <?php if(get_field('form_form_id')) : ?>
            <div class="col-12 col-lg-6">
                <?php echo do_shortcode('[contact-form-7 id="'.get_field('form_form_id').'" title="Trabalhe Conosco"]'); ?>    
            </div>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>
<?php get_footer(); ?>