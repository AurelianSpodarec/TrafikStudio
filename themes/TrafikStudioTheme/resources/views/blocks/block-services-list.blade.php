<x-section>


    block-services-list
    {{-- List alll categories for services --}}



<?php
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

    //var_dump($dd);
    echo '<pre>' , var_dump($dd) , '</pre>';
      
}



?>







<?php 


    foreach($categories as $category) { ?>
<?php
    $posts_array = get_posts(
    array(
        //'posts_per_page' => -1,
        'post_type' => 'services',
        'tax_query' => 
            array(
                'taxonomy' => 'services_type',
                'field' => 'term_id',
                'terms' => $category->term_id,
            )
         
    )
);
//var_dump($category->term_id);
//$posts_arravar_dump($posts_array);
//echo '<pre>' , var_dump($posts_array) , '</pre>';

$custom_terms = get_terms('custom_taxonomy');

?>
    
        <a href="<?php echo get_category_link( $category->term_id ) ?>">
            <h3 class="text-2xl font-bold"><?php echo $category->name; ?></h3>
        </a>

        <?php
            //print_r(get_term_by('id', '7' ,'service_type'));
        ?>



<?php } ?>


{{-- Get all taxonomies of services --}}

    {{-- LOOP START HERE --}}
    <div>
        {{-- Get All Term from Category Services --}}
        <h3></h3>

        {{-- Get all 'posts' name from the specific category --}}
        <ul>
            <li></li>
        </ul>
    </div>

</x-section>