@php
  $featured_image = get_field('banner_image') ?? ['url' => @asset('images/construct.jpg'), 'alt' => 'Something went wrong.  This page must be under construction.'];
@endphp

<section class="w-full min-h-screen mt-0 mb-10 flex flex-col justify-center items-center" style="background-image:url({{ esc_url($featured_image['url']) }});background-repeat: no-repeat;background-size: cover;">
  <h2 class="-mt-2 mb-10 font-serif font-bold text-2xl sm:text-5xl text-white shadow-2xl">{{ the_field('page_title') }}</h2>
</section>
