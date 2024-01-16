@extends('layouts.layout')
@section('content')
    <!-- Card Section -->
    <div class="max-w-2xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Card -->
        <div class="bg-white rounded-xl shadow p-4 sm:p-7 dark:bg-slate-900">
            <div class="text-center mb-8">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800 dark:text-gray-200">
                    Konfirmasi Pesanan
                </h2>
                <p class="text-sm text-gray-600 dark:text-gray-400">
                    Silahkan isi data diri dan alamat anda
                </p>
            </div>

            <form>
                <!-- Section -->
                <div
                    class="py-6 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-gray-700 dark:first:border-transparent">
                    <label for="af-payment-billing-contact" class="inline-block text-sm font-bold dark:text-white">
                        Data diri
                    </label>

                    <div class="mt-2 space-y-3">
                        <input id="af-payment-billing-contact" type="text"
                            class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                            placeholder="Nama Depan">
                        <input type="text"
                            class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                            placeholder="Nama Belakang">
                        <input type="text"
                            class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                            placeholder="Nomor Telepon">
                    </div>
                </div>
                <!-- End Section -->

                <!-- Section -->
                <div
                    class="py-6 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-gray-700 dark:first:border-transparent">
                    <label for="af-payment-billing-address" class="inline-block text-sm font-bold dark:text-white">
                        Data Alamat
                    </label>

                    <div class="mt-2 space-y-3">
                        <input id="af-payment-billing-address" type="text"
                            class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                            placeholder="Alamat Lengkap">
                        <input type="text"
                            class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                            placeholder="Patokan (Optional)">
                        <div class="grid sm:flex gap-3">
                            <input type="text"
                                class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                                placeholder="">
                        </div>
                    </div>
                </div>
                <!-- End Section -->

                <!-- Section -->
                <div
                    class="py-6 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-gray-700 dark:first:border-transparent">
                    <label for="af-payment-payment-method" class="inline-block text-sm font-bold dark:text-white">
                        Metode Pembayaran
                    </label>

                    <div class="mt-2 space-y-3">
                        <select
                            class="py-2 px-3 pe-9 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                            <option selected disabled>Pilih</option>
                            <option>COD</option>
                            <option>Transfer</option>
                        </select>
                    </div>
                </div>

                <!-- Section -->
                <div
                    class="py-6 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-gray-700 dark:first:border-transparent">
                    <label for="af-payment-billing-contact" class="inline-block text-sm font-bold dark:text-white">
                        Pesanan Anda
                    </label>
                    {{-- @foreach ($konfirmasi as $konfirmasi) --}}
                        <div class="mt-2 space-y-3">
                            <input id="af-payment-billing-contact" type="text"
                                class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                                placeholder="">
                            <input type="text"
                                class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                                placeholder="">
                            <input type="text"
                                class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                                placeholder="">
                    {{-- @endforeach --}}
                </div>
        </div>
        <!-- End Section -->
    </div>
    <!-- End Section -->
    </form>

    <div class="mt-5 flex justify-end gap-x-2">
        <button type="button"
            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-red-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
            Batal
        </button>
        <button type="button"
            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-gray-200 bg-white text-black hover:bg-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
            Pesan Sekarang
        </button>
    </div>
    </div>
    <!-- End Card -->
    </div>
    <!-- End Card Section -->
@endsection
