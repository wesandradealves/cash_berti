<article class="post post-card <?php echo $args['classes']; ?>">
    <div class="inner d-flex flex-column justify-content-end" style="background: url(<?php echo $args['imagem']; ?>) center center / cover no-repeat transparent">
        <h3 class="d-block title">
            <a href="<?php echo $args['url']; ?>" title="<?php echo $args['title']; ?>"><?php echo $args['title']; ?></a>
        </h3>
        <a class="d-inline-flex btn secondary mt-4 me-auto" href="<?php echo $args['url']; ?>" title="<?php echo $args['title']; ?>">Ver mais</a>
    </div>
</article>