<section data-block-id="<?php echo $args['block']['id']; ?>" class="logos-block">
    <div class="container d-flex flex-wrap align-items-stretch p-0">
        <div class="flex-fill order-md-1 order-2 d-flex align-items-center justify-content-center">
            <?php if($args['fields']['title']||$args['fields']['text']) : ?>
                <h2 class="d-block title"><?php echo $args['fields']['title']; ?></h2>
            <?php endif; ?>   
        </div>
        <div class="col-12 col-md-6 col-xxl-4 order-md-2 order-1 d-flex align-items-center justify-content-center">
            <?php
                if($args['fields']['items']) {
                    ?>
                    <div class="items col-12 overflow-hidden">
                        <?php foreach ($args['fields']['items'] as $item) : ?>
                            <article class="item d-flex align-items-center justify-content-center overflow-hidden">
                                <div class="inner overflow-hidden">
                                    <a href="<?php echo $item['url'] ?>"><img loading="lazy" class="img-fluid" src="<?php echo $item['imagem'] ?>" /></a>
                                </div>
                            </article>
                        <?php endforeach;  ?>
                    </div>
                    <?php
                }
            ?>               
        </div>
    </div>  
</section>