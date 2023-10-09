<div class="topbar">
    <div class="container d-flex flex-wrap flex-column flex-md-row align-items-center justify-content-center">
        <?php if($args['data']['texto']) : ?>
            <p class="mb-3 mb-md-0 title d-block"><?php echo $args['data']['texto']; ?></p>
        <?php endif; ?>
        <?php if($args['data']['links']) : ?>
            <ul class="d-flex align-items-center">
                <?php foreach ($args['data']['links'] as $item) : ?>
                    <li>
                        <a class="d-block" href="<?php echo $item['link']; ?>"><img loading="lazy" class="img-fluid" src="<?php echo $item['imagem']; ?>" /></a>  
                    </li>                
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>          
    </div>
</div>