<?php if ( is_active_sidebar( 'footer' ) ) : ?>
    <?php dynamic_sidebar( 'footer' ); ?>
    <style>
        @media screen and (min-width: 1200px) {
            main {
                margin-bottom: 400px;
            }
        }          
    </style>
<?php endif; ?>