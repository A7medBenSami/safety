@extends('layouts.front')

@section('content')


<!-- main page title -->
    <div class="bg-white px-6 py-24 sm:py-32 lg:px-8">
    <div class="mx-auto max-w-2xl text-center">
      <h2 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Services</h2>
      <p class="mt-6 text-lg leading-8 text-gray-600">Discover our comprehensive range of fire safety solutions designed to protect lives and assets. From state-of-the-art fire detection systems to cutting-edge suppression technologies, we offer tailored services to meet the unique needs of your business or property.</p>
    </div>
  </div>
<!-- main page title end -->


    <!-- services section L-R -->
    <div class="overflow-hidden bg-white py-24 sm:py-32">
      <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div
          class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2"
        >
          <div class="lg:pr-8 lg:pt-4">
            <div class="lg:max-w-lg">
              <h2 class="text-base font-semibold leading-7 text-red-600">Overview</h2>
              <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Protecting spaces</p>
              <p class="mt-6 text-lg leading-8 text-gray-600">
                Safety Hub Egypt, has an extensive experience in Fire Protection Systems installation and wide various
                applications across different facilities including commercial, industrial, and residential industries.
                Whatever you need, huge suppression systems installations or a residential fire sprinkler system
                installation, we have you safe and secured. Also we can design systems for even the most complicated
                industrial facilities to help protecting your facility.
              </p>
            </div>
          </div>
         <img
                src="{{ $services->image1 ? \Storage::url($services->image1) : '' }}"
                alt="Service Image 2"
                class="w-[48rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem]"
                width="2432"
                height="1442"
            />
        </div>
      </div>
    </div>
    <!-- services section end -->

    <!-- services section R-L-->
    <div class="overflow-hidden bg-white py-24 sm:py-32">
      <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div
          class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2"
        >
          <div class="lg:ml-auto lg:pl-4 lg:pt-4">
            <div class="lg:max-w-lg">
              <h2 class="text-base font-semibold leading-7 text-indigo-600">Fire fighting systems instllations</h2>
              <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Step by Step, With You</p>
              <p class="mt-6 text-lg leading-8 text-gray-600">
                Leveraging Safety Hub Egypt high industry expertise, we provide Fire Protection System Installation
                Services. Our team of experienced engineers, support personnel and employees, provide a widely admired
                system installation services. Also, our clients are always pleased to know that our full installation
                process is done step by step. Safety First Egypt is a turnkey fire protection solutions provider. We
                provide the installation of new fire protection systems including but not limited to fire alarms, fire
                detection, sprinkler and fire suppression systems. Providing you with peace of mind, Our engineers
                design fire protection and suppression systems that are specific to your facility, that will detect and
                respond to fire conditions to ensure the safety of your occupants and reduce the damage to your
                facility.
              </p>
            </div>
          </div>
          <div class="flex items-start justify-end lg:order-first">
            <img
                src="{{ $services->image2 ? \Storage::url($services->image2) : '' }}"
                alt="Service Image 2"
                class="w-[48rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem]"
                width="2432"
                height="1442"
            />
          </div>
        </div>
      </div>
    </div>
    <!-- services section end -->

    <!-- services section L-R -->
    <div class="overflow-hidden bg-white py-24 sm:py-32">
      <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div
          class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2"
        >
          <div class="lg:pr-8 lg:pt-4">
            <div class="lg:max-w-lg">
              <h2 class="text-base font-semibold leading-7 text-red-600">Overview</h2>
              <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Protecting spaces</p>
              <p class="mt-6 text-lg leading-8 text-gray-600">
                Safety Hub Egypt, has an extensive experience in Fire Protection Systems installation and wide various
                applications across different facilities including commercial, industrial, and residential industries.
                Whatever you need, huge suppression systems installations or a residential fire sprinkler system
                installation, we have you safe and secured. Also we can design systems for even the most complicated
                industrial facilities to help protecting your facility.
              </p>
            </div>
          </div>
          <img
                src="{{ $services->image3 ? \Storage::url($services->image3) : '' }}"
                alt="Service Image 2"
                class="w-[48rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem]"
                width="2432"
                height="1442"
            />
        </div>
      </div>
    </div>
    <!-- services section end -->

    <!-- services section R-L -->
    <div class="overflow-hidden bg-white py-24 sm:py-32">
      <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div
          class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2"
        >
          <div class="lg:ml-auto lg:pl-4 lg:pt-4">
            <div class="lg:max-w-lg">
              <h2 class="text-base font-semibold leading-7 text-indigo-600">Deploy faster</h2>
              <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">A better workflow</p>
              <p class="mt-6 text-lg leading-8 text-gray-600">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque,
                iste dolor cupiditate blanditiis ratione.
              </p>
            </div>
          </div>
          <div class="flex items-start justify-end lg:order-first">
            <img
                src="{{ $services->image4 ? \Storage::url($services->image4) : '' }}"
                alt="Service Image 2"
                class="w-[48rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem]"
                width="2432"
                height="1442"
            />
          </div>
        </div>
      </div>
    </div>
    <!-- services section end -->




@endsection
