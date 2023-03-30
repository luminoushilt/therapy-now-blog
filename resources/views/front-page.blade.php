{{--
  Template Name: Front Page Template
--}}

@extends('layouts.app')

@section('content')
  <!-- front-page.blade.php -->
  @php
    $featured_image = get_field('banner_image') ?? ['url' => 'https://dummyimage.com/1440x800/c71cc7/fff.jpg', 'alt' => 'Filler Image'];
    $cta_url = get_field('cta_link') ?? 'https://luminoushilt.com';
  @endphp

  <section class="max-w-7xl mx-auto min-h-screen mt-0 mb-10 flex flex-col justify-center items-center" style="background-image:url({{ esc_url($featured_image['url']) }});background-repeat: no-repeat;background-size: cover;">
    <h2 class="-mt-2 mb-10 font-serif text-2xl sm:text-5xl text-white shadow-2xl">{{ the_field('page_title') }}</h2>

    <a href="{{ $cta_url }}"
       class="bg-lime-500 hover:bg-lime-600 mt-56 py-7 px-12 inline-block border border-solid border-lime-600 rounded-md text-lg text-white"
    >{{ the_field('cta_label') }}</a>
  </section>
  <section class="max-w-7xl mx-auto mt-10 flex flex-col justify-center items-center">
    <div class="text-left text-base text-gray-600">
      {{ the_field('home_page_content') }}
    </div>
  </section>
@endsection
