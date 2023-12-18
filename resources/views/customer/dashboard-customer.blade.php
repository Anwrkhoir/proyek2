@extends('layouts.layout')
@section('content')
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <div class='min-h-screen bg-red-900 flex justify-center items-center'>

        <!-- courasel -->
        <div class="container justify-center flex ">
            <div class="responsive w-[700px] ">

                <img src="{{ asset('assets/logo/logo.png') }}" alt="Image 1" class="w-full rounded-xl shadow-md">
                <img src="{{ asset('assets/image/promo2.png') }}" alt="Image 2" class="w-full rounded-xl shadow-md">
                <img src="{{ asset('assets/image/promo1.png') }}" alt="Image 3" class="w-full rounded-xl shadow-md">

            </div>
        </div>

        <script>
            $('.responsive').slick({
                dots: true,
                infinite: true,
                autoplay: true,
                nav: true,
                speed: 500,
                slidesToShow: 1,
                slidesToScroll: 1,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });
        </script>
    </div>
    <!-- end courasel -->

    {{-- ------------------------------------------------------------------------------------- --}}

    <div class='bg-red-50 flex justify-center items-center'>
        <div>
            <p class="text-2xl font-bold">MINUMAN</p>
            <!-- Card Blog 2-->
            <div class="max-w-[60rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                <!-- Grid -->

                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Card -->
                    @foreach ($minuman as $produk)
                        <div
                            class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                            <div class="h-52 flex flex-col justify-center items-center bg-blue-600 rounded-t-xl">
                                @if ($produk->foto)
                                    <img class="w-full h-52 rounded-t-xl" width="20" height="10"
                                        src="{{ asset('uploads/' . $produk->foto) }}" alt="image">
                                @endif
                            </div>
                            <div class="p-4 md:p-6">
                                <span class="block mb-1 text-xs font-semibold uppercase text-blue-600 dark:text-blue-500">
                                    {{ $produk->nama_produk }}
                                </span>
                                <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-300 dark:hover:text-white">
                                    Rp {{ $produk->harga }}
                                </h3>
                                <p class="mt-3 text-gray-500">
                                    {{ $produk->detail }}
                                </p>
                            </div>
                            <div
                                class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200  dark:border-gray-700 dark:divide-gray-700">
                                <form method="POST" action="{{ route('customer.addToCart', ['id' => $produk->id]) }}">
                                    @csrf
                                    <button
                                        class="w-full py-3 px-4 inline-flex justify-center items-center gap-2 rounded-bl-xl rounded-br-xl font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm sm:p-4 dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800"
                                        {{-- href={{ route('customer.addToCart', ['id' => $produk->id]) }} --}}
                                        >
                                        Order Now
                                    </button>
                            </div>
                            </form>
                        </div>
                    @endforeach


                </div>
                <!-- End Grid -->
            </div>
            <!-- End Card Blog -->
        </div>
    </div>

    <div class=' bg-red-50 flex justify-center items-center'>
        <div>
            <p class="text-2xl font-bold">MAKANAN</p>
            <!-- Card Blog 1-->
            <div class="max-w-[60rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                <!-- Grid -->

                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Card -->
                    @foreach ($makanan as $produk)
                        <div
                            class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                            <div class="h-52 flex flex-col justify-center items-center bg-blue-600 rounded-t-xl">
                                @if ($produk->foto)
                                    <img class="w-full h-52 rounded-t-xl" width="20" height="10"
                                        src="{{ asset('uploads/' . $produk->foto) }}" alt="image">
                                @endif
                            </div>
                            <div class="p-4 md:p-6">
                                <span class="block mb-1 text-xs font-semibold uppercase text-blue-600 dark:text-blue-500">
                                    {{ $produk->nama_produk }}
                                </span>
                                <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-300 dark:hover:text-white">
                                    Rp {{ $produk->harga }}
                                </h3>
                                <p class="mt-3 text-gray-500">
                                    {{ $produk->detail }}
                                </p>
                            </div>
                            <div
                                class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200  dark:border-gray-700 dark:divide-gray-700">
                                <form method="POST" action="{{ route('customer.addToCart', ['id' => $produk->id]) }}">
                                    @csrf
                                    <button
                                        class="w-full py-3 px-4 inline-flex justify-center items-center gap-2 rounded-bl-xl rounded-br-xl font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm sm:p-4 dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800"
                                        {{-- href={{ route('customer.addToCart', ['id' => $produk->id]) }} --}}
                                        >
                                        Order Now
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach

                </div>
                <!-- End Grid -->
            </div>
            <!-- End Card Blog -->
        </div>
    </div>
@endsection
