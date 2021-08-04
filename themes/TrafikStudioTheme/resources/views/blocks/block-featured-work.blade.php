   <?php 
        $args = [
           
            'post_type' => 'work',
            'posts_per_page' => 3   ,
        ];

        $query = new Wp_Query($args); ?>


        
<div>

    <div></div>


    <div></div>

</div>



<div class="px-8">
    <div class="flex flex-wrap justify-between mb-16">
        <h3 class="text-6xl font-bold text-white">Featured Work</h3>

        <x-button>View all our work</x-button>
    </div>

    <div class="flex flex-wrap work-list featured-work">

        <?php if ( $query->have_posts() ) : ?>
        <?php while ($query->have_posts()) : $query->the_post(); ?>

            <article class="work-item w-full md:w-1/3">
            <a class="work-item__link" href="<?php the_permalink(); ?>">
                <img src="https://d2jd1xj0qdoqs5.cloudfront.net/craft/uploads/Work/VFC/vfc_grid-third.jpg?mtime=20210120145955" />
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

    </div>
</div>




   