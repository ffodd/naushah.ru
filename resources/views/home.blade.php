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
    .glide3 {
    position: relative;
    width: 100%;
    box-sizing: border-box;
    }
    .glide3 * {
    box-sizing: inherit;
    }
    .glide3__track {
    overflow: hidden;
    }
    .glide3__slides {
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

@section('title', 'Спектакли, прогулки и экскурсии в наушниках!')

@section('header')
    @include('include.header')
@endsection

@section('content')
<!-- start section 0 -->
<div class="fixed -z-10">
    <img class="" src="{{ URL::asset('theme/imgBackground.webp') }}" alt="Прогулки в наушниках">
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
            <img src="{{ URL::asset('theme/banner/banner-1-0.webp') }}" alt="Выставка ИИ" class="inset-0 object-cover md:hidden rounded-lg">
            <img src="{{ URL::asset('theme/banner/banner-1-1.webp') }}" alt="Искусственный интеллект" class="inset-0 object-cover hidden md:block rounded-lg">
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
                <h3 class="text-left mb-4 font-semibold mx-0 text-xl text-gray-900 md:leading-tight lg:text-2xl xl:text-4xl">Экскурсии-спектакли без гида</h3>
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
        <div class="flex flex-col lg:flex-row gap-4">
            <div data-glide-el="track" class="glide__track lg:w-[1000px]">
                <ul class="glide__slides">
                    <li class="glide__slide"><x-cardHomePage :location="$event[0][0]->eventCity->name" :name="$event[0][0]->name" :desc="$event[0][0]->short_desc" :price="$event[0][0]->price" :imageLink="$event[0][0]->eventImages[0]->link" :alt="$event[0][0]->eventImages[0]->alt" :id="$event[0][0]->id"/></li>
                    <li class="glide__slide"><x-cardHomePage :location="$event[0][1]->eventCity->name" :name="$event[0][1]->name" :desc="$event[0][1]->short_desc" :price="$event[0][1]->price" :imageLink="$event[0][1]->eventImages[0]->link" :alt="$event[0][1]->eventImages[0]->alt" :id="$event[0][1]->id"/></li>
                    <li class="glide__slide"><x-cardHomePage :location="$event[0][2]->eventCity->name" :name="$event[0][2]->name" :desc="$event[0][2]->short_desc" :price="$event[0][2]->price" :imageLink="$event[0][2]->eventImages[0]->link" :alt="$event[0][2]->eventImages[0]->alt" :id="$event[0][2]->id"/></li>
                    <li class="glide__slide"><x-cardHomePage :location="$event[0][3]->eventCity->name" :name="$event[0][3]->name" :desc="$event[0][3]->short_desc" :price="$event[0][3]->price" :imageLink="$event[0][3]->eventImages[0]->link" :alt="$event[0][3]->eventImages[0]->alt" :id="$event[0][3]->id"/></li>
                    <li class="glide__slide"><x-cardHomePage :location="$event[0][4]->eventCity->name" :name="$event[0][4]->name" :desc="$event[0][4]->short_desc" :price="$event[0][4]->price" :imageLink="$event[0][4]->eventImages[0]->link" :alt="$event[0][4]->eventImages[0]->alt" :id="$event[0][4]->id"/></li>
                </ul>
            </div>
            <div class="lg:w-[500px]">
                <x-bannerHomePage :location="$event[3][0]->eventCity->name" :name="$event[3][0]->name" :desc="$event[3][0]->short_desc" :price="$event[3][0]->price" :imageLink="$event[3][0]->eventImages[0]->link_banner" :alt="$event[3][0]->eventImages[0]->alt" :id="$event[3][0]->id"/>
            </div>
        </div>
    </div>
</section>
<!-- finish section 2 -->
 <!-- start section 2.1 (Карусель-1) -->
<section class="lg:mx-auto lg:container pb-16 flex flex-row">
    <div class="glide2 pl-4 pr-4">
        <div class="flex flex-row justify-between items-center">
            <div class="flex flex-row gap-4">
                <h3 class="text-left mb-4 font-semibold mx-0 text-base text-gray-900 md:leading-tight lg:text-xl xl:text-2xl">Экскурсии-спектакли с гидом</h3>
            </div>
        </div>
        <div class="border-t mb-2"></div>
        <div class="flex flex-col lg:flex-row gap-4">
            <div data-glide-el="track" class="glide2__track lg:w-[1000px]">
                <ul class="glide2__slides">
                    <li class="glide2__slide"><x-cardHomePage :location="$event[1][0]->eventCity->name" :name="$event[1][0]->name" :desc="$event[1][0]->short_desc" :price="$event[1][0]->price" :imageLink="$event[1][0]->eventImages[0]->link" :alt="$event[1][0]->eventImages[0]->alt" :id="$event[1][0]->id"/></li>
                    <li class="glide2__slide"><x-cardHomePage :location="$event[1][1]->eventCity->name" :name="$event[1][1]->name" :desc="$event[1][1]->short_desc" :price="$event[1][1]->price" :imageLink="$event[1][1]->eventImages[0]->link" :alt="$event[1][1]->eventImages[0]->alt" :id="$event[1][1]->id"/></li>
                    <li class="glide2__slide"><x-cardHomePage :location="$event[1][2]->eventCity->name" :name="$event[1][2]->name" :desc="$event[1][2]->short_desc" :price="$event[1][2]->price" :imageLink="$event[1][2]->eventImages[0]->link" :alt="$event[1][2]->eventImages[0]->alt" :id="$event[1][2]->id"/></li>
                    <li class="glide2__slide"><x-cardHomePage :location="$event[1][3]->eventCity->name" :name="$event[1][3]->name" :desc="$event[1][3]->short_desc" :price="$event[1][3]->price" :imageLink="$event[1][3]->eventImages[0]->link" :alt="$event[1][3]->eventImages[0]->alt" :id="$event[1][3]->id"/></li>
                    <li class="glide2__slide"><x-cardHomePage :location="$event[1][4]->eventCity->name" :name="$event[1][4]->name" :desc="$event[1][4]->short_desc" :price="$event[1][4]->price" :imageLink="$event[1][4]->eventImages[0]->link" :alt="$event[1][4]->eventImages[0]->alt" :id="$event[1][4]->id"/></li>
                </ul>
            </div>
            <div class="lg:w-[500px]">
                <x-bannerHomePage :location="$event[3][1]->eventCity->name" :name="$event[3][1]->name" :desc="$event[3][1]->short_desc" :price="$event[3][1]->price" :imageLink="$event[3][1]->eventImages[0]->link_banner" :alt="$event[3][1]->eventImages[0]->alt" :id="$event[3][1]->id"/>
            </div>
        </div>
    </div>
</section>
<!-- finish section 2.1 -->
<!-- start section 2.2 (Карусель-2) -->
<section class="lg:mx-auto lg:container pb-16 flex flex-row">
    <div class="glide3 pl-4 pr-4">
        <div class="flex flex-row justify-between items-center">
            <div class="flex flex-row gap-4">
                <h3 class="text-left mb-4 font-semibold mx-0 text-base text-gray-900 md:leading-tight lg:text-xl xl:text-2xl">Экскурсии, фестивали, спектакли</h3>
            </div>
        </div>
        <div class="border-t mb-2"></div>
        <div class="flex flex-col lg:flex-row gap-4">
            <div data-glide-el="track" class="glide3__track lg:w-[1000px]">
                <ul class="glide3__slides">
                    <li class="glide3__slide"><x-cardHomePage :location="$event[2][0]->eventCity->name" :name="$event[2][0]->name" :desc="$event[2][0]->short_desc" :price="$event[2][0]->price" :imageLink="$event[2][0]->eventImages[0]->link" :alt="$event[2][0]->eventImages[0]->alt" :id="$event[2][0]->id"/></li>
                    <li class="glide3__slide"><x-cardHomePage :location="$event[2][1]->eventCity->name" :name="$event[2][1]->name" :desc="$event[2][1]->short_desc" :price="$event[2][1]->price" :imageLink="$event[2][1]->eventImages[0]->link" :alt="$event[2][1]->eventImages[0]->alt" :id="$event[2][1]->id"/></li>
                    <li class="glide3__slide"><x-cardHomePage :location="$event[2][2]->eventCity->name" :name="$event[2][2]->name" :desc="$event[2][2]->short_desc" :price="$event[2][2]->price" :imageLink="$event[2][2]->eventImages[0]->link" :alt="$event[2][2]->eventImages[0]->alt" :id="$event[2][2]->id"/></li>
                    <li class="glide3__slide"><x-cardHomePage :location="$event[2][3]->eventCity->name" :name="$event[2][3]->name" :desc="$event[2][3]->short_desc" :price="$event[2][3]->price" :imageLink="$event[2][3]->eventImages[0]->link" :alt="$event[2][3]->eventImages[0]->alt" :id="$event[2][3]->id"/></li>
                    <li class="glide3__slide"><x-cardHomePage :location="$event[2][4]->eventCity->name" :name="$event[2][4]->name" :desc="$event[2][4]->short_desc" :price="$event[2][4]->price" :imageLink="$event[2][4]->eventImages[0]->link" :alt="$event[2][4]->eventImages[0]->alt" :id="$event[2][4]->id"/></li>
                </ul>
            </div>
            <div class="lg:w-[500px]">
                <x-bannerHomePage :location="$event[3][2]->eventCity->name" :name="$event[3][2]->name" :desc="$event[3][2]->short_desc" :price="$event[3][2]->price" :imageLink="$event[3][2]->eventImages[0]->link_banner" :alt="$event[3][2]->eventImages[0]->alt" :id="$event[3][2]->id"/>
            </div>
        </div>
    </div>
</section>
<!-- finish section 2.2 -->
<!-- start section 2.5 -->
<section class="lg:mx-auto lg:container">
    <div class="pl-4 pr-4 mt-6 space-y-3">
        <h3 class="font-bold text-base text-gray-700 md:text-lg">Фрагмент театральной аудиоэкскурсии:</h3>
        <div class="flex flex-row gap-4 items-center">
            <img src="{{ URL::asset('theme/icons/iconPhones.webp') }}" class="h-10" alt="аудиоспекталь, фрагмент">
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
                <button type="button" class="flex items-center justify-between w-full pl-5 pr-5 pt-2 pb-2 font-medium text-left text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 hover:bg-gray-100 gap-3" data-accordion-target="#accordion-open-body-1" aria-expanded="false" aria-controls="accordion-open-body-1">
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
                <button type="button" class="flex items-center justify-between w-full pl-5 pr-5 pt-2 pb-2 font-medium text-left text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 hover:bg-gray-100 gap-3" data-accordion-target="#accordion-open-body-2" aria-expanded="false" aria-controls="accordion-open-body-2">
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
                <button type="button" class="flex items-center justify-between w-full pl-5 pr-5 pt-2 pb-2 font-medium text-left text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 hover:bg-gray-100 gap-3" data-accordion-target="#accordion-open-body-3" aria-expanded="false" aria-controls="accordion-open-body-3">
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
                <button type="button" class="flex items-center justify-between w-full pl-5 pr-5 pt-2 pb-2 font-medium text-left text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 hover:bg-gray-100 gap-3" data-accordion-target="#accordion-open-body-4" aria-expanded="false" aria-controls="accordion-open-body-4">
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
                <button type="button" class="flex items-center justify-between w-full pl-5 pr-5 pt-2 pb-2 font-medium text-left text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 hover:bg-gray-100 gap-3" data-accordion-target="#accordion-open-body-5" aria-expanded="false" aria-controls="accordion-open-body-5">
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
                <button type="button" class="flex items-center justify-between w-full pl-5 pr-5 pt-2 pb-2 font-medium text-left text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 hover:bg-gray-100 gap-3" data-accordion-target="#accordion-open-body-6" aria-expanded="false" aria-controls="accordion-open-body-6">
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
                <button type="button" class="flex items-center justify-between w-full pl-5 pr-5 pt-2 pb-2 font-medium text-left text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 hover:bg-gray-100 gap-3" data-accordion-target="#accordion-open-body-7" aria-expanded="false" aria-controls="accordion-open-body-7">
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
                <button type="button" class="flex items-center justify-between w-full pl-5 pr-5 pt-2 pb-2 font-medium text-left text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 hover:bg-gray-100 gap-3" data-accordion-target="#accordion-open-body-8" aria-expanded="false" aria-controls="accordion-open-body-8">
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
                <button type="button" class="flex items-center justify-between w-full pl-5 pr-5 pt-2 pb-2 font-medium text-left text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 hover:bg-gray-100 gap-3" data-accordion-target="#accordion-open-body-9" aria-expanded="false" aria-controls="accordion-open-body-9">
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
                    <img src="{{ URL::asset('icons/iconAudio.webp') }}" class="w-10 h-10" alt="Спектакли и прогулки">
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
                <img src="{{ URL::asset('webp/img1.webp') }}" class="object-cover w-full h-full mb-6 rounded shadow-lg lg:h-48 xl:h-56 lg:w-48 xl:w-56" alt="прогулки и спектакли">
                <img src="{{ URL::asset('webp/img3.webp') }}" class="object-cover w-full h-full rounded shadow-lg lg:h-32 xl:h-40 lg:w-32 xl:w-40" alt="экскурсии в наушниках">
            </div>
            <div class="pl-3">
                <img src="{{ URL::asset('webp/img2.webp') }}" class="object-cover w-full h-full rounded shadow-lg lg:h-64 xl:h-80 lg:w-64 xl:w-80" alt="спектакли в наушниках">
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
    <img class="block absolute top-0 left-0 bottom-0 w-2/5 object-cover h-full" src="{{ URL::asset('webp/img5.webp') }}" alt="интерактивные прогулки">
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
        autoplay: 6000,
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
        perView: 5,
        gap: 10,
        autoplay: 6000,
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
    new Glide('.glide3',
    {
        type: 'carousel',
        startAt: 0,
        perView: 5,
        gap: 10,
        autoplay: 8000,
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
