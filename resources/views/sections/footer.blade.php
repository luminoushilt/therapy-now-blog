<footer class="content-info mt-16 mb-0">
  <section class="bg-gray-600 py-10 px-24 text-white">
    <div class="max-w-7xl mx-auto">
      <div class="flex flex-col items-center gap-5 sm:flex-row sm:justify-between text-white">
        @if (has_nav_menu('footer_navigation'))
          <nav class="nav-footer" aria-label="{{ wp_get_nav_menu_name('footer_navigation') }}">
            {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav flex flex-col sm:flex-row sm:justify-between items-center gap-5 text-white', 'echo' => false]) !!}
          </nav>
        @endif
        <div class="flex justify-center items-center gap-5 text-white">
          @php(dynamic_sidebar('sidebar-footer'))
          <a href="https://facebook.com" target="_blank"><i class="fa-brands fa-square-facebook fa-xl"></i></a>
          <a href="https://twitter.com" target="_blank"><i class="fa-brands fa-twitter fa-xl"></i></a>
          <a href="https://luminoushilt.com" target="_blank"><i class="fa-solid fa-umbrella fa-xl"></i></a>
        </div>
      </div>
    </div>
  </section>
  <div class="max-w-7xl mx-auto flex items-center mt-6 mb-24">
      <p class="text-gray-600 text-base">Copyright &copy; {{ Date('Y') }} Therapy Now.&nbsp;&nbsp;All rights reserved.</p>
  </div>
</footer>
