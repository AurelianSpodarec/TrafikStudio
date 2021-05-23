<header class="header mt-6">
<div class="px-10 py-8 flex items-center">

    <a class="text-white" href="{{ home_url('/') }}">
        {{ $siteName }}
    </a>


  <button class="js-toggle-menu">
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