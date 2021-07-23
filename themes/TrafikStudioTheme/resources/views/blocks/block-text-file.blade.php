
<div class="mx-10 px-8 py-6">

    <div class="flex">

        <div class="w-1/2">
        
            <?php if ( $title = get_sub_field( 'title' ) ) : ?>
                <h2 class="text-5xl"><?php echo $title; ?></h2>
            <?php endif; ?>
            <?php if ( $description = get_sub_field( 'description' ) ) : ?>
                <p><?php echo $description; ?></p>
            <?php endif; ?>
        </div>
        <div class="w-1/2">
        {{-- box-shadow: 18px 16px 5px #f3f3f3; --}}
            <img class="rounded-lg" src="<?php echo esc_url( get_sub_field( 'image' ) ); ?>" alt="Image" />
        </div>

    </div>

</div>