<section data-block-id="<?php echo $args['block']['id']; ?>" class="icon-grid <?php echo $args['fields']['carousel'] ? 'carousel' : ''; ?>">
    <div class="container">
        <?php if($args['fields']['title']) : ?>
            <h2 class="d-flex title text-center mb-5">
                <span>
                    <?php echo $args['fields']['title']; ?>
                </span>
            </h2>
        <?php endif; ?>
        <?php if($args['fields']['items']) : ?>
            <div class="d-flex grid flex-wrap justify-content-between">
                <?php foreach ($args['fields']['items'] as $item) : ?>
                    <div class="flex-fill ps-4 pe-4 ps-md-0 pe-md-0">
                        <img loading="lazy" class="img-fluid m-auto d-block" src="<?php echo $item['imagem']; ?>" alt="<?php echo $args['fields']['title']; ?>">
                        <h3 class="d-block title ps-5 pe-5 text-center mt-4"><?php echo $item['title']; ?></h3>
                        <p class="d-block text text-center mt-4"><?php echo $item['text']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>        
    </div>
</section>