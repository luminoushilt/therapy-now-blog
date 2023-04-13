{{--
  Template Name: Article Template
--}}

@extends('layouts.app')

@section('content')
  <!-- article-template.blade.php -->

  <section class="max-w-7xl mx-auto px-2 flex flex-col justify-center items-center">
    <div class="px-4 text-left text-base text-gray-600">
      {{ the_field('article_content') }}
    </div>
  </section>
@endsection
