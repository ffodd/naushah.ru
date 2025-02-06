@extends('layouts.main')

@section('seo')
    <meta name="description" content="Успешная покупка"/>
    <meta name="robots" content="noindex, nofollow" />
    <meta name="creator" content="Воронов Виталий Андреевич" />
@endsection

@push('style')
@endpush

@section('title', 'Поздравляем: Вы совершили покупку')

@section('header')
    @include('include.header')
@endsection

@section('content')
<section class="pt-24 bg-gradient-to-b from-white to-blue-100 lg:pb-20 xl:px-10">
    <div class="xl:max-w-5xl px-4 mx-auto">
        <div class="flex lg:flex-row flex-col-reverse items-center">
            <div class="w-full max-w-md mt-24 transform translate-y-10 lg:mt-0 px-4 mb-12 lg:mb-0 relative">
                <img class="mx-auto object-cover rounded-2xl lg:-ml-10 transform z-40 -translate-y-20" src="{{ URL::asset('/theme/webp/imgTicket.webp') }}" alt="билеты на мероприятие">
            </div>
            <div class="w-full px-4">
                <div class="relative lg:max-w-none max-w-md mx-auto -mt-10">
                    <svg class="w-6 h-6 xl:w-12 xl:h-12 mb-5 text-gray-800 fill-current" viewBox="0 0 504 372" xmlns="http://www.w3.org/2000/svg">
                        <g fill-rule="nonzero">
                            <path d="M143.92 141.2c0 34.16 70.559 39.199 70.559 123.2 0 61.602-44.238 107.52-105.84 107.52-65.52-.559-108.64-59.359-108.64-121.52C-.001 142.88 100.799.64 163.519.64c15.68 0 44.238 11.199 44.238 30.238.004 19.047-63.836 52.086-63.836 110.32l-.001.002ZM433.44 141.2c0 34.16 70.559 39.199 70.559 123.2 0 61.602-44.238 107.52-105.84 107.52-66.078 0-109.2-58.801-109.2-120.96 0-107.52 100.8-249.76 163.52-249.76 15.68 0 44.238 11.199 44.238 30.238 0 19.047-63.277 51.527-63.277 109.77v-.008Z" class=""></path>
                        </g>
                    </svg>
                    <h2 class="mb-4 text-2xl xl:text-4xl font-bold leading-tight">Поздравляем! Вы совершили покупку.</h2>
                    <p class="mb-9 text-base xl:text-lg text-gray-500 leading-loose">Все данные о мероприятии отправлены на почту.</p>
                    <a class="inline-flex items-center px-8 py-3 text-white transition bg-gray-900 rounded-full shadow-lg focus:outline-none focus:ring focus:ring-yellow-400 hover:bg-gray-800" href="{{ route('home.index') }}">
                        <span class="text-sm font-medium"> На главную </span>
                        <svg class="w-5 h-5 ml-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('footer')
    @include('include.footer')
@endsection

@push('scriptsFooter')
@endpush('scriptsFooter')
