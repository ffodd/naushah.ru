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
<section class="lg:mx-auto lg:container mt-4">
<div class="">       
            <div class="relative mx-auto border-gray-800 bg-gray-800 border-[14px] rounded-[2.5rem] h-[512px] w-[300px]">
                <div class="h-[32px] w-[3px] bg-gray-800 absolute -start-[17px] top-[72px] rounded-s-lg"></div>
                <div class="h-[46px] w-[3px] bg-gray-800 absolute -start-[17px] top-[124px] rounded-s-lg"></div>
                <div class="h-[46px] w-[3px] bg-gray-800 absolute -start-[17px] top-[178px] rounded-s-lg"></div>
                <div class="h-[64px] w-[3px] bg-gray-800 absolute -end-[17px] top-[142px] rounded-e-lg"></div>
                <div class="rounded-[2rem] overflow-hidden w-[272px] h-[484px] bg-white">
                  <video controls class="">
                    <source src="/events/video/id4.mp4" type="video/mp4">
                  </video>
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
