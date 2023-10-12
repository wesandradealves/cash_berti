<section data-block-id="<?php echo $args['block']['id']; ?>" class="item-carousel">
    <div class="container">
        <?php if($args['fields']['title']||$args['fields']['text']) : ?>
            <h2 class="d-block title"><?php echo $args['fields']['title']; ?></h2>
            <?php if($args['fields']['text']) : ?>
                <div class="d-block text mt-3">
                    <?php echo $args['fields']['text']; ?>
                </div>
            <?php endif; ?>
        <?php endif; ?>   
    </div>
    <?php
        if($args['fields']['items']) {
            ?>
            <div class="items mt-5">
                <?php foreach ($args['fields']['items'] as $item) : ?>
                    <article class="item">
                        <div class="inner d-flex align-items-center justify-content-center">
                            <a href="<?php echo $item['url'] ?>"><img loading="lazy" class="img-fluid" src="<?php echo $item['imagem'] ?>" /></a>
                        </div>
                    </article>
                <?php endforeach;  ?>
            </div>
            <?php
        }
    ?>     
</section>