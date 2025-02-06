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
<section class="max-w-screen-lg mx-auto">
    <main class="mt-10">
      <div class="mb-4 md:mb-0 w-full mx-auto relative">
        <div class="px-4 lg:px-0">
          <h1 class="text-4xl font-semibold text-gray-800 leading-tight">
            {{$post->name}}
          </h1>
        </div>
        <img src="{{ URL::asset($post->postImages[0]->link) }}" class="w-full object-cover lg:rounded" style="height: 28em;"/>
      </div>
      <div class="flex flex-col lg:flex-row lg:space-x-12">
        <article class="px-4 lg:px-0 mt-12 text-gray-700 text-lg leading-relaxed w-full">
          {!!$post->content!!}
        </article>
      </div>
    </main>
</section>
@endsection

@section('footer')
    @include('include.footer')
@endsection

@push('scriptsFooter')
@endpush('scriptsFooter')
