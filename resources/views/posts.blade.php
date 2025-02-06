@extends('layouts.main')

@section('seo')
    <link rel="canonical" href="https://naushah.ru/posts"/>
    <meta name="description"
        content="Отдых в Санкт-Петербурге: выберите идеальное место для проживания. Отели, хостелы и апартаменты ждут вас в сердце города, рядом с основными достопримечательностями. Узнайте, какие места предлагают лучшие условия для вашего незабываемого путешествия."/>
    <meta name="robots" content="index, follow" />
    <meta name="document-state" content="dynamic" />
    <meta name="creator" content="Воронов Виталий Андреевич" />
@endsection

@push('style')
@endpush

@section('title', '')

@section('header')
    @include('include.header')
@endsection

@section('content')
<section class="lg:mx-auto lg:container mb-10">
    <div class="flex flex-wrap mt-10 overflow-hidden">
        <div class="w-full overflow-hidden">
            <div class="ml-2 mr-2 md:mr-4">
                <div class="pb-12">
                    <p class="relative block mt-5 mb-1 text-xs font-medium tracking-wide text-green-500 uppercase">А Вы знали?</p>
                    <h2 class="mb-1 font-serif text-3xl font-thin text-gray-900">Интересные заметки</h2>
                    <span class="block mb-5 text-xs font-normal text-gray-800">
                        <span class="ml-1 text-gray-500">Подписывайтесь на наш блог, чтобы получать свежие идеи для путешествий и организовать незабываемый отдых!</span>
                    </span>
                    <p class="text-gray-800">
                        <span>Добро пожаловать на наш блог, посвящённый интересным событиям и уникальным местам. Здесь вы найдете заметки о самых увлекательных направлениях, предложениях и событиях, которые стоит посетить. Мы подготовили для вас тщательно отобранные статьи о культуре, гастрономии и традициях разных уголков мира.</span>
                    </p>
                </div>
                <div class="grid grid-cols-12 gap-x-4 gap-y-12">
                    @foreach ($posts as $post)
                        <div class="col-span-12 md:col-span-6 lg:col-span-4 2xl:col-span-3">
                            <x-cards.cardPost  :id="$post->id" :imageLink="$post->postImages[0]->link" :name="$post->name" :description="$post->description"/>
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
