<section data-block-id="<?php echo $args['block']['id']; ?>" class="text-image-default <?php echo strtolower($args['fields']['layout']); ?>">
    <div class="container d-flex flex-wrap align-items-<?php echo strtolower($args['fields']['layout'])  == 'boxed' ? 'stretch' : 'center'; ?> flex-row<?php echo $args['fields']['reverse'] ? '-reverse' : ''; ?>">
        <div class="flex-fill mt-5 mt-lg-0 order-2 order-lg-1 <?php echo $args['fields']['reverse'] ? 'ps-lg-5' : 'pe-lg-5'; ?>">
            <?php if($args['fields']['title']||$args['fields']['subtitle']) : ?>
                <?php if($args['fields']['subtitle']) : ?>
                    <p class="subtitle d-block mb-3 text-<?php echo strtolower($args['fields']['layout'])  == 'boxed' && $args['fields']['reverse'] ? 'xl-end' : 'text-start'; ?>"><?php echo $args['fields']['subtitle']; ?></p>
                <?php endif; ?>
                <h2 class="d-flex title <?php echo strtolower($args['fields']['layout'])  == 'boxed' && $args['fields']['reverse'] ? 'text-xl-end' : 'text-start'; ?>">
                    <span>
                        <?php echo $args['fields']['title']; ?>
                    </span>
                </h2>
            <?php endif; ?>
            <?php if($args['fields']['text']) : ?>
                <div class="text mt-3 mb-5 d-block <?php echo strtolower($args['fields']['layout'])  == 'boxed' && $args['fields']['reverse'] ? 'text-xl-end' : 'text-start'; ?>">
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
            <div class="order-1 order-lg-2 d-flex align-items-center justify-content-center col-12 col-lg-<?php echo strtolower($args['fields']['layout'])  == 'boxed' ? '5' : '6'; ?>">
                <img loading="lazy" class="d-block img-fluid m-auto col-<?php echo strtolower($args['fields']['layout'])  == 'boxed' ? '12' : 'auto'; ?>" src="<?php echo $args['fields']['imagem']; ?>" alt="<?php echo $args['fields']['title']; ?>">
            </div>
        <?php endif; ?>
    </div>
</section>