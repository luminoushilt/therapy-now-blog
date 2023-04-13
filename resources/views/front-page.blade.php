{{--
  Template Name: Front Page Template
--}}

@extends('layouts.app')

@section('content')
  <!-- front-page.blade.php -->

  <section class="max-w-7xl mx-auto mt-10 flex flex-col justify-center items-center">
    <div class="px-4 text-left text-base text-gray-600">
      {{ the_field('home_page_content') }}
    </div>
  </section>
@endsection
