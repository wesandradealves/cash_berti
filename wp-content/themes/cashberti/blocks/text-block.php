<section data-block-id="<?php echo $args['block']['id']; ?>" class="text-block">
    <div class="container d-flex flex-wrap align-items-start">
        <div class="col-12 col-md-6 mb-5 mb-md-0 pe-md-5">
            <?php if($args['fields']['title']) : ?>
                <h2 class="d-flex title">
                    <span>
                        <?php echo $args['fields']['title']; ?>
                    </span>
                </h2>
            <?php endif; ?>                       
        </div>
        <?php if($args['fields']['text']) : ?>
            <div class="text flex-fill">
                <?php echo $args['fields']['text']; ?>
            </div>
        <?php endif; ?>   
    </div>
</section>