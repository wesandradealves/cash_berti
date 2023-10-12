<section data-block-id="<?php echo $args['block']['id']; ?>" class="faq">
    <div class="container">
        <?php if($args['fields']['title']) : ?>
            <h2 class="d-block title"><?php echo $args['fields']['title']; ?></h2>
        <?php endif; ?>
        <?php
            if( $args['fields']['q']->have_posts() ) {
                ?>
                <div class="faq-list">
                    <?php 
                        while( $args['fields']['q']->have_posts() ) {
                            $args['fields']['q']->the_post(); ?>
                            <article class="faq-item">
                                <h3 class="d-flex align-items-center justify-content-between title"><?php the_title(); ?> <i class="fa-solid fa-plus"></i></h3>
                                <div class="d-none text">
                                    <?php the_content(); ?>
                                </div>
                            </article>
                            <?php
                        }                    
                    ?>
                </div>
                <?php
            }
        ?>
    </div>
</section>