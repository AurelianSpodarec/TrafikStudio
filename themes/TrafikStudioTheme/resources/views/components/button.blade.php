<button type="button" {{ $attributes->merge(['class' => "button" . " " . $buttonVariant . " " . $buttonKind . " " . $buttonRadius . " " . $buttonSize  ]) }}>

     <?php if($iconLeft){ ?>
    <div class="flex vertical-middle items-center">
        {!! $iconLeft !!}
        {!! $message ?? $slot !!}
    </div>

    <?php } else {?>
        {!! $message ?? $slot !!}
    <?php } ?>


</button>