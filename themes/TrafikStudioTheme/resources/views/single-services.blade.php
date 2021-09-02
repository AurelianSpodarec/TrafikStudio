@extends('layouts.app')
@section('content')


{{--    
    {{-- $flexibleContentPath = dirname(__FILE__) . '\\blocks\\'; --}}
{{-- $flexibleContentPath = " /var/www/html" --}}
<?php
    $flexibleContentPath = "/var/www/html/wp-content/themes/TrafikStudioTheme/resources/views/blocks/";
    //$flexibleContentPath = "C:\\Users\\44775\\Desktop\\Web Development\\Personal\\TrafikStudio\\wp-content\\themes\\TrafikStudioTheme\\resources\\views\\blocks\\";
    
?>


@if ( have_rows( 'flexible_content' ) ) 
@while ( have_rows( 'flexible_content' ) ) <?php the_row(); ?>


    @if ( have_rows( 'row' ) )
    @while ( have_rows( 'row' ) ) <?php the_row(); ?>
    {{-- <x-section bgColor="{{ $page[$count]['backgroundColor'] }}" gutter="{{ $page[$count]['gutter']}}" container="{{ $page[$count]['container'] }}">

--}}
        @if ( have_rows( 'column' ) )
        @while ( have_rows( 'column' ) ) <?php the_row(); ?>
        {{--  <div class="{{ $page[$count]['columnWidth'] }}"> --}}
         <div>

           <?php 
                $layout = get_row_layout();
                $layoutConverted = str_replace( '_', '-', $layout);
            ?>

            <?php $layoutConverted = str_replace( '_', '-', get_row_layout()); ?>
            
            @include('blocks.' . $layoutConverted)

        </div>
        @endwhile
        @endif
        
    
    {{--  </x-section> --}}
    @endwhile
    @endif


@endwhile
@endif


@endsection