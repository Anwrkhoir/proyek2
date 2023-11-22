@extends('layouts.layout')
@section('content')
    <div class='min-h-screen bg-red-50 flex justify-center items-center'>
        <div>

            <!-- Card Blog -->
            <div class="max-w-[60rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                <!-- Grid -->

                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Card 1-->

                    <div
                        class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                        <div class="h-52 flex flex-col justify-center items-center bg-blue-600 rounded-t-xl">
                            <img class="w-full h-52 rounded-t-xl" width="20" height="10"
                                src="{{ asset('assets/image/ikan bakar.jpeg') }}" alt="image">
                        </div>
                        <div class="p-4 md:p-6">
                            <span class="block mb-1 text-xs font-semibold uppercase text-blue-600 dark:text-blue-500">
                                Ikan Bakar
                            </span>
                            <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-300 dark:hover:text-white">
                                Rp 1000
                            </h3>
                            <p class="mt-3 text-gray-500">
                                Dapet ayam doang
                            </p>
                        </div>
                        <div
                            class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200  dark:border-gray-700 dark:divide-gray-700">

                            <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-2 rounded-bl-xl rounded-br-xl font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm sm:p-4 dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800"
                                href="#">
                                -
                            </a>
                            <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-2 rounded-bl-xl rounded-br-xl font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm sm:p-4 dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800"
                                href="#">
                                2
                            </a>
                            <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-2 rounded-bl-xl rounded-br-xl font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm sm:p-4 dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800"
                                href="#">
                                +
                            </a>
                        </div>
                    </div>
                @endsection
