<?php 
    $imagem = $args['data'] ? get_the_post_thumbnail_url($args['data']) : $args['fields']['imagem'];
    $data = $args['data'] ? $args['data'] : $args['fields']['items'];
?>

<section data-block-id="<?php echo $args['block']['id']; ?>" class="text-carousel">
    <div class="container d-flex flex-wrap  align-items-start">
        <?php if($imagem) : ?>
            <div class="d-none d-lg-flex">
                <img loading="lazy" class="img-fluid" src="<?php echo $imagem; ?>"/>
            </div>            
        <?php endif; ?>        
        <?php if($data) : ?>
            <div class="col-12 col-lg-7">
                <?php if(is_iterable($data)) : ?>
                    <div class="items col-12">
                        <?php foreach ($data as $item) : ?>
                            <article class="text-lg-end">
                                <h3 class="d-block title mb-4"><?php echo $item['title']; ?></h3>
                                <p class="d-block text"><?php echo $item['text']; ?></p>
                            </article>
                        <?php endforeach; ?>
                    </div>
                    <nav class="d-flex align-items-center justify-content-between  text-carousel-navigation">
                        <button class='text-carousel-prev'><i class="fa-solid fa-angle-left"></i></button>
                        <button class='text-carousel-next'><i class="fa-solid fa-angle-right"></i></button>
                    </nav>
                <?php else : ?>
                    <article class="content col-12">
                        <h3 class="d-block title mb-4"><?php echo $data ? get_the_title($data) : $item['title']; ?></h3>
                        <p class="d-block text"><?php echo $data ? get_the_excerpt($data) : $item['text']; ?></p>
                        <a class="mt-5 d-block" href="<?php echo get_the_permalink($data); ?>">Saiba Mais</a>
                    </article>
                <?php endif; ?>
            </div>              
        <?php endif; ?>
    </div>
</section>