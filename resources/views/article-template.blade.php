{{--
  Template Name: Article Template
--}}

@extends('layouts.app')

@section('content')
  <!-- article-template.blade.php -->
  @php
    $featured_image = get_field('banner_image') ?? ['url' => 'https://dummyimage.com/1230x600/c71cc7/fff.jpg', 'alt' => 'Filler Image'];
  @endphp

  <section class="max-w-7xl mx-auto px-2 flex flex-col justify-center items-center">
    <div class="w-full min-h-screen mt-0 mb-16 flex justify-center items-center" style="background-image:url({{ esc_url($featured_image['url']) }});background-repeat: no-repeat;background-size: cover;">
      <h2 class="font-serif text-2xl sm:text-5xl text-white shadow-2xl" >
        {{ the_field('page_title') }}
      </h2>
    </div>
    <div class="text-left text-base text-gray-600">
      {{ the_field('article_content') }}
    </div>
  </section>
@endsection
