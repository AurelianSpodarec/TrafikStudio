<x-section>


    block-services-list
    {{-- List alll categories for services --}}



    <?php


        $ee = get_term_by('slug', 'development', 'service_type');
 
        //echo '<pre>' , var_dump($ee) , '</pre>';







        $args = array(
                'taxonomy' => 'service_type',
                'orderby' => 'name',
                'order'   => 'ASC'
            );

       $categories = get_categories($args);   
    ?>


    <?php
        foreach($categories as $custom_term) {
            wp_reset_query();

            $dd = array(
                'post_type' => 'services',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'services_type',
                        'field' => 'slug',
                        'terms' => $custom_term->slug,
                    ),
                ),
            );

            $args = array(
                'numberposts'	=> 10,
                'post_type'		=> 'services',
                'relation'		=> 'AND',
                'tax_query'		=> array(
                    array(
                        'taxonomy'	=> 'services_type',
                        'field'		=> 'slug',
                        'terms'		=> 'development'
                    ),
                    array(
                        'taxonomy'	=> 'services_type',
                        'field'		=> 'term_id',
                        'terms'		=> 22
                    )
                )
            );
            $custom_posts = get_posts( $args );

            //var_dump($dd);
            //print_r($custom_posts);
            
        }

    ?>





 
     
</x-section>