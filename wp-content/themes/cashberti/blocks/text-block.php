<?php 
    $title = $args['data'] ? $args['data']['title'] : $args['fields']['title'];
    $text = $args['data'] ? $args['data']['texto'] : $args['fields']['text'];
    $cta = $args['data'] ? $args['data']['cta'] : $args['fields']['items_cta'];
    $items = $args['data'] ? $args['data']['items'] : $args['fields']['items']['items'];
?>

<section data-block-id="<?php echo $args['block']['id']; ?>" class="text-block">
    <div class="container d-flex flex-wrap align-items-start">
        <div class="col-12 col-lg-6 mb-5 mb-lg-0 pe-lg-5">
            <?php if($title) : ?>
                <h2 class="d-flex title">
                    <span>
                        <?php echo $title; ?>
                    </span>
                </h2>
                <?php if($cta) : ?>
                    <a href="<?php echo $cta['url']; ?>" class="btn d-inline-block me-auto mt-5 <?php echo $cta['classes']; ?>"><?php echo $cta['label']; ?></a>
                <?php endif; ?>
            <?php endif; ?>                       
        </div>
        <?php if($text || $items) : ?>
            <div class="text flex-fill">
                <?php if($items) : ?>
                    <ul class="d-flex flex-wrap items">
                        <?php foreach ($items as $key => $item) : ?>
                            <li class="col-12 col-sm-6 item d-flex align-items-start flex-wrap">
                               <p><?php echo $item['text']; ?> </p>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php else : ?>
                    <?php echo $text; ?>
                <?php endif; ?>   
            </div>
        <?php endif; ?>   
    </div>
</section>