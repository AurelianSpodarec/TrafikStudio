<section {{ $attributes->merge(['class' => $bgColor . " " . $paddingTop . " " . $paddingBottom . " " . $class . " " . "relative"]) }}>

 
<div {{ $attributes->merge(['class' =>  $container . " mx-auto"]) }}>
  
    {!! $children ?? $slot !!}
    
</div>

</section>