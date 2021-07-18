<section {{ $attributes->merge(['class' => $bgColor . " " . $class . " " . "relative"]) }}>

 
<div {{ $attributes->merge(['class' =>  $container . " mx-auto"]) }}>
  
    {!! $children ?? $slot !!}
    
</div>

</section>