<header class="header z-40 absolute top-0 left-0 right-0 mt-6">
<div class="px-10 py-8 flex items-center">


    <a class="text-white" href="{{ home_url('/') }}">
        <h1 class="sr-only text-black">{{ $siteName }}</h1>
        <h1 class="text-black font-2xl">Trafik Studio</h1>
    </a>


    <button class="js-toggle-menu d-none">
        <span>Menu</span>
    </button>

    <nav id="desktop-nav" class="header__desktop-nav">
    @if (has_nav_menu('main_menu'))
        {!! wp_nav_menu([
        'theme_location' => 'main_menu', 
        'menu_class' => 'header__desktop-menu', 
        'echo' => false
        ]) !!}
    @endif
    </nav>


</div>
</header>


<nav id="mobile-nav" class="header__mobile-nav">
@if (has_nav_menu('main_menu'))
    {!! wp_nav_menu([
    'theme_location' => 'main_menu', 
    'menu_class' => 'header__mobile-menu', 
    'echo' => false
    ]) !!}
@endif
</nav>