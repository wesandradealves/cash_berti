<?php if( have_rows('contact_social_networks', 'option') ): ?>
    <nav class="social-networks <?php echo isset($args['classes']) ? $args['classes'] : ''; ?>">
        <?php if($args['title']) : ?>
            <p class="title d-block mb-2"><?php echo $args['title']; ?></p>
        <?php endif; ?>
        <ul class="d-flex flex-wrap align-items-center">
            <?php $i = 0; while( have_rows('contact_social_networks', 'option') ) : $i++; the_row(); ?>
                <li class="nav-item">
                    <a class="nav-link" target="_blank" href="<?php echo get_sub_field('url'); ?>">
                        <i class="<?php echo get_sub_field('icon'); ?>"></i>
                    </a>
                </li>                                
            <?php endwhile; ?>
        </ul>
    </nav>
<?php endif; ?>  