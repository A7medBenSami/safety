@extends('layouts.front')

@section('content')


<!-- hero main -->
<div class="hero min-h-screen" style="background-image: url(./images/bg-hero-image.webp)">
  <!-- <div class="hero-overlay  bg-opacity-60"></div> -->
  <div class="hero-content text-neutral-content text-center">
    <div class="max-w-md">
      <h1 class="mb-8 text-6xl font-bold text-white">Consultancy And Fire Protections Systems</h1>
      <!-- <p class="mb-5">
                      Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In
                      deleniti eaque aut repudiandae et a id nisi.
                    </p> -->
      <button class="btn btn-primar bg-red-600 text-white border-0">Contact us</button>
    </div>
  </div>
</div>
<!-- hero main end -->

<!-- clients section -->
<div class="bg-white py-24 sm:py-32">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <h2 class="text-center text-lg font-semibold leading-8 text-gray-900">Cliens who trust us with thier safety</h2>
    <div
      class="mx-auto mt-10 grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5">
      <img class="col-span-2 max-h-14 w-full object-contain lg:col-span-1" src="images/clients-icons/logo.jpg"
        alt="Client 1" width="158" height="48" />
      <img class="col-span-2 max-h-14 w-full object-contain lg:col-span-1" src="images/clients-icons/logo1.jpg"
        alt="Client 2" width="158" height="48" />
      <img class="col-span-2 max-h-14 w-full object-contain lg:col-span-1" src="images/clients-icons/logo2.jpg"
        alt="Client 3" width="158" height="48" />
      <img class="col-span-2 max-h-14 w-full object-contain sm:col-start-2 lg:col-span-1"
        src="images/clients-icons/logo3.jpg" alt="Client 4" width="158" height="48" />
      <img class="col-span-2 col-start-2 max-h-14 w-full object-contain sm:col-start-auto lg:col-span-1"
        src="images/clients-icons/logo4.jpg" alt="Client 1" width="158" height="48" />
        <img class="col-span-2 col-start-2 max-h-14 w-full object-contain sm:col-start-auto lg:col-span-1"
          src="images/clients-icons/logo5.jpg" alt="Client 1" width="158" height="48" />
    </div>
  </div>
</div>
<!-- clients section end  -->

<!-- services section -->
<div class="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-32">
  <img src="images/bg.jpg" alt=""
    class="absolute inset-0 -z-10 h-full w-full object-cover object-right md:object-center" />
  <div class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl"
    aria-hidden="true">
    <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20" style="
                      clip-path: polygon(
                        74.1% 44.1%,
                        100% 61.6%,
                        97.5% 26.9%,
                        85.5% 0.1%,
                        80.7% 2%,
                        72.5% 32.5%,
                        60.2% 62.4%,
                        52.4% 68.1%,
                        47.5% 58.3%,
                        45.2% 34.5%,
                        27.5% 76.7%,
                        0.1% 64.9%,
                        17.9% 100%,
                        27.6% 76.8%,
                        76.1% 97.7%,
                        74.1% 44.1%
                      );
                    "></div>
  </div>
  <div
    class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu"
    aria-hidden="true">
    <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20" style="
                      clip-path: polygon(
                        74.1% 44.1%,
                        100% 61.6%,
                        97.5% 26.9%,
                        85.5% 0.1%,
                        80.7% 2%,
                        72.5% 32.5%,
                        60.2% 62.4%,
                        52.4% 68.1%,
                        47.5% 58.3%,
                        45.2% 34.5%,
                        27.5% 76.7%,
                        0.1% 64.9%,
                        17.9% 100%,
                        27.6% 76.8%,
                        76.1% 97.7%,
                        74.1% 44.1%
                      );
                    "></div>
  </div>
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl lg:mx-0">
      <h2 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">SYSTEMS</h2>
      <p class="mt-6 text-lg leading-8 text-gray-300">
        Safety First Egypt provide internal fire hydrants and sprinklers <br />
        as part of their fire protection.
      </p>
    </div>
    <div class="mx-auto mt-10 max-w-2xl lg:mx-0 lg:max-w-none">
      <dl class="mt-16 grid grid-cols-1 gap-8 sm:mt-20 sm:grid-cols-2 lg:grid-cols-4">
        <div class="flex flex-col-reverse">
          <dt class="text-base leading-7 text-gray-300">
            Our state of the art fire suppression systems are used to prevent fire spread in facility or building.
          </dt>
          <dd class="text-2xl font-bold leading-9 tracking-tight text-white">Fire Supression</dd>
        </div>
        <div class="flex flex-col-reverse">
          <dt class="text-base leading-7 text-gray-300">
            Safety hub Egypt provide internal fire hydrants and sprinklers as part of their fire protection.
          </dt>
          <dd class="text-2xl font-bold leading-9 tracking-tight text-white">Water Network Systems</dd>
        </div>
        <div class="flex flex-col-reverse">
          <dt class="text-base leading-7 text-gray-300">
            A fire sprinkler system is an active fire protection method, consisting of a water supply system that
            provides adequate pressure for fire sprinklers
          </dt>
          <dd class="text-2xl font-bold leading-9 tracking-tight text-white">Sprinklers</dd>
        </div>
        <div class="flex flex-col-reverse">
          <dt class="text-base leading-7 text-gray-300">
            A fire alarm system warns people when smoke, fire, carbon monoxide or other fire-related or general
            notification emergencies are detected.
          </dt>
          <dd class="text-2xl font-bold leading-9 tracking-tight text-white">Fire Alarm</dd>
        </div>
      </dl>
    </div>
  </div>
</div>
<!-- services section end -->

<!-- systems -->
<div class="relative isolate overflow-hidden bg-white px-6 py-24 sm:py-32 lg:overflow-visible lg:px-0">
  <div class="absolute inset-0 -z-10 overflow-hidden">
    <svg
      class="absolute left-[max(50%,25rem)] top-0 h-[64rem] w-[128rem] -translate-x-1/2 stroke-gray-200 [mask-image:radial-gradient(64rem_64rem_at_top,white,transparent)]"
      aria-hidden="true">
      <defs>
        <pattern id="e813992c-7d03-4cc4-a2bd-151760b470a0" width="200" height="200" x="50%" y="-1"
          patternUnits="userSpaceOnUse">
          <path d="M100 200V.5M.5 .5H200" fill="none" />
        </pattern>
      </defs>
      <svg x="50%" y="-1" class="overflow-visible fill-gray-50">
        <path d="M-100.5 0h201v201h-201Z M699.5 0h201v201h-201Z M499.5 400h201v201h-201Z M-300.5 600h201v201h-201Z"
          stroke-width="0" />
      </svg>
      <rect width="100%" height="100%" stroke-width="0" fill="url(#e813992c-7d03-4cc4-a2bd-151760b470a0)" />
    </svg>
  </div>
  <div
    class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-start lg:gap-y-10">
    <div
      class="lg:col-span-2 lg:col-start-1 lg:row-start-1 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
      <div class="lg:pr-4">
        <div class="lg:max-w-lg">
          <p class="text-base font-semibold leading-7 text-red-600">Safety Hub Egypt</p>
          <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Fire Protection Systems</h1>
          <p class="mt-6 text-xl leading-8 text-gray-700">
            Safety Hub Egypt provide internal fire hydrants and sprinklers as part of their fire protection.
          </p>
        </div>
      </div>
    </div>
    <div class="-ml-12 -mt-12 p-12 lg:sticky lg:top-4 lg:col-start-2 lg:row-span-2 lg:row-start-1 lg:overflow-hidden">
      <img class="w-[48rem] max-w-none rounded-xl bg-gray-900 shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem]"
        src="images/fire-extinguisher.jpg" alt="" />
    </div>
    <div
      class="lg:col-span-2 lg:col-start-1 lg:row-start-2 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
      <div class="lg:pr-4">
        <div class="max-w-xl text-base leading-7 text-gray-700 lg:max-w-lg">
          <p>
            Safety First Egypt specializes in providing comprehensive fire protection solutions, including internal
            fire hydrants and sprinkler systems. These systems are essential in preventing the spread of fire within
            a facility or building. Additionally, fire suppression systems are deployed to stop fires before they
            cause significant damage. Safety Hub Egypt also offers advanced water network systems, ensuring
            effective fire protection through internal fire hydrants and sprinklers.
          </p>
          <ul role="list" class="mt-8 space-y-8 text-gray-600">
            <li class="flex gap-x-3">
              <span><strong class="font-semibold text-gray-900">FIRE SUPRESSION </strong> Fire suppression systems are
                used to prevent fire spread in facility or building.
              </span>
            </li>
            <li class="flex gap-x-3">
              <span><strong class="font-semibold text-gray-900">WATER NETWORK SYSTEMS</strong> Anim aute id magna
                aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo.</span>
            </li>
            <li class="flex gap-x-3">
              <span><strong class="font-semibold text-gray-900">SPRINKLER</strong> A fire sprinkler system is an
                active
                fire protection method, consisting of a water supply system</span>
            </li>
            <li class="flex gap-x-3">
              <span><strong class="font-semibold text-gray-900">FIRE ALARM</strong> Ac tincidunt sapien A fire alarm
                system warns people when smoke, fire, carbon monoxide or other fire-related or general notification
                emergencies are detected.
              </span>
            </li>
          </ul>
          <h2 class="mt-16 text-2xl font-bold tracking-tight text-gray-900">Protecting Spaces</h2>
          <p class="mt-6">
            Safety Hub Egypt also offers advanced water network systems, ensuring effective fire protection through
            internal fire hydrants and sprinklers. An integral part of this protection is the fire sprinkler system,
            which actively controls fires using a dedicated water supply. Furthermore, fire alarm systems are
            crucial in alerting individuals to the presence of smoke, fire, or other emergencies, allowing for
            timely evacuation and safety measures.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- systems end -->



<!-- projects -->
<div class="bg-white py-24 sm:py-32">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl lg:mx-0">
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">From our projects</h2>
      <p class="mt-2 text-lg leading-8 text-gray-600">
        Safety First Egypt provide internal fire hydrants and sprinklers as part of their fire protection.
      </p>
    </div>
    <div
      class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">

      @foreach ($projects as $project )

      <article class="flex max-w-xl flex-col items-start justify-between">

        <div class="flex items-center flex-col gap-x-4 text-xs">
          <!-- <a href="#"
              class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Projects</a> -->
          <img style="height: 350px; width: 500px;" src="{{ $project->image ? \Storage::url($project->image) : '' }}"
            alt="">

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





      <a href="{{route('frontprojects')}}" class="hover:text-red-600">
        View More Projects
      </a>
    </div>
  </div>
</div>
<!-- projects end -->




<!-- contact us -->
<section class="contact-form">
  <div class="container">
    <h2>Contact Us</h2>

    <form method="POST" action="{{ route('contacts.store') }}">
      @csrf
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required />
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required />
      </div>
      <div class="form-group">
        <label for="message">Message</label>
        <textarea id="message" name="message" required></textarea>
      </div>
      <button type="submit">Send Message</button>
    </form>


  </div>
</section>
<!-- contact us end -->


@endsection
