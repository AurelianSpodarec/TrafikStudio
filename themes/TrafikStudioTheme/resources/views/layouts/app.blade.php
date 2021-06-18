

<div id="offcanvas-content" class="offcanvas-content">

    <a class="sr-only focus:not-sr-only" href="#main">
        {{ __('Skip to content') }}
    </a>

    @include('partials.header')

        <main id="main">
            @yield('content')
        </main>
    
    @include('partials.footer')

</div>



<div id="off-canvas" class="offcanvas-menu js-offcanvas-menu">
<div class="offcanvas-menu__inner">

    <div>
        <h2>Trafik Studio</h2>
    </div>

    <button class="offcanvas-menu__button js-closeMenuButton">
        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="close-large">
            <line fill="none" stroke="#000" stroke-width="1.4" x1="1" y1="1" x2="19" y2="19"></line>
            <line fill="none" stroke="#000" stroke-width="1.4" x1="19" y1="1" x2="1" y2="19"></line>
        </svg>
    </button>


    <div>
        <nav id="mobile-nav" class="header__mobile-nav">
        @if (has_nav_menu('main_menu'))
            {!! wp_nav_menu([
            'theme_location' => 'main_menu', 
            'menu_class' => 'header__mobile-menu', 
            'echo' => false
            ]) !!}
        @endif
        </nav>
    </div>

</div>
</div>