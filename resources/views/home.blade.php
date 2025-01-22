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
<style>
    .glide {
    position: relative;
    width: 100%;
    box-sizing: border-box;
    }
    .glide * {
    box-sizing: inherit;
    }
    .glide__track {
    overflow: hidden;
    }
    .glide__slides {
    position: relative;
    width: 100%;
    list-style: none;
    backface-visibility: hidden;
    transform-style: preserve-3d;
    touch-action: pan-Y;
    overflow: hidden;
    margin: 0;
    padding: 0;
    white-space: nowrap;
    display: flex;
    flex-wrap: nowrap;
    will-change: transform;
    }
    .glide2 {
    position: relative;
    width: 100%;
    box-sizing: border-box;
    }
    .glide2 * {
    box-sizing: inherit;
    }
    .glide2__track {
    overflow: hidden;
    }
    .glide2__slides {
    position: relative;
    width: 100%;
    list-style: none;
    backface-visibility: hidden;
    transform-style: preserve-3d;
    touch-action: pan-Y;
    overflow: hidden;
    margin: 0;
    padding: 0;
    white-space: nowrap;
    display: flex;
    flex-wrap: nowrap;
    will-change: transform;
    } 
</style>
@endpush

@section('title', 'На ушах по Санкт-Петербургу - Спекталки-прогулки в наушниках!')

@section('header')
    @include('include.header')
@endsection

@section('content')
<!-- start section 0 -->
<div class="fixed -z-10">
    <img class="" src="{{ URL::asset('theme/imgBackground.webp') }}" alt="наушники | naushah.ru">
</div>   
<!-- finish section 0 -->
<!-- start section 1 -->
<section class="flex flex-col items-center w-full md:flex-row">
    <div class="flex justify-end w-full p-4 md:w-1/2 lg:pl-16 xl:pl-24">
        <div class="">
        <h1 class="text-sm font-semibold tracking-wider text-[#fc1b7c] uppercase rounded-full mb-4">
            Спектакли - экскурсии
        </h1>
        <h2 class="max-w-2xl mb-4 text-4xl font-bold tracking-tight md:text-3xl lg:text-4xl xl:text-5xl">На ушах<br>
            <span class="inline-block text-[#0980f3] text-3xl md:text-3xl lg:text-4xl xl:text-5xl">по Санкт-Петербургу</span>
        </h2>
        <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg xl:text-xl">Увлекательные маршруты, превосходный звук, а также первоклассные актеры, позволят вам погрузиться в новое измерение досуга.</p>
        <a href="#" class="w-min inline-flex items-center justify-center px-5 py-1 xl:py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100">
            Каталог
            <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </a>
        </div>
    </div>
    <div class="w-full md:w-1/2">
        <div class="relative">
            <img src="{{ URL::asset('theme/banner/banner-1-0.webp') }}" class="inset-0 object-cover md:hidden rounded-lg">
            <img src="{{ URL::asset('theme/banner/banner-1-1.webp') }}" class="inset-0 object-cover hidden md:block rounded-lg">
            <h3 class="absolute top-[10%] left-[5%] leading-6 mb-1 text-xl xl:text-2xl 2xl:text-3xl font-bold text-black">20-26<br> октября</h3>
            <p class="w-min absolute top-[10%] right-[5%] md:top-auto md:bottom-[10%] md:left-[5%] text-sm leading-4 md:text-lg 2xl:text-xl pl-2 pr-2 pt-1 pb-1 md:leading-6 font-semibold text-black bg-slate-100/50 rounded-lg">Выставка<br>искусственного<br>интеллекта</p>
        </div>
    </div>
    </div>
</section>
<!-- finish section 1 -->
<!-- start section 2 (Карусель-0) -->
<section class="lg:mx-auto lg:container py-16 flex flex-row">
    <div class="glide pl-4 pr-4">
        <div class="flex flex-row justify-between items-center">
            <div class="flex flex-row gap-4">
                <h3 class="text-left mb-4 font-semibold mx-0 text-xl text-gray-900 md:leading-tight lg:text-2xl xl:text-4xl">Экскурсии-спектакли в наушниках</h3>
                <button type="button" class="hidden md:block text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Хит сезона</button>
            </div>
            <div class="flex flex-row gap-3" data-glide-el="controls">
                <button class="rounded-full border-2" data-glide-dir="<">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 mx-2 my-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                    </svg>
                </button>
                <button class="rounded-full border-2" data-glide-dir=">">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 mx-2 my-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="border-t mb-2"></div>
        <div class="inline-flex rounded-md shadow-sm" role="group">
            <button type="button" class="inline-flex items-center px-4 text-xs sm:text-base font-medium text-gray-100 bg-blue-900 border border-gray-900 rounded-s-lg hover:bg-gray-900 hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-white">
                <svg class="hidden sm:block w-3 h-3 me-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5C8.13401 5 5 8.13401 5 12V13.1707C5.31278 13.0602 5.64936 13 6 13H8C8.55228 13 9 13.4477 9 14V20C9 20.5523 8.55228 21 8 21H6C4.34315 21 3 19.6569 3 18V16V12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12V16V18C21 19.6569 19.6569 21 18 21H16C15.4477 21 15 20.5523 15 20V14C15 13.4477 15.4477 13 16 13H18C18.3506 13 18.6872 13.0602 19 13.1707V12C19 8.13401 15.866 5 12 5Z" fill="#111928"/>
                </svg>
                Без гида
            </button>
            <button type="button" class="inline-flex items-center px-4 text-xs sm:text-base font-medium text-gray-100 bg-cyan-900 border-t border-b border-gray-900 hover:bg-gray-900 hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-white">
                <svg class="hidden sm:block w-3 h-3 me-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2C10.1435 2 8.36301 2.7375 7.05025 4.05025C5.7375 5.36301 5 7.14348 5 9C4.20435 9 3.44129 9.31607 2.87868 9.87868C2.31607 10.4413 2 11.2044 2 12V14C2 14.7956 2.31607 15.5587 2.87868 16.1213C3.44129 16.6839 4.20435 17 5 17H6C6.55228 17 7 16.5523 7 16V9C7 7.67392 7.52678 6.40215 8.46447 5.46447C9.40215 4.52678 10.6739 4 12 4C13.3261 4 14.5979 4.52678 15.5355 5.46447C16.4732 6.40215 17 7.67392 17 9V16.083C17 16.4661 16.9245 16.8454 16.778 17.1993C16.6314 17.5532 16.4165 17.8748 16.1456 18.1456C15.8748 18.4165 15.5532 18.6314 15.1993 18.778C14.8454 18.9245 14.4661 19 14.083 19H14C14 17.8954 13.1046 17 12 17H11C9.89543 17 9 17.8954 9 19V20C9 21.1046 9.89543 22 11 22H12C12.7403 22 13.3866 21.5978 13.7324 21H14.083C14.7287 21 15.3681 20.8728 15.9647 20.6257C16.5612 20.3786 17.1033 20.0164 17.5598 19.5598C18.0164 19.1033 18.3786 18.5612 18.6257 17.9647C18.7548 17.6531 18.8511 17.3298 18.9137 17H19C19.7957 17 20.5587 16.6839 21.1213 16.1213C21.6839 15.5587 22 14.7957 22 14V12C22 11.2043 21.6839 10.4413 21.1213 9.87868C20.5587 9.31607 19.7957 9 19 9C19 7.14349 18.2625 5.36301 16.9497 4.05025C15.637 2.7375 13.8565 2 12 2ZM13.4506 5.2748C12.959 5.08367 12.4345 4.99166 11.9072 5.00405C11.3799 5.01644 10.8603 5.133 10.3782 5.347C9.89613 5.56101 9.46114 5.86824 9.09827 6.25102C8.71831 6.65183 8.73521 7.28476 9.13602 7.66473C9.53683 8.04469 10.1698 8.02779 10.5497 7.62698C10.7312 7.43559 10.9487 7.28198 11.1897 7.17498C11.4307 7.06797 11.6905 7.0097 11.9542 7.0035C12.2178 6.9973 12.4801 7.04331 12.7259 7.13887C12.9717 7.23443 13.1962 7.37766 13.3864 7.56032C13.7848 7.94283 14.4178 7.92998 14.8003 7.53161C15.1828 7.13323 15.17 6.5002 14.7716 6.11768C14.3912 5.75238 13.9422 5.46592 13.4506 5.2748Z" fill="#111928"/>
                </svg>
                С гидом
            </button>
            <button type="button" class="inline-flex items-center px-4 text-xs sm:text-base font-medium text-gray-100 bg-emerald-900 border border-gray-900 rounded-e-lg hover:bg-gray-900 hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-white">
                <svg class="hidden sm:block w-3 h-3 me-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4C9.79086 4 8 5.79086 8 8C8 10.2091 9.79086 12 12 12C14.2091 12 16 10.2091 16 8C16 5.79086 14.2091 4 12 4ZM10 13C7.79086 13 6 14.7909 6 17V18C6 19.1046 6.89543 20 8 20H16C17.1046 20 18 19.1046 18 18V17C18 14.7909 16.2091 13 14 13H10Z" fill="#111928"/>
                </svg>
                С экскурсоводом
            </button>
        </div>
        <div data-glide-el="track" class="glide__track lg:w-[1000px]">
            <ul class="glide__slides">
                <li class="glide__slide"><x-cardHomePage :name="$event[0][0]->name" :desc="$event[0][0]->short_desc" :price="$event[0][0]->price" :imageLink="$event[0][0]->eventImages[0]->link" :alt="$event[0][0]->eventImages[0]->alt" :id="$event[0][0]->id"/></li>
                <li class="glide__slide"><x-cardHomePage :name="$event[0][1]->name" :desc="$event[0][1]->short_desc" :price="$event[0][1]->price" :imageLink="$event[0][1]->eventImages[0]->link" :alt="$event[0][1]->eventImages[0]->alt" :id="$event[0][1]->id"/></li>
                <li class="glide__slide"><x-cardHomePage :name="$event[0][2]->name" :desc="$event[0][2]->short_desc" :price="$event[0][2]->price" :imageLink="$event[0][2]->eventImages[0]->link" :alt="$event[0][2]->eventImages[0]->alt" :id="$event[0][2]->id"/></li>
                <li class="glide__slide"><x-cardHomePage :name="$event[0][3]->name" :desc="$event[0][3]->short_desc" :price="$event[0][3]->price" :imageLink="$event[0][3]->eventImages[0]->link" :alt="$event[0][3]->eventImages[0]->alt" :id="$event[0][3]->id"/></li>
                <li class="glide__slide"><x-cardHomePage :name="$event[0][4]->name" :desc="$event[0][4]->short_desc" :price="$event[0][4]->price" :imageLink="$event[0][4]->eventImages[0]->link" :alt="$event[0][4]->eventImages[0]->alt" :id="$event[0][4]->id"/></li>
            </ul>
        </div>
    </div>
</section>
<!-- finish section 2 -->
<!-- start section 2.2 (Карусель-1) -->
<section class="lg:mx-auto lg:container pb-16 flex flex-row">
    <div class="glide2 pl-4 pr-4">
        <div class="flex flex-row justify-between items-center">
            <div class="flex flex-row gap-4">
                <h3 class="text-left mb-4 font-semibold mx-0 text-base text-gray-900 md:leading-tight lg:text-xl xl:text-2xl">Пушкинские Горы</h3>
            </div>
        </div>
        <div class="border-t mb-2"></div>
        <div data-glide-el="track" class="glide2__track lg:w-[600px]">
            <ul class="glide2__slides">
                <li class="glide2__slide"><x-cardHomePage :name="$event[1][0]->name" :desc="$event[1][0]->short_desc" :price="$event[1][0]->price" :imageLink="$event[1][0]->eventImages[0]->link" :alt="$event[1][0]->eventImages[0]->alt" :id="$event[1][0]->id"/></li>
                <li class="glide2__slide"><x-cardHomePage :name="$event[1][1]->name" :desc="$event[1][1]->short_desc" :price="$event[1][1]->price" :imageLink="$event[1][1]->eventImages[0]->link" :alt="$event[1][1]->eventImages[0]->alt" :id="$event[1][1]->id"/></li>
                <li class="glide2__slide"><x-cardHomePage :name="$event[1][2]->name" :desc="$event[1][2]->short_desc" :price="$event[1][2]->price" :imageLink="$event[1][2]->eventImages[0]->link" :alt="$event[1][2]->eventImages[0]->alt" :id="$event[1][2]->id"/></li>
            </ul>
        </div>
    </div>
</section>
<!-- finish section 2.2 -->
<!-- start section 2.5 -->
<section class="lg:mx-auto lg:container">
    <div class="pl-4 pr-4 mt-6 space-y-3">
        <h3 class="font-bold text-base text-gray-700 md:text-lg">Фрагмент театральной аудиоэкскурсии:</h3>
        <div class="flex flex-row gap-4 items-center">
            <img src="{{ URL::asset('theme/icons/iconPhones.webp') }}" class="h-10" alt="naushah.ru | аудиоспекталь">
            <audio class="flex-auto z-50" controls="controls" preload="none">
                <source src="{{ URL::asset('theme/tourGuides/fragment-2.mp3') }}" type="audio/mpeg">
            </audio>
        </div>
    </div>
</section>
<!-- finish section 2.5 -->
<!-- start section 3 -->
<section class="lg:mx-auto lg:container py-16 bg-white md:py-20 lg:py-24">
    <div class="pl-4 pr-4">

        <h2 class="font-semibold text-xl text-gray-900 md:leading-tight sm:text-4xl">Вопросы и ответы</h2>
        <p class="mt-4 text-xl font-thin text-gray-700 lg:text-2xl">Путешествуйте с удовольствием и фантазией!</p>

        <div class="mt-4" id="accordion-open" data-accordion="open">
            <!-- question-1 -->
            <h3 id="accordion-open-heading-1">
                <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 hover:bg-gray-100 gap-3" data-accordion-target="#accordion-open-body-1" aria-expanded="false" aria-controls="accordion-open-body-1">
                    <span class="flex items-center"><svg class="hidden sm:block w-5 h-5 me-2 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg> Где начинаются и заканчиваются прогулки?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                </button>
            </h3>
            <div id="accordion-open-body-1" class="hidden" aria-labelledby="accordion-open-heading-1">
                <div class="p-5 border border-b-0 border-gray-200">
                    <p class="mb-2 text-gray-500">Каждый спектакль по своему. Но чаще всего наши спектакли-прогулки начинаются не очень далеко от метро, и заканчиваются там, где всегда есть маршруты общественного транспорта.</p>
                </div>
            </div>
            <!-- question-2 -->
            <h3 id="accordion-open-heading-2">
                <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 hover:bg-gray-100 gap-3" data-accordion-target="#accordion-open-body-2" aria-expanded="false" aria-controls="accordion-open-body-2">
                    <span class="flex items-center"><svg class="hidden sm:block w-5 h-5 me-2 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>В течение скольких дней после покупки мне доступны карта маршрута и спектакль?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                </button>
            </h3>
            <div id="accordion-open-body-2" class="hidden" aria-labelledby="accordion-open-heading-2">
                <div class="p-5 border border-b-0 border-gray-200">
                    <p class="mb-2 text-gray-500">В течении четырех дней.</p>
                </div>
            </div>
            <!-- question-3 -->
            <h3 id="accordion-open-heading-3">
                <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 hover:bg-gray-100 gap-3" data-accordion-target="#accordion-open-body-3" aria-expanded="false" aria-controls="accordion-open-body-3">
                    <span class="flex items-center"><svg class="hidden sm:block w-5 h-5 me-2 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg> Сколько продлится прогулка?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                </button>
            </h3>
            <div id="accordion-open-body-3" class="hidden" aria-labelledby="accordion-open-heading-3">
                <div class="p-5 border border-t-0 border-gray-200">
                    <p class="mb-2 text-gray-500">Обычно два – два с половиной часа. Но вы всегда можете остановить запись. Отдохнуть. Перекусить. Подумать. А потом продолжить.</p>
                </div>
            </div>
            <!-- question-4 -->
            <h3 id="accordion-open-heading-4">
                <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 hover:bg-gray-100 gap-3" data-accordion-target="#accordion-open-body-4" aria-expanded="false" aria-controls="accordion-open-body-4">
                    <span class="flex items-center"><svg class="hidden sm:block w-5 h-5 me-2 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg> А если пойдет дождь? Ветер? Град?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                </button>
            </h3>
            <div id="accordion-open-body-4" class="hidden" aria-labelledby="accordion-open-heading-4">
                <div class="p-5 border border-t-0 border-gray-200">
                    <p class="mb-2 text-gray-500">Что значит если? Это же Питер (детка)! Ветер? Град? А в чем проблема?</p>
                </div>
            </div>
            <!-- question-5 -->
            <h3 id="accordion-open-heading-5">
                <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 hover:bg-gray-100 gap-3" data-accordion-target="#accordion-open-body-5" aria-expanded="false" aria-controls="accordion-open-body-5">
                    <span class="flex items-center"><svg class="hidden sm:block w-5 h-5 me-2 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg> Как я могу отменить покупку видеогида?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                </button>
            </h3>
            <div id="accordion-open-body-5" class="hidden" aria-labelledby="accordion-open-heading-5">
                <div class="p-5 border border-t-0 border-gray-200">
                    <p class="mb-2 text-gray-500">Вот тут проблема. Отменить купленный аудиоспектакль можно только по очень уважительной причине. И на сколько она уважительная , будем решать мы. Ну а как по другому? Ждем ваших предложений.</p>
                </div>
            </div>
            <!-- question-6 -->
            <h3 id="accordion-open-heading-6">
                <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 hover:bg-gray-100 gap-3" data-accordion-target="#accordion-open-body-6" aria-expanded="false" aria-controls="accordion-open-body-6">
                    <span class="flex items-center"><svg class="hidden sm:block w-5 h-5 me-2 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg> В экскурсии могут участвовать дети?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                </button>
            </h3>
            <div id="accordion-open-body-6" class="hidden" aria-labelledby="accordion-open-heading-6">
                <div class="p-5 border border-t-0 border-gray-200">
                    <p class="mb-2 text-gray-500">Конечно. На каждом спектакле стоит возрастная маркировка!</p>
                </div>
            </div>
            <!-- question-7 -->
            <h3 id="accordion-open-heading-7">
                <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 hover:bg-gray-100 gap-3" data-accordion-target="#accordion-open-body-7" aria-expanded="false" aria-controls="accordion-open-body-7">
                    <span class="flex items-center"><svg class="hidden sm:block w-5 h-5 me-2 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg> Мы можем пройти экскурсию группой?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                </button>
            </h3>
            <div id="accordion-open-body-7" class="hidden" aria-labelledby="accordion-open-heading-7">
                <div class="p-5 border border-t-0 border-gray-200">
                    <p class="mb-2 text-gray-500">А то! Обязательно идите группой друзей, но каждому придется купить свой билет.</p>
                </div>
            </div>
            <!-- question-8 -->
            <h3 id="accordion-open-heading-8">
                <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 hover:bg-gray-100 gap-3" data-accordion-target="#accordion-open-body-8" aria-expanded="false" aria-controls="accordion-open-body-8">
                    <span class="flex items-center"><svg class="hidden sm:block w-5 h-5 me-2 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg> Как насчет физической нагрузки? Придется бегать? Могут ли участвовать пожилые люди и беременные женщины?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                </button>
            </h3>
            <div id="accordion-open-body-8" class="hidden" aria-labelledby="accordion-open-heading-8">
                <div class="p-5 border border-t-0 border-gray-200">
                    <p class="mb-2 text-gray-500">Бегать не придется. Это точно. Весь маршрут вы пройдете легким прогулочным шагом с небольшими остановками.</p>
                </div>
            </div>
            <!-- question-9 -->
            <h3 id="accordion-open-heading-9">
                <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 hover:bg-gray-100 gap-3" data-accordion-target="#accordion-open-body-9" aria-expanded="false" aria-controls="accordion-open-body-9">
                    <span class="flex items-center"><svg class="hidden sm:block w-5 h-5 me-2 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg> Можно купить доступ к спектаклю дешевле?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                </button>
            </h3>
            <div id="accordion-open-body-9" class="hidden" aria-labelledby="accordion-open-heading-9">
                <div class="p-5 border border-t-0 border-gray-200">
                    <p class="mb-2 text-gray-500">Можно. Мы продумываем систему скидок и акций.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- finish section 3 -->
<!-- start section 4 -->
<section class="lg:mx-auto lg:container"> 
    <div class="grid pl-4 pr-4 gap-5 lg:grid-cols-2">
        <div class="flex flex-col justify-center md:pr-8 xl:pr-0">
            <div class="mb-6 text-justify">
                <div class="flex flex-row items-end">
                    <img src="{{ URL::asset('icons/iconAudio.webp') }}" class="w-10 h-10" alt="naushah.ru | аудиоспекталь">
                    <h2 class="inline ml-4 font-sans text-xl font-semibold text-gray-900 sm:text-4xl">Прогулки и спектакли</h2>
                </div>
                <p class="mt-12 text-base text-gray-700 md:text-lg">Театральная экскурсия (АУДИОСПЕКТАКЛЬ) по городу: новый увлекательный досуг для вас и ваших друзей!</p>
                <p class="mt-4 text-base text-gray-700 md:text-lg">Надев наушники, вы отправитесь на прогулку  “вместе” с героями экскурсии-спектакля, которые будут “сопровождать” вас  в любое выбранное вами  время.</p>
                <p class="mt-4 text-base text-gray-700 md:text-lg">И вам точно не будет скучно. Никто  не будет вас мучать датами и цифрами . Но при этом вы узнаете много нового. А главное, вы  сразу почувствуете себя героем нашего спектакля. Ведь в этом театральном путешествии  вы “встретитесь” с известными людьми ,которые когда-то жили на улицах, по которым вы пойдете , “станете” участниками  великих событий, когда-то  проходивших по пути вашего следования и узнаете как все было на самом деле.</p>
                <p class="mt-4 text-base text-gray-700 md:text-lg">Это настоящий аудиоспектакль под открытым небом.  На свежем воздухе и в потрясающих декорациях Петербурга. Узнаете  город. Ну, и для здоровья полезно! </p>
            </div>
        </div>
        <div class="flex justify-center w-full lg:items-center">
            <div class="flex flex-col items-end pr-3">
                <img src="{{ URL::asset('webp/img1.webp') }}" class="object-cover w-full h-full mb-6 rounded shadow-lg lg:h-48 xl:h-56 lg:w-48 xl:w-56" alt="naushah.ru | прогулки и спектакли">
                <img src="{{ URL::asset('webp/img3.webp') }}" class="object-cover w-full h-full rounded shadow-lg lg:h-32 xl:h-40 lg:w-32 xl:w-40" alt="naushah.ru | увлекательный досуг">
            </div>
            <div class="pl-3">
                <img src="{{ URL::asset('webp/img2.webp') }}" class="object-cover w-full h-full rounded shadow-lg lg:h-64 xl:h-80 lg:w-64 xl:w-80" alt="naushah.ru | аудиоспекталь">
            </div>
        </div>
    </div>    
</section>
<!-- finish section 4 -->
<!-- start section 5 -->
<section class="mt-64 lg:mt-0 relative pb-8 overflow-y-hidden bg-[#f7f7f7]">
    <div class="w-2/5 absolute left-0 top-0 z-10 h-full">
            <div class="w-1/2 absolute right-0 top-0 h-full bg-gradient-to-l from-[#f7f7f7]"></div>
        <div class="w-full h-full absolute bg-[#f7f7f7] opacity-80 lg:hidden block inset-0"></div>
    </div>
    <img class="block absolute top-0 left-0 bottom-0 w-2/5 object-cover h-full" src="{{ URL::asset('webp/img5.webp') }}" alt="naushah.ru | мир интерактивных прогулок">
    <div class="relative mx-auto container pl-4 pr-4 z-20">
        <div class="w-full lg:w-3/5 lg:pl-16 ml-auto">
            <div class="mt-10 lg:mt-32 lg:mb-32 mb-20 text-justify">
                <h2 class="mb-4 font-semibold mx-auto lg:mx-0 text-xl text-gray-900 md:leading-tight sm:text-4xl">Как все происходит?</h2>
                <p class="mb-8 lg:mx-0 mx-auto text-base lg:text-lg text-gray-700">Ниже на нашем сайте вы найдете различные спектакли-экскурсии и их описание. Выберете один из них. А когда оплатите, то сразу на вашу почту, Whatsapp или Telegram придет ссылка. Нажав на нее, вам, в течении трех дней, будет доступна наша экскурсия. Это совсем не сложно.  В описании  будет нарисован маршрут и  указано место , где начинается спектакль (обычно не очень далеко от метро). А на экране вашего смартфона всю дорогу будет идти видео, указывающее вам путь. Перед выходом зарядите  смартфон и подготовьте наушники. Наушники - обязательно.</p>
                <p class="mb-8 lg:mx-0 mx-auto text-base lg:text-lg text-gray-700">Сморите, время от времени, на экран  вашего смартфона и  никогда не заблудитесь.</p>
                <p class="mb-8 lg:mx-0 mx-auto text-base lg:text-lg text-gray-700">Если же вы пришли на место самостоятельно в любое удобное для вас время, то  откройте  полученное письмо на вашем телефоне, зайдите по полученной ранее ссылке и наслаждайтесь. </p>
                <p class="mb-8 lg:mx-0 mx-auto text-base lg:text-lg text-gray-700">По пути  вы  можете нажать на паузу , зайти в кафе или магазинчик, а потом вновь продолжить маршрут. И идите компанией, будет веселее. На маршруты , помеченные ярлычком "Для детей" обязательно берите с собой детей, узнав в описании  рекомендованный нами возраст.</p>
                <p class="mb-8 lg:mx-0 mx-auto text-base lg:text-lg text-gray-700">се наши экскурсии-спектакли рассчитаны, и  на жителей города, которым кажется, что они все уже знают, и на туристов , впервые оказавшихся на берегах Невы, и на тех, кто сейчас далеко , но любит Питер всей душой и даже на тех , кто привык путешествовать, лежа на диване (Хотя это не спортивно). Вперед друзья! За эмоциями, знаниями и здоровьем! </p>
            </div>
        </div>
    </div>
</section>
<!-- finish section 5 -->

@endsection

@section('footer')
    @include('include.footer')
@endsection

@push('scriptsFooter')
<!-- Скрипт для "Экскрусии-спекталки в наушниках" -->
<script src="./source/glide.min.js"></script>
<script>
    new Glide('.glide',
    {
        type: 'carousel',
        startAt: 0,
        perView: 5,
        gap: 10,
        autoplay: 5000,
        animationDuration: 1600,
        breakpoints: {
            1280: {
                perView: 3
            },
            600: {
                perView: 2
            }
        } 
    }).mount()
    new Glide('.glide2',
    {
        type: 'carousel',
        startAt: 0,
        perView: 3,
        gap: 10,
        autoplay: 5000,
        animationDuration: 1600,
        breakpoints: {
            1280: {
                perView: 3
            },
            600: {
                perView: 2
            }
        } 
    }).mount()
</script>
@endpush('scriptsFooter')
