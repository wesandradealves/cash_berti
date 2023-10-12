<section data-block-id="<?php echo $args['block']['id']; ?>" class="latest-posts <?php echo strtolower($args['fields']['layout']); ?>">
    <div class="container">
        <?php if($args['fields']['title']) : ?>
            <h2 class="d-flex title  text-center text-sm-start">
                <span>
                    <?php echo $args['fields']['title']; ?>
                </span>
            </h2>
        <?php endif; ?>
    </div>
    <?php
        if( $args['fields']['q']->have_posts() ) {
            ?>
            <div class="posts">
                <?php 
                    while( $args['fields']['q']->have_posts() ) {
                        $args['fields']['q']->the_post(); ?>
                        <?php get_template_part('template_parts/_post-card', null, array(
                            "imagem" => get_the_post_thumbnail_url(),
                            "url" => get_the_permalink(),
                            "title" => get_the_title()
                        )); ?>
                        <?php
                    }                    
                ?>
            </div>
            <?php
            wp_reset_query();
            wp_reset_postdata();              
        }
    ?>
</section>