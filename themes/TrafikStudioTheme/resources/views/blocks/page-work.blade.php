<x-section> 
<div class="pl-5 pr-10">


    <div class=" work-list">
    <?php 
        $args = [
           
            'post_type' => 'work',
            'posts_per_page' => 10,
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

                <img class="work-item__img js-lazy is-active" src="https://d2jd1xj0qdoqs5.cloudfront.net/craft/uploads/Work/VFC/vfc_grid-wide.jpg?mtime=20210120145956" alt="Vfc Grid Mobile">
                <div>
                {{-- <div style="width:100%;height:0px;position:relative;padding-bottom:100.000%;"><iframe src="https://streamable.com/e/eu0tzj?autoplay=1&nocontrols=1" frameborder="0" width="100%" height="100%" allowfullscreen allow="autoplay" style="width:100%;height:100%;position:absolute;left:0px;top:0px;overflow:hidden;"></iframe></div> --}}
            </div>
            </a>
            </article>


        <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>

    <div>


</div>
</x-section>