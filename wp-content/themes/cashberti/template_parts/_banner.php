<?php 
    $banner_layout = is_single() ? "boxed" : strtolower(get_field('banner_layout'));
    $banner_imagem = $args['data'] ? $args['data']['banner_imagem'] : (is_single() ? get_the_post_thumbnail_url() : get_field('banner_imagem'));
    $banner_titulo = $args['data'] ? $args['data']['banner_titulo'] : (is_single() ? get_the_title() : (get_field('banner_titulo') ? get_field('banner_titulo') : get_the_title()));
    $banner_texto = $args['data'] ? $args['data']['banner_texto'] : (is_single() ? get_the_excerpt() : get_field('banner_texto'));
    $banner_cta = $args['data'] ? $args['data']['banner_cta'] : get_field('banner_cta');
?>

<section class="banner <?php echo $banner_layout; ?>">
    <div class="container d-flex flex-wrap <?php if($banner_layout == 'boxed' || is_single()) : ?> align-items-start <?php else : ?> align-items-center <?php endif; ?>">
        <?php if($banner_imagem) : ?>
        <div class="d-none d-lg-flex <?php if($banner_layout !== 'boxed') : ?> align-items-center justify-content-center <?php endif; ?> flex-fill">
            <img loading="lazy" class="img-fluid" src="<?php echo $banner_imagem; ?>" alt="<?php echo $banner_titulo; ?>">
        </div>
        <?php endif; ?>
        <div class="col-12 col-lg-6">
            <?php if(!is_home() && !is_front_page()) : ?>
                <nav class="breadcrumbs d-block mb-3">
                    <?php if( function_exists( 'aioseo_breadcrumbs' ) ) aioseo_breadcrumbs(); ?>
                </nav>   
            <?php endif; ?>         
            <h2 class="d-block title"><?php echo $banner_titulo; ?></h2>
            <?php if($banner_texto) : ?>
                <span class="text d-block mt-4">
                    <?php echo $banner_texto; ?>
                </span>
            <?php endif; ?> 
            <?php if($banner_cta) : ?>
                <ul class="ctas d-flex align-items-center mt-4">
                    <?php
                        foreach ($banner_cta as $key => $item) {
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