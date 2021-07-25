@extends('layouts.app')
@section('content')

{{-- page.blade.php --}}

<?php
    //$flexibleContentPath = "/var/www/html/wp-content/themes/kayTheme/resources/views/blocks/";
    $flexibleContentPath = "C:\\Users\\44775\\Desktop\\WebDevelopment\\Personal\\TrafikStudio\\wp-content\\themes\\TrafikStudioTheme\\resources\\views\\blocks\\"; 
    $count = 0;
?>


@if ( have_rows( 'flexible_content' ) ) 
@while ( have_rows( 'flexible_content' ) ) <?php the_row(); ?>


    <x-section container="{{ $page[$count]['container'] }}" paddingTop="{{ $page[$count]['paddingTop']}}" paddingBottom="{{ $page[$count]['paddingBottom']}}" bgColor="{{ $page[$count]['backgroundColor'] }}">
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


@endsection