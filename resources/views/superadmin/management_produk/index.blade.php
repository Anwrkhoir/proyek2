@extends('layouts.theme')
@section('content')
    <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div class="border rounded-lg divide-y divide-gray-200 dark:border-gray-700 dark:divide-gray-700">

                    <!-- Header -->
                    <div
                        class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-gray-700">

                        <div class="relative max-w-xs">
                            <label for="hs-table-with-pagination-search" class="sr-only">Search</label>
                            <input type="text" name="hs-table-with-pagination-search" id="hs-table-with-pagination-search"
                                class="p-3 pl-10 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                placeholder="Cari">
                            <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none pl-4">
                                <svg class="h-3.5 w-3.5 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                </svg>
                            </div>
                        </div>


                        <div>
                            <div class="inline-flex gap-x-2">
                                <a class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800"
                                    href="#">
                                    Tampilkan semua menu
                                </a>

                                <a class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800"
                                    href="{{ route('management_produk.create_menu') }}">
                                    <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 16 16" fill="none">
                                        <path d="M2.63452 7.50001L13.6345 7.5M8.13452 13V2" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" />
                                    </svg>
                                    Tambah Menu
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Header -->

                    {{-- content --}}
                    <div class="overflow-hidden">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-50 dark:bg-gray-700">
                                <tr>

                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                        Nama Produk</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                        Harga</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                        Kategori</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                        Detail</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                        Foto</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                {{-- menampilkan data dari database --}}
                                @foreach ($produk as $item)
                                    <tr>
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                            {{ $item->nama_produk }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            {{ $item->harga }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            {{ $item->kategori->name }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            {{ $item->detail }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            {{-- upload foto --}}
                                            @if ($item->foto)
                                                <img src="{{ asset('uploads/' . $item->foto) }}" width="50"
                                                    alt="">
                                            @endif
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium ">

                                            <div class="flex justify-end">
                                                <form method="post"
                                                    action="{{ route('management_produk.delete_menu', ['id' => $item->id]) }}">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit"
                                                        class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border-2 border-red-200 font-semibold text-red-500 hover:text-white hover:bg-red-500 hover:border-red-500 focus:outline-none focus:ring-2 focus:ring-red-200 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                                                        Delete
                                                    </button>
                                                </form>

                                                <a class="py-3 px-4 ml-2 inline-flex justify-center items-center gap-2 rounded-md border-2 border-blue-200 font-semibold text-blue-500 hover:text-white hover:bg-blue-500 hover:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-200 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800"
                                                    href="{{ route('management_produk.edit_menu', ['id' => $item->id]) }}">
                                                    Edit
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                    <div class="py-1 px-4">
                        <nav class="flex items-center space-x-2">
                            <a class="text-gray-400 hover:text-blue-600 p-4 inline-flex items-center gap-2 font-medium rounded-md"
                                href="#">
                                <span aria-hidden="true">«</span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="w-10 h-10 bg-blue-500 text-white p-4 inline-flex items-center text-sm font-medium rounded-full"
                                href="#" aria-current="page">1</a>
                            <a class="w-10 h-10 text-gray-400 hover:text-blue-600 p-4 inline-flex items-center text-sm font-medium rounded-full"
                                href="#">2</a>
                            <a class="w-10 h-10 text-gray-400 hover:text-blue-600 p-4 inline-flex items-center text-sm font-medium rounded-full"
                                href="#">3</a>
                            <a class="text-gray-400 hover:text-blue-600 p-4 inline-flex items-center gap-2 font-medium rounded-md"
                                href="#">
                                <span class="sr-only">Next</span>
                                <span aria-hidden="true">»</span>
                            </a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- <div class="flex flex-col">
                          <div class="-m-1.5 overflow-x-auto">
                            <div class="p-1.5 min-w-full inline-block align-middle">
                              <div class="border rounded-lg shadow overflow-hidden dark:border-gray-700 dark:shadow-gray-900">
                                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                  <thead class="bg-gray-50 dark:bg-gray-700">
                                    <tr>
                                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Nama Produk</th>
                                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Harga</th>
                                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Kategori</th>
                                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Detail</th>
                                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Foto</th>
                                      <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Action</th>
                                    </tr>
                                  </thead>
                                  <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                    <tr>
                                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Ikan Bakar</td>
                                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Rp. 15000</td>
                                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Makanan</td>
                                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">ikan,sayur,sambal</td>
                                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">FOTO</td>
                                      <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a class="text-blue-500 hover:text-blue-700" href="#">Upload</a>
                                      </td>
                                    </tr>


                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div> -->
@endsection
