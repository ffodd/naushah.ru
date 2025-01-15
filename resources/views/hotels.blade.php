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
    <div class="flex flex-wrap mt-10 overflow-hidden">
        <div class="w-full overflow-hidden">
            <div class="ml-2 mr-2 md:mr-4">
                <div class="pb-12">
                    <p class="relative block mt-5 mb-1 text-xs font-medium tracking-wide text-green-500 uppercase">Где жить?</p>
                    <h2 class="mb-1 font-serif text-3xl font-thin text-gray-900"><a href="#_">Отдых в <span class="text-nowrap">Санкт-Петербурге</span></a></h2>
                    <span class="block mb-5 text-xs font-normal text-gray-800">
                        <span class="ml-1 text-gray-500">Найдите идеальное место для комфортного пребывания в сердце культурной столицы России</span>
                    </span>
                    <p class="text-gray-800">
                        <span>Узнайте, где остановиться, чтобы насладиться историческими достопримечательностями и культурной атмосферой города.</span>
                    </p>
                </div>
                <div class="grid grid-cols-12 gap-8">
                    @foreach ($hotels as $hotel)
                    <div class="col-span-12 md:col-span-6 lg:col-span-4 2xl:col-span-3">
                        <a href="{{ url('/hotels/').'/'.$hotel->id}}" class="block h-48 mb-3 overflow-hidden rounded-lg">
                            <img class="object-cover object-center w-full h-full transition duration-300 ease-out transform scale-100 hover:scale-105" src="{{ URL::asset($hotel->preview_img) }}" alt="">
                        </a>
                        <h2 class="mb-2 font-serif text-lg text-gray-900"><a href="#_">{{$hotel->name}}</a></h2>
                        <p class="mb-3 text-sm text-gray-800">{{$hotel->short_desc}}
                            <a href="{{ url('/hotels/').'/'.$hotel->id}}" class="inline-flex items-center ml-1 text-xs text-gray-500 underline">
                                <span>Подробнее</span>
                                <svg class="w-3 h-3 ml-1 transform -rotate-45" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </a>
                        </p>
                    </div>
                    @endforeach          
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
