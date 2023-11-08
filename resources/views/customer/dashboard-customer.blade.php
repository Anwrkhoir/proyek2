@extends('layouts.layout')
@section('content')
        
        <div class='min-h-screen bg-red-900 flex justify-center items-center'> 

<!-- courasel -->
        <div x-data="{ slide: 0 }">
    <div class="relative bg-white shadow-md rounded-lg p-4">
        <div class="flex">
            <button @click="slide = (slide - 1) % 3" class="text-gray-600 hover:text-gray-900">
            &#8249;
            </button>
            <div class="w-full p-4">
                <div x-show="slide === 0" class="transition-opacity duration-300" x-transition:enter="opacity-0" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="opacity-100" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                    <img src="{{asset('assets/logo/logo.png')}}" alt="Image 1" class="w-full rounded-lg shadow-md">
                </div>
                <div x-show="slide === 1" class="transition-opacity duration-300" x-transition:enter="opacity-0" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="opacity-100" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                    <img src="{{asset('assets/image/promo2.png')}}" alt="Image 2" class="w-full rounded-lg shadow-md">
                </div>
                <div x-show="slide === 2" class="transition-opacity duration-300" x-transition:enter="opacity-0" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="opacity-100" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                    <img src="{{asset('assets/image/promo1.png')}}" alt="Image 3" class="w-full rounded-lg shadow-md">
                </div>
            </div>
            <button @click="slide = (slide + 1) % 3" class="text-gray-600 hover:text-gray-900">
            &#8250;
            </button>
        </div>
    </div>
</div>

<!-- end courasel -->

        </div>

        <div class='min-h-screen bg-red-50 flex justify-center items-center'> 
            <div>
                <p class="text-2xl font-mono">MENU TERLARIS</p>
                <!-- Card Blog -->
<div class="max-w-[60rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <!-- Grid --> 
  <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
    <!-- Card 1-->
    
    <div class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-700 dark:shadow-slate-700/[.7]">
      <div class="h-52 flex flex-col justify-center items-center bg-blue-600 rounded-t-xl">
        <img class="w-full h-52 rounded-t-xl" width="20" height="10" src="{{asset('assets/image/ikan bakar.jpeg')}}" alt="image">
      </div>
      <div class="p-4 md:p-6">
        <span class="block mb-1 text-xs font-semibold uppercase text-blue-600 dark:text-blue-500">
          Ikan Bakar
        </span>
        <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-300 dark:hover:text-white">
          Rp 15000
        </h3>
        <p class="mt-3 text-gray-500">
          Ikan + Sayuran + Sambal
        </p>
      </div>
      <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200  dark:border-gray-700 dark:divide-gray-700">
        
        <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-2 rounded-bl-xl rounded-br-xl font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm sm:p-4 dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800" href="#">
          Order Now
        </a>
      </div>
    </div>
    <!-- End Card -->
    <!-- Card 2-->
    <div class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-700 dark:shadow-slate-700/[.7]">
      <div class="h-52 flex flex-col justify-center items-center bg-blue-600 rounded-t-xl">
        <img class="w-full h-52 rounded-t-xl" width="20" height="10" src="{{asset('assets/image/ikan bakar.jpeg')}}" alt="image">
      </div>
      <div class="p-4 md:p-6">
        <span class="block mb-1 text-xs font-semibold uppercase text-blue-600 dark:text-blue-500">
          Ikan Bakar
        </span>
        <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-300 dark:hover:text-white">
          Rp 15000
        </h3>
        <p class="mt-3 text-gray-500">
          Ikan + Sayuran + Sambal
        </p>
      </div>
      <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200  dark:border-gray-700 dark:divide-gray-700">
        
        <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-2 rounded-bl-xl rounded-br-xl font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm sm:p-4 dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800" href="#">
          Order Now
        </a>
      </div>
    </div>
    <!-- End Card -->
    <!-- Card 3-->
    <div class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-700 dark:shadow-slate-700/[.7]">
      <div class="h-52 flex flex-col justify-center items-center bg-blue-600 rounded-t-xl">
        <img class="w-full h-52 rounded-t-xl" width="20" height="10" src="{{asset('assets/image/ikan bakar.jpeg')}}" alt="image">
      </div>
      <div class="p-4 md:p-6">
        <span class="block mb-1 text-xs font-semibold uppercase text-blue-600 dark:text-blue-500">
          Ikan Bakar
        </span>
        <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-300 dark:hover:text-white">
          Rp 15000
        </h3>
        <p class="mt-3 text-gray-500">
          Ikan + Sayuran + Sambal
        </p>
      </div>
      <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200  dark:border-gray-700 dark:divide-gray-700">
        
        <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-2 rounded-bl-xl rounded-br-xl font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm sm:p-4 dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800" href="#">
          Order Now
        </a>
      </div>
    </div>
    <!-- End Card -->
    <!-- Card 4-->
    <div class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-700 dark:shadow-slate-700/[.7]">
      <div class="h-52 flex flex-col justify-center items-center bg-blue-600 rounded-t-xl">
        <img class="w-full h-52 rounded-t-xl" width="20" height="10" src="{{asset('assets/image/ikan bakar.jpeg')}}" alt="image">
      </div>
      <div class="p-4 md:p-6">
        <span class="block mb-1 text-xs font-semibold uppercase text-blue-600 dark:text-blue-500">
          Ikan Bakar
        </span>
        <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-300 dark:hover:text-white">
          Rp 15000
        </h3>
        <p class="mt-3 text-gray-500">
          Ikan + Sayuran + Sambal
        </p>
      </div>
      <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200  dark:border-gray-700 dark:divide-gray-700">
        
        <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-2 rounded-bl-xl rounded-br-xl font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm sm:p-4 dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800" href="#">
          Order Now
        </a>
      </div>
    </div>
    <!-- End Card -->
  </div>
  <!-- End Grid -->
</div>
<!-- End Card Blog -->
            </div>
            
        </div>
@endsection
        


