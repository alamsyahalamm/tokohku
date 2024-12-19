@extends('selamatdatang')

@section('main')
    {{--  Carousel  --}}
    


    <div id="controls-carousel" class="relative w-full" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
         <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('image/4.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
            <img src="{{ asset('image/5.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('image/6.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>

 

    {{--  Content 1  --}}
    <section class="bg-white px-4 py-8 antialiased dark:bg-gray-900 md:py-13">
        <div
            class="mx-auto grid max-w-screen-xl rounded-lg bg-gray-50 p-4 dark:bg-gray-800 md:p-8 lg:grid-cols-12 lg:gap-8 lg:p-16 xl:gap-16">
            <div class="lg:col-span-5 lg:mt-0">
                <a href="#">
                    <img class="mb-4 h-36 w-36 sm:h-96 sm:w-96 md:h-full md:w-full" src="{{ asset('image/1.jpg') }}"
                        alt="Ayam Bakar" />
                </a>
            </div>
            <div class="me-auto place-self-center lg:col-span-7">
                <h1 class="mb-3 text-2xl font-bold leading-tight tracking-tight text-gray-900 dark:text-white md:text-4xl">
                Temukan Keindahan Batik,<br />Asli Indonesia!
                </h1>
                <p class="mb-6 text-gray-500 dark:text-gray-400">
                Apakah Anda ingin tampil elegan dengan sentuhan budaya? Batik kami hadir dengan desain klasik yang dipadukan dengan tren modern, membuat setiap momen Anda semakin istimewa.
                </p>
                <a href="#"
                    class="inline-flex items-center justify-center rounded-lg bg-blue-700 px-5 py-3 text-center text-base font-medium text-white hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    Pesan Sekarang
                </a>
            </div>
        </div>
    </section>

    {{--  Menu  --}}
    <section class="bg-gray-50 py-8 antialiased dark:bg-gray-900 md:py-12">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
            <div class="mb-4 grid gap-4 sm:grid-cols-2 md:mb-8 lg:grid-cols-3 xl:grid-cols-4">
                @foreach ($products as $item)
                    <div
                        class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                        <div class="w-full">
                            <a href="#">
                                <img class="mx-auto w-full rounded-md" src="{{ asset('storage/' . $item->image1_url) }}"
                                    alt="" />
                            </a>
                        </div>
                        <div class="pt-6">
                            <div class="mb-4 flex items-center justify-between gap-4">
                                @if ($item->discounts)
                                    <span
                                        class="me-2 rounded bg-blue-100 px-2.5 py-0.5 text-xs font-medium text-blue-800 dark:bg-blue-900 dark:text-blue-300">
                                        Diskon {{ $item->discounts->percentage }}%
                                    </span>
                                @endif
                                <div class="flex items-center justify-end gap-1">
                                    <button type="button" data-tooltip-target="tooltip-quick-look"
                                        class="rounded-lg p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                        <span class="sr-only"> Quick look </span>
                                    </button>
                                    <div id="tooltip-quick-look" role="tooltip"
                                        class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                        data-popper-placement="top">
                                        Quick look
                                        <div class="tooltip-arrow" data-popper-arrow=""></div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('single', ['id' => $item->id]) }}"
                                class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">
                                {{ $item->product_name }}
                            </a>
                            <ul class="mt-5 flex items-center gap-4">
                                <li class="flex items-center gap-2"> 
                                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Pengiriman Cepat
                                    </p>
                                </li>
                                <li class="flex items-center gap-2">

                                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Termurah</p>
                                </li>
                            </ul>
                            <div class="mt-4 flex items-center justify-between gap-4">
                                @if ($item->discounts && $item->discounts->first())
                                    @php
                                        // Ambil nilai persentase diskon
                                        $discountPercentage = $item->discounts->first()->percentage;
                                        $discountedPrice = ($item->price * $discountPercentage) / 100;
                                    @endphp
                                    <div>
                                        <p class="text-sm/[5px] text-gray-500 mb-2 line-through dark:text-gray-400">
                                            Rp. {{ number_format($item->price, 0) }}
                                        </p>
                                        <p class="text-xl font-extrabold leading-tight text-gray-900 dark:text-white">
                                            Rp. {{ number_format($discountedPrice, 0) }}
                                        </p>
                                    </div>
                                @else
                                    <p class="text-xl font-extrabold leading-tight text-gray-900 dark:text-white">
                                        Rp. {{ number_format($item->price, 0) }}
                                    </p>
                                @endif
                                <button type="button"
                                    class="inline-flex items-center rounded-lg bg-blue-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4  focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <svg class="-ms-2 -me-2 h-5 w-5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                        viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="w-full text-center">
                <a href="{{ route('menu') }}" type="button"
                    class="rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700">
                    Lainnya
                </a>
            </div>
        </div>
    </section>
@endsection
