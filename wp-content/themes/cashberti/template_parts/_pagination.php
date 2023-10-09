<div class="pagination mb-5 pb-5 d-flex align-items-stretch justify-content-center flex-wrap <?php echo $args['classes']; ?>">
    <?php 
        $paged = get_query_var('paged');
        $paged = ($paged) ? $paged : 1;
        $total_pages = $wp_query->max_num_pages;

        if ($total_pages > 1) :
            $current_page = max(1, get_query_var('paged')); 

            $args = array(
                'base' => preg_replace('/\?.*/', (is_search() ? '' : '/'), get_pagenum_link(1)) . '%_%',
                'current' => max(1, get_query_var('paged')),
                'format' => 'page/%#%',
                'total' => $wp_query->max_num_pages,
                'prev_text' => __('<i class="fa fa-angle-left" aria-hidden="true"></i>
                '),
                'next_text' => __('<i class="fa fa-angle-right" aria-hidden="true"></i>
                '),
            );

            $arr = array(
                's' => get_query_var('s'),
                'post_type' => get_query_var('post_type'),
            );

            if(is_search()) {
                $taxonomies = array();

                // if(isset($_GET['categoria']) && $_GET['categoria'] !== '') {
                //     $term = get_term($_GET['categoria']);
        
                //     $arr['tax_query'] = array(
                //         array(
                //             'taxonomy' => $term->taxonomy,
                //             'field' => 'term_id',
                //             'terms' => $term->term_id
                //         )
                //     );
                // }

                if(isset($_GET['categoria']) && $_GET['categoria'] !== '') {
                    $term = get_term($_GET['categoria']);
        
                    array_push($taxonomies,  array(
                        'taxonomy' => $term->taxonomy,
                        'field' => 'term_id',
                        'terms' => $term->term_id,
                        'operator' => 'IN'
                    ));
                }
                
                if(isset($_GET['tag']) && $_GET['tag'] !== '') {
                    $term = get_term($_GET['tag']);
        
                    array_push($taxonomies,  array(
                        'taxonomy' => $term->taxonomy,
                        'field' => 'term_id',
                        'terms' => $term->term_id,
                        'operator' => 'IN'
                    ));
                }                

                $arr['tax_query'] = array(
                    'relation' => 'OR',
                    $taxonomies,
                );                  

                $args['add_args'] = $arr;
            }

            echo paginate_links($args);        

            wp_reset_query();
            wp_reset_postdata();                         
        endif;
    ?>
</div>