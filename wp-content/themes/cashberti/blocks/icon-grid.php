<section data-block-id="<?php echo $args['block']['id']; ?>" class="icon-grid">
    <div class="container">
        <?php if($args['fields']['title']) : ?>
            <h2 class="d-flex title text-center mb-5">
                <span>
                    <?php echo $args['fields']['title']; ?>
                </span>
            </h2>
        <?php endif; ?>
        <?php if($args['fields']['items']) : ?>
            <ul class="d-flex flex-wrap justify-content-between">
                <?php foreach ($args['fields']['items'] as $item) : ?>
                    <li class="flex-fill">
                        <img loading="lazy" class="img-fluid m-auto d-block" src="<?php echo $item['imagem']; ?>" alt="<?php echo $args['fields']['title']; ?>">
                        <h3 class="d-block title ps-5 pe-5 text-center mt-4"><?php echo $item['title']; ?></h3>
                        <p class="d-block text text-center mt-4"><?php echo $item['text']; ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>        
    </div>
</section>