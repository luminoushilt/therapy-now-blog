<header class="banner bg-slate-800 border-b border-blue-900">
  <section class="max-w-7xl mx-auto py-4 flex justify-between items-center">
    <a class="brand flex items-center font-serif text-white text-2xl" href="{{ home_url('/') }}">
      <img src="@asset('images/therapy-now-logo.png')" alt="Therapy Now Logo" width="65">
      {!! $siteName !!}
    </a>

    @if (has_nav_menu('primary_navigation'))
      <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav flex justify-between items-center gap-4 text-white', 'echo' => false]) !!}
      </nav>
    @endif
  </section>
</header>
