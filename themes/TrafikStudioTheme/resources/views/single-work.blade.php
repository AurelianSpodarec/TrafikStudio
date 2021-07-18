@extends('layouts.app')
@section('content')



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <x-section class="mt-32" container="default">

        <div>
            <span class="flex">Tribe Dance - <span class="flex text-orange underline" style="color: #c58901;">Visit Online</span></span>
            <h1 class="text-7xl font-bold"><?php the_title(); ?></h1>
            <p class="text-white"><?php echo get_the_date(); ?></p> 
            <div class="flex" style="background-color: #cc0000e6;">
                {{-- <svg class="w-6" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="globe" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" class="svg-inline--fa fa-globe fa-w-16 fa-2x"><path fill="currentColor" d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm193.2 152h-82.5c-9-44.4-24.1-82.2-43.2-109.1 55 18.2 100.2 57.9 125.7 109.1zM336 256c0 22.9-1.6 44.2-4.3 64H164.3c-2.7-19.8-4.3-41.1-4.3-64s1.6-44.2 4.3-64h167.4c2.7 19.8 4.3 41.1 4.3 64zM248 40c26.9 0 61.4 44.1 78.1 120H169.9C186.6 84.1 221.1 40 248 40zm-67.5 10.9c-19 26.8-34.2 64.6-43.2 109.1H54.8c25.5-51.2 70.7-90.9 125.7-109.1zM32 256c0-22.3 3.4-43.8 9.7-64h90.5c-2.6 20.5-4.2 41.8-4.2 64s1.5 43.5 4.2 64H41.7c-6.3-20.2-9.7-41.7-9.7-64zm22.8 96h82.5c9 44.4 24.1 82.2 43.2 109.1-55-18.2-100.2-57.9-125.7-109.1zM248 472c-26.9 0-61.4-44.1-78.1-120h156.2c-16.7 75.9-51.2 120-78.1 120zm67.5-10.9c19-26.8 34.2-64.6 43.2-109.1h82.5c-25.5 51.2-70.7 90.9-125.7 109.1zM363.8 320c2.6-20.5 4.2-41.8 4.2-64s-1.5-43.5-4.2-64h90.5c6.3 20.2 9.7 41.7 9.7 64s-3.4 43.8-9.7 64h-90.5z" class=""></path></svg> --}}
                {{-- <div class="w-6" >
                <ytd-thumbnail-overlay-time-status-renderer class="text-white style-scope ytd-thumbnail" overlay-style="LIVE" has-icon=""><!--css-build:shady--><yt-icon class="style-scope ytd-thumbnail-overlay-time-status-renderer"><svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="style-scope yt-icon" style="pointer-events: none; display: block; width: 100%; height: 100%;"><g class="style-scope yt-icon"><path d="M16.94 6.91l-1.41 1.45c.9.94 1.46 2.22 1.46 3.64s-.56 2.71-1.46 3.64l1.41 1.45c1.27-1.31 2.05-3.11 2.05-5.09s-.78-3.79-2.05-5.09zM19.77 4l-1.41 1.45C19.98 7.13 21 9.44 21 12.01c0 2.57-1.01 4.88-2.64 6.54l1.4 1.45c2.01-2.04 3.24-4.87 3.24-7.99 0-3.13-1.23-5.96-3.23-8.01zM7.06 6.91c-1.27 1.3-2.05 3.1-2.05 5.09s.78 3.79 2.05 5.09l1.41-1.45c-.9-.94-1.46-2.22-1.46-3.64s.56-2.71 1.46-3.64L7.06 6.91zM5.64 5.45L4.24 4C2.23 6.04 1 8.87 1 11.99c0 3.13 1.23 5.96 3.23 8.01l1.41-1.45C4.02 16.87 3 14.56 3 11.99s1.01-4.88 2.64-6.54z" class="style-scope yt-icon"></path><circle cx="12" cy="12" r="3" class="style-scope yt-icon"></circle></g></svg><!--css-build:shady--></yt-icon><span id="text" class="style-scope ytd-thumbnail-overlay-time-status-renderer" aria-label="LIVE">

                </span></ytd-thumbnail-overlay-time-status-renderer>
                            
                </div>
                <span class="text-white">  LIVE Site</span> --}}
            </div>
        </div>

    </x-section>
{{-- 

    <x-section class="my-32">
        <img src="https://i.imgur.com/GNDETGW.jpg" alt="Image" />
    </x-section>

    <x-section class="my-32" container="default">
     
    <h2 class="text-3xl mb-3">Getting the right balance</h2>
    <p>
Herbalife are a global leader in meal replacements, food supplements and sports nutrition products. They reach their customers through a worldwide network of distributors, providing personalised support to customers who want to achieve long-lasting health and wellness goals. Their network of independent distributors and customers creates a unique, ever-growing community to support anyone on their journey to better nutrition.

Multilevel Marketing corporations, like Herbalife, pride themselves on offering a memorable vacation at a luxury resort to celebrate member success. Exclusively awarded to qualifying members, these vacation offerings have become the stand out event of the year.

Top-selling qualifying employees secure their dream vacation through a comprehensive booking site, which had become outdated. We worked with Herbalife to overhaul and improve their 2020 vacations site to offer a more safe and secure site dealing with large amounts of customer data, whilst also offering a great user experience from beginning to end.
</p>
     <div class="flex">
        <svg class="w-6" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="globe" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" class="svg-inline--fa fa-globe fa-w-16 fa-2x"><path fill="currentColor" d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm193.2 152h-82.5c-9-44.4-24.1-82.2-43.2-109.1 55 18.2 100.2 57.9 125.7 109.1zM336 256c0 22.9-1.6 44.2-4.3 64H164.3c-2.7-19.8-4.3-41.1-4.3-64s1.6-44.2 4.3-64h167.4c2.7 19.8 4.3 41.1 4.3 64zM248 40c26.9 0 61.4 44.1 78.1 120H169.9C186.6 84.1 221.1 40 248 40zm-67.5 10.9c-19 26.8-34.2 64.6-43.2 109.1H54.8c25.5-51.2 70.7-90.9 125.7-109.1zM32 256c0-22.3 3.4-43.8 9.7-64h90.5c-2.6 20.5-4.2 41.8-4.2 64s1.5 43.5 4.2 64H41.7c-6.3-20.2-9.7-41.7-9.7-64zm22.8 96h82.5c9 44.4 24.1 82.2 43.2 109.1-55-18.2-100.2-57.9-125.7-109.1zM248 472c-26.9 0-61.4-44.1-78.1-120h156.2c-16.7 75.9-51.2 120-78.1 120zm67.5-10.9c19-26.8 34.2-64.6 43.2-109.1h82.5c-25.5 51.2-70.7 90.9-125.7 109.1zM363.8 320c2.6-20.5 4.2-41.8 4.2-64s-1.5-43.5-4.2-64h90.5c6.3 20.2 9.7 41.7 9.7 64s-3.4 43.8-9.7 64h-90.5z" class=""></path></svg>
        <span>Visit the site</span>
    </div>
    </x-section> --}}

   

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



<?php endwhile; ?>
<?php endif; ?>

 

@endsection