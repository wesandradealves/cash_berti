<section data-block-id="<?php echo $args['block']['id']; ?>" class="block-newsletter <?php echo strtolower($args['fields']['layout']); ?>">
    <div class="container d-flex flex-wrap <?php if(strtolower($args['fields']['layout']) == 'compact') : ?> align-items-center <?php else : ?> align-items-stretch <?php endif; ?>">
        <div class="col-12 col-lg-6 <?php if(strtolower($args['fields']['layout']) == 'compact') : ?> pe-5 d-none d-lg-flex align-items-center justify-content-center <?php endif; ?>">
            <?php if(strtolower($args['fields']['layout']) == 'compact') : ?>
                <img class="d-block img-fluid" loading="lazy" src="<?php echo $args['fields']['imagem']; ?>" />
            <?php else : ?>
                <h2 class="d-block title"><?php echo $args['fields']['title']; ?></h2>
                <div class="d-block text">
                    <?php echo $args['fields']['text']; ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="col-12 col-lg-6">
            <?php if(strtolower($args['fields']['layout']) !== 'compact') : ?>
                <img class="d-block img-fluid" loading="lazy" src="<?php echo $args['fields']['imagem']; ?>" /> 
            <?php else : ?>
                <h2 class="d-block title mb-2"><?php echo $args['fields']['title']; ?></h2>                             
            <?php endif; ?>
            <?php if($args['fields']['form_id']) : ?>
                <div class="d-block form">
                    <?php echo do_shortcode('[contact-form-7 id="'.$args['fields']['form_id'].'" title="Trabalhe Conosco"]'); ?>    
                </div>
            <?php endif; ?>   
        </div>
    </div>
</section>