<button type="button" {{ $attributes->merge(['class' => "button w-full md:w-auto" . " " . $buttonVariant . " " . $buttonKind . " " . $buttonRadius . " " . $buttonSize  ]) }}>

     <?php if($iconLeft){ ?>
    <div class="flex vertical-middle items-center">
        {!! $iconLeft !!}
        {!! $message ?? $slot !!}
    </div>

    <?php } else {?>
        {!! $message ?? $slot !!}
    <?php } ?>


</button>