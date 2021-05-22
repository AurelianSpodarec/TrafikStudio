<header>
<div class="px-10">

  <a href="{{ home_url('/') }}">
    {{ $siteName }}
  </a>


  <button>
    <span>Menu</span>
  </button>

  <nav>
    @if (has_nav_menu('main_menu'))
      {!! wp_nav_menu([
        'theme_location' => 'main_menu', 
        'menu_class' => 'main_menu', 
        'echo' => false
      ]) !!}
    @endif
  </nav>


</div>
</header>
