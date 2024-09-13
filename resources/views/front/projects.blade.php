@extends('layouts.front')

@section('content')


  <!-- Navigation bar end -->

  <!-- Hero Section -->
  <section class="bg-white py-12 my-20">
    <div class="container mx-auto px-6 text-center">
      <h1 class="text-4xl md:text-5xl font-extrabold mb-6 text-gray-900">Browse Our Fire Safety Ventures</h1>
      <p class="text-lg md:text-xl text-gray-600">
        Step into our world of fire safety excellence, where each project represents our dedication to protecting
        lives and assets.
      </p>
    </div>
  </section>

  <!-- projects -->


  <!-- container -->
  <div class="bg-white sm:py-0">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">


      <!-- 3 cards section -->
      <div
        class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">

@foreach ($projects as $project )
        <article class="flex max-w-xl flex-col items-start justify-between">

          <div class="flex items-center flex-col gap-x-4 text-xs">
            <!-- <a href="#"
              class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Projects</a> -->
            <img style="height: 350px; width: 500px;" src="{{ $project->image ? \Storage::url($project->image) : '' }}" alt="">


          </div>

          <div class="group relative">

            <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
              <a href="#">
                <span class="absolute inset-0"></span>
                {{$project->name}}
              </a>
            </h3>
            <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">
              {{$project->description}}
            </p>

        </article>

@endforeach




      </div>



@endsection
