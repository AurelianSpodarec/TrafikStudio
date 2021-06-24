<x-section>

     <div class="work-list">
    <?php 
        $args = [
           
            'post_type' => 'work',
            'posts_per_page' => 3   ,
        ];

        $query = new Wp_Query($args);
        ?>

        <?php if ( $query->have_posts() ) : ?>
            <?php while ($query->have_posts()) : $query->the_post(); ?>


            <article class="work-item">
            <a class="work-item__link" href="<?php the_permalink(); ?>">


                <?php $client_term = get_the_terms(get_the_ID(), 'client_category'); ?>
                <div class="work-item__inner">
                    <p class="work-item__client"><?php echo $client_term[0]->name ?></p>
                    <h2 class="work-item__heading"><?php the_title(); ?></h2>

                    <p class="work-item__cta">View Project</p>
                </div>

 
                <?php if ( $featured_video = get_field( 'featured_video',get_the_ID() ) ) : ?>
                    <video class="work-item__img" width="100%" autoplay muted loop>
                        <source src=<?php echo $featured_video; ?> type="video/ogg">
                    </video>
                <?php else: ?>
                    <img class="work-item__img js-lazy is-active" src="<?php echo get_the_post_thumbnail_url() ?>" alt="To do">
                <?php endif; ?>

            </a>
            </article>


        <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>

    <div>

</x-section>