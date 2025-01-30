@extends('layouts.main')

@section('seo')
    <link rel="canonical" href="https://naushah.ru/hotels"/>
    <meta name="description"
        content="Отдых в Санкт-Петербурге: выберите идеальное место для проживания. Отели, хостелы и апартаменты ждут вас в сердце города, рядом с основными достопримечательностями. Узнайте, какие места предлагают лучшие условия для вашего незабываемого путешествия."/>
    <meta name="robots" content="index, follow" />
    <meta name="document-state" content="dynamic" />
    <meta name="creator" content="Воронов Виталий Андреевич" />
@endsection

@push('style')
@endpush

@section('title', 'Санкт-Петербург: где остановиться для полноценного отдыха')

@section('header')
    @include('include.header')
@endsection

@section('content')
<section class="lg:mx-auto lg:container">
    <div class="xl:w-3/4 gap-16 items-center py-8 px-4 mx-auto lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
        <div class="">
            <div class="text-gray-500 sm:text-lg">
                <h2 class="mb-4 font-serif text-2xl sm:text-3xl font-thin text-gray-900">{{$hotel->name}}</h2>
                <div class="text-justify mb-4 text-sm font-normal text-gray-800">
                    <p>{{$hotel->description}}</p>
                </div>
            </div>
            <div class="text-xs sm:text-sm md:text-base mt-3">
            <p class="flex items-center">
                <span class="inline-flex items-center justify-center flex-shrink-0 w-4 h-4 mr-2 text-white bg-gray-800 rounded-full">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                    <path d="M20 6L9 17l-5-5"></path>
                </svg>
                </span>
                <span class="text-gray-900 font-serif">Телефон:</span>
                <span class="font-normal text-gray-800 ml-1">{{$hotel->tel_1}}</span>
            </p>
            <p class="flex items-center mt-0.5 sm:mt-0">
                <span class="inline-flex items-center justify-center flex-shrink-0 w-4 h-4 mr-2 text-white bg-gray-800 rounded-full">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                    <path d="M20 6L9 17l-5-5"></path>
                </svg>
                </span>
                <span class="text-gray-900 font-serif">Адрес:</span>
                <span class="font-normal text-gray-800 ml-1">{{$hotel->address}}</span>
            </p>
            <p class="flex items-center mt-0.5 sm:mt-0">
                <span class="inline-flex items-center justify-center flex-shrink-0 w-4 h-4 mr-2 text-white bg-gray-800 rounded-full">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                    <path d="M20 6L9 17l-5-5"></path>
                </svg>
                </span>
                <span class="text-gray-900 font-serif">Сайт:</span>
                <a href="{{$hotel->external_url}}" rel="nofollow" class="font-normal text-gray-800 ml-1">{{$hotel->external_url}}</a>
            </p>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-4 mt-8">
            <img class="w-full rounded-lg" src="{{ URL::asset($hotel->img_1) }}" alt="office content 1">
            <img class="mt-4 w-full lg:mt-10 rounded-lg" src="{{ URL::asset($hotel->img_2) }}" alt="office content 2">
        </div>
    </div>
</section>







@endsection

@section('footer')
    @include('include.footer')
@endsection

@push('scriptsFooter')
@endpush('scriptsFooter')
