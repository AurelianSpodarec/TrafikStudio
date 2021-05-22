<x-section>
<div class="flex">


    <?php
        $args = array( 
            'posts_per_page' => '3',
        );
        $the_query = new WP_Query( $args );
    ?>

    <?php if ( $the_query->have_posts() ) : ?>

        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <article class="w-full md:w-1/3">

            <a href="<?php echo get_permalink(); ?>">
                <img src="" alt="" />
                <?php echo get_the_post_thumbnail(); ?>
            </a>

            <header>
                <span>A <span>3minute</span> read by <a href="">Company</a>
                <h2>
                <a href="<?php echo get_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
                </h2>
            </header>

        </article>
        <?php endwhile; ?>
    
        <?php wp_reset_postdata(); ?>
 
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>


</div>
</x-section>