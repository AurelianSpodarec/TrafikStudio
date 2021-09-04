<header class="js-header header px-6 lg:px-0 z-40 {{ is_home() || is_front_page() ? "absolute menu-home" : "static" }} top-0 left-0 right-0">
<div class="container mx-auto  py-6 lg:pt-2 lg:pb-10 flex items-center">


    <a class="text-white" href="{{ home_url('/') }}">
        <h1 class="sr-only text-black">{{ $siteName }}</h1>

        <div class="flex align-middle items-center">
            <svg style="stroke: #00ced8; margin-right: 10px;" width="80px"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 225 225" style="enable-background:new 0 0 225 225;" xml:space="preserve">
                <style type="text/css">
                    .st0{fill:none;stroke-width:20;stroke-linecap:round;stroke-miterlimit:3;}
                </style>
                <g transform="matrix( 1, 0, 0, 1, 0,0) ">
                    <g>
                        <path id="Layer0_0_1_STROKES" class="st0" d="M173.8,151.5l13.6-13.6 M35.4,89.9l29.1-29 M89.4,34.9v1 M137.4,187.9l-0.6-0.4     M36.6,138.7l0.2-0.2 M56.1,169.1l27.7-27.6 M63.8,111.5l74.3-74.4 M87.1,188.1L187.6,87.6 M110.8,114.5l57.8-57.8"/>
                    </g>
                </g>
            </svg>
            <h1 class="text-xl lg:text-4xl uppercase font-bold {{ is_home() || is_front_page() ? "text-white" : "text-black" }} ">Trafik Studio</h1>
        </div>
    </a>


    <button class="burger-button p-2 ml-auto js-toggle-menu block lg:hidden js-openMenuButton">
       
            <i class="uk-navbar-toggle uk-navbar-toggle-icon uk-light">
                <span class="burger-icon js-burger-icon"></span>
            </i>
     
    </button>

    <nav id="desktop-nav" class="header__desktop-nav hidden lg:block">
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


