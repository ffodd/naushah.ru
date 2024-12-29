@extends('layouts.main')

@section('seo')
    <link rel="canonical" href="https://naushah.ru"/>
    <meta name="description"
        content="Погрузитесь в мир аудиопрогулок и спектаклей в наушниках: ваша возможность насладиться культурными событиями где угодно. Исследуйте новые маршруты и позвольте знакомым произведениям вдохновлять вас на каждом шагу. Приятные голоса и качественный звук — всё, что нужно для полного погружения." />
    <meta name="robots" content="index, follow" />
    <meta name="document-state" content="dynamic" />
    <meta name="creator" content="Воронов Виталий Андреевич" />
@endsection

@push('style')
@endpush

@section('title', 'Экскурсоводам - Спекталки-прогулки в наушниках!')

@section('header')
    @include('include.header')
@endsection

@section('content')
<!-- start section 1 -->
<section class="hidden relative top-0 left-0 z-30 h-full mx-auto opacity-25">
    <div class="relative opacity-50">
        <div class="absolute left-0 w-full h-56 -mt-48 -ml-48 transform -rotate-45 bg-purple-200 rounded-l-lg sm:-ml-56"></div>
        <div class="absolute w-full h-64 min-w-full -mt-2 -ml-6 transform -rotate-45 bg-indigo-200 rounded-l-lg sm:-ml-32 sm:mt-20"></div>
        <div class="absolute left-0 w-full h-64 mt-24 ml-64 transform -rotate-45 bg-blue-200 rounded-lg rounded-l-lg"></div>
    </div>
</section>
<!-- finish section 1 -->
 <!-- start section 2 -->
<section class="mx-auto container overflow-hidden py-32 z-40">
    <div class="space-y-16 px-6">
        <h1 class="relative z-10 text-4xl font-bold lg:text-4xl">Экскурсоводам</h2>
        <div class="grid gap-6 sm:grid-cols-2 md:gap-12 lg:gap-24">
            <div class="relative mb-6 sm:mb-0">
                <div class="absolute -inset-20 bg-[linear-gradient(to_right,var(--ui-border-color)_1px,transparent_1px),linear-gradient(to_bottom,var(--ui-border-color)_1px,transparent_1px)] bg-[size:24px_24px] sm:-inset-40"></div>
                <div class="rounded-lg absolute -inset-20 bg-gradient-to-b from-gray-200 via-transparent to-gray-50 sm:-inset-40"></div>
                <div class="rounded-lg absolute -inset-20 bg-gradient-to-r from-gray-200 via-transparent to-gray-50 sm:-inset-40"></div>

                <div class="shadow-md rounded-lg relative overflow-hidden shadow-gray-950/[0.03]">
                    <img class="relative" src="{{ URL::asset('theme/tourGuides/imgTourGuides.webp') }}" alt="Экскурсоводам" />
                </div>
            </div>
            <div class="relative space-y-4">
                <p class="text-base text-gray-700 md:text-lg"><span class="font-bold text-[#0980f3]">«На ушах»</span> – это театрализованные аудио-экскурсии по городам России. Надев наушники, зрители отправляются по историческим местам вместе с героями спектаклей. Экскурсию можно пройти в любое время дня, оплатив доступ ее на нашем сайте.</p>
                <p class="text-base text-gray-700 md:text-lg">Мы хотим расширяться и делать не только диджитал проект, но и проводить экскурсии с живым рассказчиком.</p>
                <div class="mt-6 space-y-3">
                    <h3 class="font-bold text-base text-gray-700 md:text-lg">Фрагмент театральной аудиоэкскурсии:</h3>
                    <div class="flex flex-row gap-4 items-center">
                        <img src="{{ URL::asset('icons/iconAudio.webp') }}" class="w-10 h-10" alt="naushah.ru | аудиоспекталь">
                        <audio class="flex-auto z-50" controls="controls" preload="none">
                            <source src="{{ URL::asset('theme/tourGuides/fragment-1.mp3') }}" type="audio/mpeg">
                        </audio>
                    </div>
                </div>

                <div class="pt-6">
                    <div class="">
                        <p class="text-base text-gray-700 md:text-lg">Мы ежегодно создаем новые аудио-форматы. Сейчас ищем специалистов, которые бы могли создавать вместе с нами тексты для будущих экскурсий. Нужно: отбирать важную информацию об объектах, по местам которых движется экскурсия, изучать и прописывать события, происходившие около этих объектов, возможно, расписывать характеристики и диалоги персонажей, участвующих в этих событиях. Возможно, не просто собирать материал, но и попадать в хронометраж, так, чтобы зритель плавно шел по историческим точкам города. Мы готовы оплачивать вашу работу</p>

                        <div class="mt-6 space-y-3">
                            <h3 class="font-bold text-base text-gray-700 md:text-lg">Фрагмент театральной аудиоэкскурсии:</h3>
                            <div class="flex flex-row gap-4 items-center">
                                <img src="{{ URL::asset('theme/icons/iconPhones.webp') }}" class="h-10" alt="naushah.ru | аудиоспекталь">
                                <audio class="flex-auto z-50" controls="controls" preload="none">
                                    <source src="{{ URL::asset('theme/tourGuides/fragment-2.mp3') }}" type="audio/mpeg">
                                </audio>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- finish section 2 -->
 <!-- start section 3 -->
<section class="py-8 border-t border-b border-blue-100 bg-blue-50 z-40">
    <div class="container mx-auto">
        <div class="flex flex-col items-center content-center justify-center text-center lg:flex-row lg:text-left">
            <img class="self-start w-auto h-24 px-4 mx-auto -mt-1 lg:mx-0" alt="Ме́дный вса́дник" src="{{ URL::asset('theme/icons/iconPeter.webp') }}">

            <div class="flex flex-col content-center px-4 mx-4 my-6">
                <h4 class="pb-0 mb-0 text-lg font-semibold mb-md-0">Проект «На ушах» ищет экскурсоводов-создателей экскурсий</h4>
                <p class="mb-0 text-gray-700">Готовы к сотрудничеству? Свяжитесь с нами в вконтаке или через почту!</p>
            </div>
            <a href="https://vk.com/na_ushah" class="px-4 py-2 font-semibold text-white bg-blue-500 border border-green-700 rounded shadow hover:bg-blue-600 z-50">Перейти в VK</a>

        </div>
    </div>
</section>
<!-- finish section 3 -->
@endsection

@section('footer')
    @include('include.footer')
@endsection

@push('scriptsFooter')
@endpush('scriptsFooter')
