@extends('layouts.app')
@section('content')

<?php
    $count = 0;
?>


@if ( have_rows( 'flexible_content' ) ) 
@while ( have_rows( 'flexible_content' ) ) <?php the_row(); ?>


    <x-section container="{{ $page[$count]['container'] }}" paddingTop="{{ $page[$count]['paddingTop']}}" paddingBottom="{{ $page[$count]['paddingBottom']}}" bgColor="{{ $page[$count]['backgroundColor'] }}">
    @if ( have_rows( 'row' ) )
    @while ( have_rows( 'row' ) ) <?php the_row(); ?>
 

        @if ( have_rows( 'column' ) )
        @while ( have_rows( 'column' ) ) <?php the_row(); ?>
        
            <?php $layoutConverted = str_replace( '_', '-', get_row_layout()); ?>
            
            @include('blocks.' . $layoutConverted)
        
        @endwhile
        @endif
        
    
    @endwhile
    @endif
    </x-section>


<?php $count++ ?>

@endwhile
@endif


@endsection