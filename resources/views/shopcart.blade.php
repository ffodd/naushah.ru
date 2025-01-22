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
<section class="px-5 lg:container lg:mx-auto mt-12">
    <h1 class="font-serif text-3xl font-thin text-gray-900 border-b border-gray-300 pb-2.5 mb-2.5">Корзина</h1>
    <x-cardShopCart :name="$event->name" :desc="$event->short_desc" :price="$event->price" :imageLink="$event->eventImages[0]->link" :alt="$event->eventImages[0]->alt" :id="$event->id"/>
    <div class="flex flex-row justify-end mt-5">
        <div class="">
            <p class="">1 билет на сумму</p>
            <p class="font-serif font-semibold text-black">Итого к оплате</p>
        </div>
        <div class="ml-12">
            <p class="">{{$event->price}} ₽</p>
            <p class="font-serif font-semibold text-black">{{$event->price}} ₽</p>
        </div>
    </div>
</section>
<section class="px-5 lg:container lg:mx-auto mt-12">
    <h3 class="font-serif text-2xl font-thin text-gray-900 border-b border-gray-300 pb-2.5 mb-2.5">Куда и кому отправить билеты ?</h3>
    <p class="text-gray-500 text-xs font-normal">Будьте внимательны при вводе</p>
    <form class="mt-4 flex flex-col lg:flex-row gap-2" action="{{ route('pays.create') }}" method="post">
        @csrf
        <div class="flex flex-row gap-2">
            <div class="content-center w-1/2">
                <input hidden value="{{$event->id}}" name="iventid">
                <input hidden value="{{$event->name}}" name="eventName">
                <input hidden value="{{$event->price}}" name="price">
                <label class="ml-3 text-sm font-serif font-semibold text-gray-700 tracking-wide">
                    Имя
                </label>
                <input value="{{ old('name') }}" class="@error('name') is-invalid @enderror bg-gray-50 w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500" type="name" name="name" placeholder="Имя">
                @error('name')
                    <div class="text-xs font-serif font-semibold text-red-700 tracking-wide">{{ $message }}</div>
                @enderror
            </div>
            <div class="content-center w-1/2">
                <label class="ml-3 text-sm font-serif font-semibold text-gray-700 tracking-wide">
                    Фамилия
                </label>
                <input value="{{ old('surname') }}" class="@error('surname') is-invalid @enderror bg-gray-50 w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500" type="surname" name="surname" placeholder="Фамилия">
                @error('surname')
                    <div class="text-xs font-serif font-semibold text-red-700 tracking-wide">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="flex flex-row gap-2">
            <div class="content-center w-1/2">
                <label class="ml-3 text-sm font-serif font-semibold text-gray-700 tracking-wide">
                    Почта
                </label>
                <input value="{{ old('emale') }}" class="@error('emale') is-invalid @enderror bg-gray-50 w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500" type="email" name="email" placeholder="Email получателя">
                @error('emale')
                    <div class="text-xs font-serif font-semibold text-red-700 tracking-wide">{{ $message }}</div>
                @enderror
            </div>
            <div class="content-center w-1/2">
                <label class="ml-3 text-sm font-serif font-semibold text-gray-700 tracking-wide">
                    Телефон
                </label>
                <input value="{{ old('phone') }}" class="@error('phone') is-invalid @enderror bg-gray-50 w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500" type="phone" name="phone" placeholder="Телефон">
                @error('phone')
                    <div class="text-xs font-serif font-semibold text-red-700 tracking-wide">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <input type="submit" class="py-2.5 px-6 mt-6 font-medium text-white bg-gray-700 cursor-pointer rounded-2xl hover:bg-gray-900 component-selected">
    </form>
    <p class="text-gray-500 text-xs mt-1">Нажимая кнопку «оплатить», вы принимаете условия пользовательского соглашения.</p>
</section>
@endsection

@section('footer')
    @include('include.footer')
@endsection

@push('scriptsFooter')
@endpush('scriptsFooter')
