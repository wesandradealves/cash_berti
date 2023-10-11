<section class="banner <?php echo strtolower(get_field('banner_layout')); ?>">
    <div class="container d-flex flex-wrap <?php if(strtolower(get_field('banner_layout')) == 'boxed') : ?> align-items-start <?php else : ?> align-items-center <?php endif; ?>">
        <?php if(get_field('banner_imagem')) : ?>
        <div class="d-none d-lg-block flex-fill">
            <img loading="lazy" class="img-fluid" src="<?php echo get_field('banner_imagem'); ?>" alt="<?php echo get_field('banner_titulo'); ?>">
        </div>
        <?php endif; ?>
        <div class="col-12 col-lg-6">
            <?php if(!is_home() && !is_front_page()) : ?>
                <nav class="breadcrumbs d-block mb-3">
                    <?php if( function_exists( 'aioseo_breadcrumbs' ) ) aioseo_breadcrumbs(); ?>
                </nav>   
            <?php endif; ?>         
            <h2 class="d-block title"><?php echo get_field('banner_titulo') ? get_field('banner_titulo') : get_the_title(); ?></h2>
            <?php if(get_field('banner_texto')) : ?>
                <span class="text d-block mt-4">
                    <?php echo get_field('banner_texto'); ?>
                </span>
            <?php endif; ?> 
            <?php if(get_field('banner_cta')) : ?>
                <ul class="ctas d-flex align-items-center mt-4">
                    <?php
                        foreach (get_field('banner_cta') as $key => $item) {
                            ?>
                            <li>
                                <a class="btn <?php echo $item['classes'] ?>" href="<?php echo $item['url'] ?>"><?php echo $item['label'] ?></a>
                            </li>
                            <?php 
                        }
                    ?>
                </ul>
            <?php endif; ?>                        
        </div>
    </div>
</section>