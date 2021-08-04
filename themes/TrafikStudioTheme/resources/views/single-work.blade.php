@extends('layouts.app')
@section('content')



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            
           
    <x-section container="default">
 

                <?php 
                
                $b = get_the_ID();

                
                
                ?>

                <?php
               // $a = wp_get_post_terms( '64'); //get_the_term('client_category'); 
//$terms = get_the_terms( $post->ID , 'taxonomyname' );

                $a = get_the_terms($b, 'client_category');

            
            ?>
        <div class="pt-40 pb-16">
            <span class="flex">{{ $a[0]->name }}
                <?php 
                    if ( get_field( 'website_url' ) ) : ?> 
                    - <a target="_blank" href="<?php echo esc_url( get_field( 'website_url' ) ); ?>" class="flex text-orange underline" style="color: #c58901;">Visit Online</a>
                <?php endif; ?>
            </span>
            <h1 class="text-7xl font-bold"><?php the_title(); ?></h1>
            <p class="text-white"><?php echo get_the_date(); ?></p> 
            <div class="flex" style="background-color: #cc0000e6;"></div>
        </div>
	 

    </x-section>
 

 <?php
    //$flexibleContentPath = "/var/www/html/wp-content/themes/kayTheme/resources/views/blocks/";
    $flexibleContentPath = "C:\\Users\\44775\\Desktop\\WebDevelopment\\Personal\\TrafikStudio\\wp-content\\themes\\TrafikStudioTheme\\resources\\views\\blocks\\"; 
    $count = 0;
?>


@if ( have_rows( 'flexible_content' ) ) 
@while ( have_rows( 'flexible_content' ) ) <?php the_row(); ?>


    <x-section class="article" container="{{ $page[$count]['container'] }}" bgColor="{{ $page[$count]['backgroundColor'] }}">
    @if ( have_rows( 'row' ) )
    @while ( have_rows( 'row' ) ) <?php the_row(); ?>
 

        @if ( have_rows( 'column' ) )
        @while ( have_rows( 'column' ) ) <?php the_row(); ?>
        
            <?php 
                $layout = get_row_layout();
                $layoutConverted = str_replace( '_', '-', $layout);
                $file = ( $flexibleContentPath . str_replace( '_', '-', $layout) . '.blade.php' );
            ?>

            @if( file_exists( $file ))
                @include('blocks.' . $layoutConverted)
            @else
                <?php echo "File $file with the name of $layoutConverted doesn't exists" ?>    
            @endif 
 
        
        @endwhile
        @endif
        
    
    @endwhile
    @endif
    </x-section>


<?php $count++ ?>

@endwhile
@endif



<div>



</div>



<?php endwhile; ?>
<?php endif; ?>

 

@endsection