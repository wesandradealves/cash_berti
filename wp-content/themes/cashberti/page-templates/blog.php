<?php /* Template Name: Blog */ ?>
<?php get_header(); ?>
<?php 
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post(); 
            ?>
            <?php get_template_part('template_parts/_banner', null, array()); ?>
            <?php the_content() ?>        
            <?php 
        endwhile; 
    endif;
?>
<section id="blog" class="todas-as-noticias">
    <div class="container">
        <h2 class="title d-block mb-5">Todas as notícias</h2>
        <?php get_search_form(); ?>
        <div class="posts">
            <?php 
                $paged = get_query_var('paged');
                $paged = ($paged) ? $paged : 1;

                $args = array(
                    'post_type' => $_GET['p'],
                    'order' => 'DESC',
                    'posts_per_page'      => 12, 
                    'paged'          => $paged 
                );      

                if(isset($_GET['cat'])) {
                    $args['cat'] = $_GET['cat'];
                }

                if(isset($_GET['keyword'])) {
                    $args['s'] = $_GET['keyword'];
                }                
                
                $query = new WP_Query($args);    
            ?>
            <?php if ($query->have_posts()) : ?>
            <div class="grid d-flex flex-wrap align-items-stretch">
                <?php while ( $query->have_posts() ) : $query->the_post();  ?>
                    <?php get_template_part('template_parts/_post-card', null, array(
                        "imagem" => get_the_post_thumbnail_url(),
                        "url" => get_the_permalink(),
                        "title" => get_the_title(),
                        "classes" => "col-12 col-md-4"
                    )); ?>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
            <?php 
                $total_pages = $query->max_num_pages;
                if ($total_pages > 1) :
                    $current_page = max(1, get_query_var('paged')); 
        
                    $args = array(
                        'base' => preg_replace('/\?.*/', (is_search() ? '' : '/'), get_pagenum_link(1)) . '%_%',
                        'current' => max(1, get_query_var('paged')),
                        'format' => 'page/%#%',
                        'total' => $query->max_num_pages,
                        'prev_text' => __('<i class="fa fa-angle-left" aria-hidden="true"></i>
                        '),
                        'next_text' => __('<i class="fa fa-angle-right" aria-hidden="true"></i>
                        '),
                    );
        
                    $arr = array(
                        's' => get_query_var('keyword'),
                        'post_type' => get_query_var('post_type'),
                    );

                    if(isset($_GET['cat'])) {
                        $arr['cat'] = $_GET['cat'];
                    }      
                    
                    $args['add_args'] = $arr;
                    
                    ?>
                    <nav class="pagination d-flex align-items-center justify-content-center">
                        <?php echo paginate_links($args); ?>
                    </nav>
                    <?php 
                endif;   
                wp_reset_query();
                wp_reset_postdata();                       
            ?>
        </div>
    </div>
</section>  
<?php get_footer(); ?>