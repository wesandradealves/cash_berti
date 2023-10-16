<section data-block-id="<?php echo $args['block']['id']; ?>" class="testimonials">
    <div class="container">
        <?php if($args['fields']['title']) : ?>
            <h2 class="d-block title text-center"><?php echo $args['fields']['title']; ?></h2>
        <?php endif; ?>
        <?php if($args['fields']['items']) : ?>
            <div class="items">
                <?php foreach ($args['fields']['items'] as $item) : ?>
                    <article class="item">
                        <?php if($item['imagem']) : ?>
                            <img loading="lazy" class="img-fluid d-block" src="<?php echo $item['imagem']; ?>" alt="<?php echo $args['fields']['title']; ?>">
                        <?php else : ?>
                            <i class="fa-solid fa-user d-block"></i>
                        <?php endif; ?>
                        <h3 class="d-block title"><?php echo $item['title']; ?> <small class="d-block role"><?php echo $item['role']; ?></small></h3>
                        <p class="d-block text mt-4"><?php echo $item['text']; ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>  
    </div>
</section>