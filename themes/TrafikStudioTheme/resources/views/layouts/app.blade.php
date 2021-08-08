

<div id="offcanvas-content" class="offcanvas-content">

    <a class="sr-only focus:not-sr-only" href="#main">
        {{ __('Skip to content') }}
    </a>

    @include('partials.header')

        {{-- <main id="main" class="{{ is_home() || is_front_page() ? "" : "mt-32" }}"> --}}
        <main id="main">
            @yield('content')
        </main>
    
    @include('partials.footer')

</div>



<div id="off-canvas" class="offcanvas-menu js-offcanvas-menu">
<div class="offcanvas-menu__inner">

    <div>
        {{-- <h2>Trafik Studio</h2> --}}
        {{-- <img src="https://i.imgur.com/ftqBgAu.png" style="max-width: 120px" /> --}}
    </div>

    <div>
    <button class="offcanvas-menu__close-button js-closeMenuButton">
        <svg width="30" height="30" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="close-large">
            <line fill="none" stroke="#fff" stroke-width="1.4" x1="1" y1="1" x2="19" y2="19"></line>
            <line fill="none" stroke="#fff" stroke-width="1.4" x1="19" y1="1" x2="1" y2="19"></line>
        </svg>
    </button>
    {{-- Close --}}
    </div>


    <div>
        <nav id="mobile-nav" class="offcanvas-menu__nav">
        @if (has_nav_menu('main_menu'))
            {!! wp_nav_menu([
            'theme_location' => 'main_menu', 
            'menu_class' => 'offcanvas-menu__menu', 
            'echo' => false
            ]) !!}
        @endif
        </nav>
    </div>

</div>
</div>