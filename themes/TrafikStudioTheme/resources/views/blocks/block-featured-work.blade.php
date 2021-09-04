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

        <?php $count = 0; ?>
        <?php if ( $query->have_posts() ) : ?>
        <?php while ($query->have_posts()) : $query->the_post(); ?>


            
            <article class="work-item  w-full lg:w-1/3">
            <a 
                class="work-item__link work-item__excerpt-link"
                data-aos="fade-up"
                data-aos-delay="{{ 50 + $count * 100 }}" 
                data-aos-duration="400"
                data-aos-easing="ease-in-out"
                data-aos-once="true"  
                data-aos-offset="200" 
                href="<?php the_permalink(); ?>
            ">
                <?php $client_term = get_the_terms(get_the_ID(), 'client_category'); ?>
                <div class="work-item__inner">
                    <p class="work-item__client"><?php echo $client_term[0]->name ?></p>
                    <h2 class="work-item__heading"><?php the_title(); ?></h2>

                    <p class="work-item__cta">View Project</p>
                </div>

                <?php if ( $featured_video = get_field( 'featured_video',get_the_ID() ) ) : ?>
                    <video class="work-item__img" width="100%" autoplay muted loop>
                        <source data-src=<?php echo $featured_video; ?> type="video/ogg">
                    </video>
                <?php else: ?>
                    <img class="work-item__img js-lazy is-active" data-src="<?php echo get_the_post_thumbnail_url() ?>" alt="To do">
                <?php endif; ?>

            </a>
            </article>
    

        <?php $count++; ?>
        <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>

    </div>
</div>




   