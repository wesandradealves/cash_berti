<?php 
    $tabs = $args['data'] ? $args['data']['tabs'] : $args['fields']['tabs']['tabs'];
    $cta = $args['data'] ? $args['data']['cta'] : $args['fields']['tabs']['cta'];
?>

<section data-block-id="<?php echo $args['block']['id']; ?>" class="tabs">
    <div class="container">
        <?php if($tabs) : ?>
            <nav class="tabs-nav d-flex flex-column flex-wrap align-items-center justify-content-between">
                <ul class="d-flex flex-row flex-md-column flex-fill col-12 overflow-auto">
                    <?php foreach ($tabs as $key => $tab) : ?>
                        <li class="d-block">
                            <a class="d-flex align-items-center justify-content-center <?php echo $key == 0 ? "active" : ""; ?>" data-tab="<?php echo $key; ?>" href="javascript:void(0)">
                                <span class="m-auto text-center d-inline-block">
                                    <?php echo $tab['title']; ?>
                                </span>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <?php if($cta) : ?>
                    <a href="<?php echo $cta['url']; ?>" class="btn d-inline-block m-auto mt-5 <?php echo $cta['classes']; ?>"><?php echo $cta['label']; ?></a>
                <?php endif; ?>
            </nav>
            <div class="tabs-content col-12 col-md-7 d-block ms-auto">
                <?php foreach ($tabs as $key => $tab) : ?>
                    <article class="<?php echo $key == 0 ? "visible" : "hidden"; ?> tab col-12" data-tab="<?php echo $key; ?>">
                        <div class="inner">
                            <?php if($tab['items']): ?>
                                <div class="col-12 tabs-carousel">
                                    <?php foreach ($tab['items'] as $key => $item) : ?>
                                        <article class="d-flex flex-column justify-content-center align-items-center text-center">
                                            <img loading="lazy" class="d-inline-block m-auto img-fluid" src="<?php echo $item['imagem']; ?>" alt="<?php echo $item['title']; ?>">
                                            <h3 class="d-block title mt-4"><?php echo $item['title']; ?></h3>
                                            <p class="d-block text mt-5"><?php echo $item['text']; ?></p>
                                        </article>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>