@extends('layouts.main')

@section('seo')
    <link rel="canonical" href="https://naushah.ru/shopcart"/>
    <meta name="description"
        content="Идеальное сочетание литературного искусства и профессиональной звукорежиссуры. Откройте для себя новую вселенную историй и звуков. Всё для глубокой и содержательной культурной медитации" />
    <meta name="robots" content="index, follow" />
    <meta name="document-state" content="dynamic" />
    <meta name="creator" content="Воронов Виталий Андреевич" />
@endsection

@push('style')
@endpush

@section('title', 'Корзина | Аудиоспектакли в наушниках')

@section('header')
    @include('include.header')
@endsection

@section('content')
<section class="mx-8 lg:container lg:mx-auto mt-12">
    <h1 class="text-gray-600 font-medium text-2xl border-b border-gray-300 pb-2.5 mb-2.5">Корзина</h1>
    <x-cardShopCart :name="$event->name" :desc="$event->short_desc" :price="$event->price" :imageLink="$event->eventImages[0]->link" :alt="$event->eventImages[0]->alt" :id="$event->id"/>
    <div class="flex flex-row justify-end mt-5">
        <div class="">
            <p class="">1 билет на сумму</p>
            <p class="font-medium text-black">Итого к оплате</p>
        </div>
        <div class="ml-12">
            <p class="">{{$event->price}} ₽</p>
            <p class="font-medium text-black">{{$event->price}} ₽</p>
        </div>
    </div>
</section>
<section class="mx-8 lg:container lg:mx-auto mt-12">
    <h3 class="text-gray-600 font-medium text-2xl border-b border-gray-300 pb-2.5 mb-2.5">Куда и кому отправить билеты ?</h3>
    <p class="text-gray-500">Будьте внимательны при вводе</p>
    <form class="mt-4 flex flex-col lg:flex-row gap-2" action="{{ route('shopcart.submit') }}" method="post">
        @csrf
        <div class="flex flex-row gap-2">
            <div class="content-center w-1/2">
                <input hidden value="$event->url_video">
                <label class="ml-3 text-sm font-bold text-gray-700 tracking-wide">
                    Имя
                </label>
                <input class="bg-gray-50 w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500" type="name" placeholder="Имя">
            </div>
            <div class="content-center w-1/2">
                <label class="ml-3 text-sm font-bold text-gray-700 tracking-wide">
                    Фамилия
                </label>
                <input class="bg-gray-50 w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500" type="surname" placeholder="Фамилия">
            </div>
        </div>
        <div class="flex flex-row gap-2">
            <div class="content-center w-1/2">
                <label class="ml-3 text-sm font-bold text-gray-700 tracking-wide">
                    Почта
                </label>
                <input class="bg-gray-50 w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500" type="emale" placeholder="Email получателя">
            </div>
            <div class="content-center w-1/2">
                <label class="ml-3 text-sm font-bold text-gray-700 tracking-wide">
                    Телефон
                </label>
                <input class="bg-gray-50 w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500" type="tel" placeholder="Телефон">
            </div>
        </div>
        <input type="submit" class="py-2.5 px-6 mt-5 font-medium text-white bg-purple-700 cursor-pointer rounded-2xl hover:bg-purple-600 component-selected">
    </form>
    <p class="text-gray-500 text-xs mt-1">Нажимая кнопку «оплатить», вы принимаете условия пользовательского соглашения.</p>
</section>
@endsection

@section('footer')
    @include('include.footer')
@endsection

@push('scriptsFooter')
@endpush('scriptsFooter')
