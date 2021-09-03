<div class="hero">

    
    <div class="flex flex-wrap">
    <div class="w-full md:w-1/2"
       data-aos="fade-up"
       data-aos-offset="200"
       data-aos-delay="50"
    >
        <div class="px-8 md:px-0 md:pr-11">

            <?php if ( $heading = get_sub_field( 'heading' ) ) : ?>
            <h2 class="heading text-3xl md:text-6xl font-bold text-white mb-6 mt-10">
                <?php echo esc_html( $heading ); ?>
            </h2>
            <?php endif; ?>
            
            <?php if ( $lead_text = get_sub_field( 'lead_text' ) ) : ?>
                <p class="text-white mb-8" style="max-width: 479px;"><?php echo $lead_text; ?></p>
            <?php endif; ?>
            
            <x-button class="mb-8 w-full md:w-auto" size="md" variant="primary" kind="solid">Get free assesment</x-button>
        </div>
    </div>

    <div class="w-full px-8 md:px-0 mx-auto mx:mx-inherit md:w-1/2"
        data-aos="fade-up"
        data-aos-offset="200"
        data-aos-delay="500"
    >
        <img class="rounded-2xl" data-src="<?php echo esc_url( get_sub_field( 'image' ) ); ?>" />
    </div>
    </div>

    <div class="hero__skewedWrapper">
        <div class="hero__skewedWrapper-div"></div>
    </div>

</div>