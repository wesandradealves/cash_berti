<?php if ( is_active_sidebar( 'footer' ) ) : ?>
    <?php dynamic_sidebar( 'footer' ); ?>
    <style>
        @media screen and (min-width: 992px) {
            main {
                margin-bottom: 460px;
            }
        }          
    </style>
<?php endif; ?>