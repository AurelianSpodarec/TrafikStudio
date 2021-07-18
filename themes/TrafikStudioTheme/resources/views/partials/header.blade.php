<header class="js-header header z-40 fixed top-0 left-0 right-0">
<div class="px-10 py-8 flex items-center">


    <a class="text-white" href="{{ home_url('/') }}">
        <h1 class="sr-only text-black">{{ $siteName }}</h1>
        {{-- <img src="https://i.imgur.com/ftqBgAu.png" style="max-width: 170px" /> --}}
        <img src="https://i.imgur.com/SWiIhNE.png" style="max-width: 210px" />
    </a>


    <button class="ml-auto js-toggle-menu block md:hidden js-openMenuButton">
       
            <i class="uk-navbar-toggle uk-navbar-toggle-icon uk-light">
                <span class="burger-icon js-burger-icon"></span>
            </i>
     
    </button>

    <nav id="desktop-nav" class="header__desktop-nav hidden md:block">
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


