@extends('layouts.layout')
@section('content')
    <div class='min-h-screen bg-red-50 flex justify-center items-center'>
        <div>

            <!-- Card Blog -->
            <div class="max-w-[60rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                <!-- Grid -->

                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Card 1-->

                    @foreach ($keranjang as $produks)
                        <div
                            class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                            <div class="h-52 flex flex-col justify-center items-center bg-blue-600 rounded-t-xl">
                                {{ $produks->produk->foto }}
                                <img class="w-full h-52 rounded-t-xl" width="20" height="10"
                                    src="{{ asset('uploads/' . $produks->foto) }}" alt="image">

                            </div>
                            <div class="p-4 md:p-6">
                                <span class="block mb-1 text-xs font-semibold uppercase text-blue-600 dark:text-blue-500">
                                    {{ $produks->produk->nama_produk }}
                                </span>
                                <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-300 dark:hover:text-white">
                                    Rp {{ $produks->produk->harga }}
                                </h3>
                                <p class="mt-3 text-gray-500">
                                    {{ $produks->produk->detail }}
                                </p>
                            </div>
                            {{-- project number --}}
                            <div
                                class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200  dark:border-gray-700 dark:divide-gray-700">
                                <form method="post" action="{{ route('customer.destroyProduk', ['id' => $produks->id]) }}">
                                    @csrf
                                    @method('delete')
                                    <button
                                        class="w-full py-3 px-4 inline-flex justify-center items-center gap-2 rounded-bl-xl  font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm sm:p-4 dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                                        -
                                    </button>
                                </form>

                                <h3
                                    class="w-full py-3 px-4 inline-flex justify-center items-center gap-2  font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm sm:p-4 dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                                    {{ $produks->quantity }}
                                </h3>

                                <form method="post" action="{{ route('customer.addProduk', ['id' => $produks->id]) }}">
                                    @csrf
                                    <button
                                        class="w-full py-3 px-4 inline-flex justify-center items-center gap-2 rounded-br-xl  font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm sm:p-4 dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                                        +
                                    </button>
                                </form>
                            </div>
                            <div>
                                <a class="bg-red-500 w-full py-3 px-4 inline-flex justify-center items-center gap-2 rounded-br-xl rounded-bl-xl font-medium text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm sm:p-4 dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800"
                                    href={{ route('customer.confirmation') }}>
                                    Checkout
                                </a>
                            </div>

                        </div>
                    @endforeach


                </div>
            @endsection
