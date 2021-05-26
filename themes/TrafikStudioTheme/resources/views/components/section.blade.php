<section {{ $attributes->merge(['class' =>  $bgColor . " " . $gutter . " " . "relative my-20"]) }}>
<div {{ $attributes->merge(['class' =>  $container . " mx-auto"]) }}>

    {!! $children ?? $slot !!}
    
</div>
</section>