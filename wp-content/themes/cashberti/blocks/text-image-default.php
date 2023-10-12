<section data-block-id="<?php echo $args['block']['id']; ?>" class="text-image-default <?php echo strtolower($args['fields']['layout']); ?>">
    <div class="container d-flex flex-wrap align-items-center">
        <div class="col-12 col-md-4">
            <?php if($args['fields']['title']) : ?>
                <h2 class="d-flex title  text-center text-sm-start">
                    <span>
                        <?php echo $args['fields']['title']; ?>
                    </span>
                </h2>
            <?php endif; ?>
            <?php if($args['fields']['text']) : ?>
                <div class="text mt-3 mb-5 d-block">
                    <?php echo $args['fields']['text']; ?>
                </div>
            <?php endif; ?>    
            <?php if($args['fields']['cta']) : ?>
                <ul class="d-flex align-items-center mt-4">
                    <?php foreach ($args['fields']['cta'] as $item) : ?>
                        <li class="me-2">
                            <a href="<?php echo $item['url']; ?>" class="btn <?php echo $item['classes']; ?>"><?php echo $item['label']; ?></a>
                        </li>
                    <?php endforeach; ?>   
                </ul>
            <?php endif; ?>                        
        </div>
        <?php if($args['fields']['imagem']) : ?>
            <div class="d-flex align-items-center justify-content-center flex-fill">
                <img loading="lazy" class="d-block img-fluid" src="<?php echo $args['fields']['imagem']; ?>" alt="<?php echo $args['fields']['title']; ?>">
            </div>
        <?php endif; ?>
    </div>
</section>