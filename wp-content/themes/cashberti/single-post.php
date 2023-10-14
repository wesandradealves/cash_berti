<?php get_header(); ?>
<?php get_template_part('template_parts/_banner', null, array()); ?>
<section class="content">
    <div class="container">
        <?php 
            if ( have_posts() ) :
                while ( have_posts() ) :
                    the_post(); 
                    the_content();
                endwhile; 
            endif;
        ?>
    </div>
</section>
<?php 
    $page = get_posts(array('post_type' => 'page', 'title' => 'blog'));
    $page = reset($page);
    $blocks = parse_blocks( $page->post_content );

    if($page) {
        $newsletter = array_filter($blocks, function ($item) {
            return ($item['blockName'] == 'acf/block-newsletter');
        });
    
        if($newsletter) {
            $newsletter = reset($newsletter)['attrs']['data'];
            get_template_part('blocks/block-newsletter', null, array(
                "fields" => array("title" => $newsletter["title"],
                "text" => $newsletter["text"],
                "cta" => $newsletter["cta"],
                "layout" => $newsletter["layout"],
                "imagem" => $newsletter["imagem"] ? wp_get_attachment_image_src($newsletter["imagem"], 'large')[0] : null,
                "form_id" => $newsletter["form_id"])
            ));        
        } 

        $latest_posts = array_filter($blocks, function ($item) {
            return ($item['blockName'] == 'acf/latest-posts');
        });        

        if($latest_posts) {
            $latest_posts = reset($latest_posts)['attrs']['data'];
            get_template_part('blocks/latest-posts', null, array(
                "fields" => array(
                    "title" => $latest_posts["title"],
                    "layout" => $latest_posts["layout"],
                    "q" => new WP_Query( array(
                    'order' => 'DESC',
                    'post_type'      => "post",
                    'posts_per_page' => -1,
                    'post__not_in' => array(get_the_id())
                ) )),
            ));      
        } 
    }
?>
<?php get_footer(); ?>