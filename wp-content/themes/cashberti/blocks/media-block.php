<section data-block-id="<?php echo $args['block']['id']; ?>" class="media-block">
    <div class="container d-flex align-items-stretch flex-row<?php if($args['fields']['reverse']) : ?>-reverse <?php endif; ?> flex-wrap">
        <div class="col-12 col-lg-6">
            <?php if($args['fields']['title']) : ?>
                <h2 class="d-flex title">
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
        </div>
        <div class="col-12 col-lg-6">
            <?php if($args['fields']['imagem']) : ?>
                <img src="<?php echo $args['fields']['imagem']; ?>" class="d-block img-fluid col-12" />
            <?php else : ?>
                <div data-vid="<?php echo $args['fields']['video_id']; ?>" class="yu2fvl" style="background: url(<?php echo "https://i.ytimg.com/vi/".$args['fields']['video_id']."/maxresdefault.jpg"; ?>) center center / cover no-repeat transparent"></div>
            <?php endif; ?>  
        </div>
    </div>
</section>