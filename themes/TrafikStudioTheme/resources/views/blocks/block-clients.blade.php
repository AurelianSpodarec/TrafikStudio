<div class="grid gap-x-8 gap-y-12 grid-cols-2 px-8 md:px-0  md:flex flex-wrap justify-between">

<?php $count = 0; ?>
  <?php if ( have_rows( 'clients' ) ) : ?>
    <?php while ( have_rows( 'clients' ) ) :
      the_row(); ?>
      
      <img 
        data-aos="fade-up"
        data-aos-delay="{{ 50 + $count * 100 }}" 
        data-aos-duration="400"
        data-aos-easing="ease-in-out"
        data-aos-once="true"  
        
        class="mx-auto md:mx-0" style="max-height: 55px" data-src="<?php echo esc_url( get_sub_field( 'image' ) ); ?>" alt="Image" />
      
      <?php $count++; ?>
    <?php endwhile; ?>
  <?php endif; ?>

</div>
  

