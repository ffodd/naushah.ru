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
<link rel="stylesheet" href="./source/glide.core.min.css">
<link rel="stylesheet" href="./source/glide.theme.min.css">
@endpush

@section('title', 'На ушах по Санкт-Петербургу - Спекталки-прогулки в наушниках!')

@section('header')
    @include('include.header')
@endsection

@section('content')
<!-- start section 1 -->
<section class="relative flex flex-col-reverse w-full px-6 py-16 bg-gray-50 lg:pt-0 lg:flex-col lg:pb-0">
    <div class="inset-y-0 top-0 right-0 z-0 w-full max-w-xl px-4 mx-auto md:px-0 lg:pr-0 lg:mb-0 lg:mx-0 lg:w-7/12 lg:max-w-full lg:absolute xl:px-0">
        <svg class="absolute left-0 hidden h-full text-gray-50 transform -translate-x-1/2 lg:block" viewBox="0 0 100 100" fill="currentColor" preserveAspectRatio="none slice"><path d="M50 0H80L50 120H0L50 0Z"></path></svg>
        <img class="object-cover w-full h-56 rounded shadow-lg lg:rounded-none lg:shadow-none md:h-96 lg:h-full" src="{{ URL::asset('webp/img4.webp') }}" alt="На ушах по Санкт-Петербургу">
    </div>
    <div class="relative flex flex-col items-start w-full max-w-xl px-4 mx-auto md:px-0 lg:px-8 lg:max-w-screen-xl">
        <div class="mb-16 lg:my-40 lg:max-w-lg lg:pr-5">
            <h1 class="text-sm font-semibold tracking-wider text-[#fc1b7c] uppercase rounded-full mb-7">
                Спектакли - экскурсии
            </h1>
            <h2 class="mb-5 font-sans text-3xl font-bold tracking-tight text-gray-700 sm:text-5xl sm:leading-none">
                На ушах<br class="hidden md:block">
                <span class="inline-block text-[#0980f3]">по Санкт-Петербургу</span>
            </h2>
            <p class="mb-5 text-base text-gray-700 sm:pr-10 md:text-lg">
                Увлекательные маршруты и превосходный звук позволят вам погрузиться в новое измерение культуры и досуга.
            </p>
            <div class="flex flex-col items-center pt-2 sm:flex-row sm:pt-4">
                <a href="/" class="inline-flex items-center justify-center w-full h-12 px-6 mb-4 font-medium tracking-wide text-white transition duration-200 bg-[#0980f3] rounded shadow-md sm:w-auto sm:mr-4 sm:mb-0 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none">
                    Без гида
                </a>
                <a href="/" class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 bg-gray-700 rounded shadow-md sm:w-auto hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none">
                    С гидом
                </a>
            </div>
        </div>
    </div>
</section>
<!-- finish section 1 -->
<!-- start section 2 -->
<section class="relative top-0 left-0 z-50 mx-auto opacity-25 hidden">
    <div class="relative opacity-50">
        <div class="absolute overflow-hidden left-0 w-full h-56 -mt-48 -ml-48 transform -rotate-45 bg-purple-200 rounded-l-lg sm:-ml-56"></div>
        <div class="absolute overflow-hidden w-full h-64 min-w-full -mt-2 -ml-6 transform -rotate-45 bg-indigo-200 rounded-l-lg sm:-ml-32 sm:mt-20"></div>
        <div class="absolute overflow-hidden left-0 w-full h-64 mt-24 ml-64 transform -rotate-45 bg-blue-200 rounded-lg rounded-l-lg"></div>
    </div>
</section>
<!-- finish section 2 -->
<!-- start section 3 -->
<section class="pt-16 pb-16 mx-auto container lg:py-20 px-6"> 
    <div class="grid gap-5 lg:grid-cols-2">
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
<!-- finish section 3 -->
<!-- start section 4 -->
<section class="mt-64 lg:mt-0 relative pb-8 overflow-y-hidden bg-[#f7f7f7]">
    <div class="w-2/5 absolute left-0 top-0 z-10 h-full">
            <div class="w-1/2 absolute right-0 top-0 h-full bg-gradient-to-l from-[#f7f7f7]"></div>
        <div class="w-full h-full absolute bg-[#f7f7f7] opacity-80 lg:hidden block inset-0"></div>
    </div>
    <img class="block absolute top-0 left-0 bottom-0 w-2/5 object-cover h-full" src="{{ URL::asset('webp/img5.webp') }}" alt="naushah.ru | мир интерактивных прогулок">
    <div class="relative mx-auto container px-12 z-20">
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
<!-- finish section 4 -->
<!-- start section 5 -->
<section class="mx-auto container px-6 py-16 flex flex-row">
    <div class="glide md:w-4/6 pl-4 pr-4">
        <div class="flex flex-row justify-between items-center">
            <h3 class="text-left mb-4 font-semibold mx-auto lg:mx-0 text-xl text-gray-900 md:leading-tight lg:text-2xl xl:text-4xl">Экскурсии-спектакли в наушниках</h3>
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
        <div class="border-t py-6"></div>
        <div data-glide-el="track" class="glide__track">
            <ul class="glide__slides">
                <li class="glide__slide"><x-cardHomePage :name="$event[0]->name" :desc="$event[0]->short_desc" :price="$event[0]->price" :imageLink="$event[0]->eventImages[0]->link" :alt="$event[0]->eventImages[0]->alt" :id="$event[0]->id"/></li>
                <li class="glide__slide"><x-cardHomePage :name="$event[1]->name" :desc="$event[1]->short_desc" :price="$event[1]->price" :imageLink="$event[1]->eventImages[0]->link" :alt="$event[1]->eventImages[0]->alt" :id="$event[1]->id"/></li>
                <li class="glide__slide"><x-cardHomePage :name="$event[2]->name" :desc="$event[2]->short_desc" :price="$event[2]->price" :imageLink="$event[2]->eventImages[0]->link" :alt="$event[2]->eventImages[0]->alt" :id="$event[2]->id"/></li>
                <li class="glide__slide"><x-cardHomePage :name="$event[3]->name" :desc="$event[3]->short_desc" :price="$event[3]->price" :imageLink="$event[3]->eventImages[0]->link" :alt="$event[3]->eventImages[0]->alt" :id="$event[3]->id"/></li>
                <li class="glide__slide"><x-cardHomePage :name="$event[4]->name" :desc="$event[4]->short_desc" :price="$event[4]->price" :imageLink="$event[4]->eventImages[0]->link" :alt="$event[4]->eventImages[0]->alt" :id="$event[4]->id"/></li>
            </ul>
        </div>
    </div>
    <div class="md:w-2/6 hidden md:block">
        <div class="relative max-w-xs mx-auto">                    
            <div class="relative left-4">
                <img class="w-full h-[300px] object-center object-cover relative rounded-tr-[40px] rounded-bl-[40px]" src="{{ URL::asset('webp/img6.webp') }}" alt="">
            </div>
        </div>
    </div>
</section>
<!-- finish section 5 -->
<!-- start section 6 -->
<section class="py-16 bg-white md:py-20 lg:py-24">
    <div class="max-w-5xl px-12 mx-auto xl:px-0">

        <h2 class="font-semibold text-xl text-gray-900 md:leading-tight sm:text-4xl">Вопросы и ответы</h2>
        <p class="mt-4 text-xl font-thin text-gray-700 lg:text-2xl">Путешествуйте с удовольствием и фантазией!</p>

        <div class="relative mt-12">

            <!-- question 1 -->
            <div class="relative overflow-hidden border-b border-gray-100 select-none">
                <h4 id="question1" class="flex items-center justify-between px-2 text-lg font-medium text-gray-700 cursor-pointer py-2 hover:text-gray-900">
                    <span>Где начинаются и заканчиваются прогулки?</span>
                    <svg class="w-6 h-6 mr-2 transition-all duration-200 ease-out transform rotate-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </h4>
                <p id="showHideQuestion1" class="hidden px-2 pt-0 -mt-2 text-gray-400 sm:text-lg py-7">Каждый спектакль по своему. Но чаще всего наши спектакли-прогулки начинаются не очень далеко от метро, и заканчиваются там, где всегда есть маршруты общественного транспорта.</p>
            </div>

            <!-- Question 2 -->
            <div class="relative overflow-hidden border-b border-gray-100 select-none">
                <h4 id="question2" class="flex items-center justify-between px-2 text-lg font-medium text-gray-700 cursor-pointer py-2 hover:text-gray-900">
                    <span>В течение скольких дней после покупки мне доступны карта маршрута и спектакль?</span>
                    <svg class="w-6 h-6 mr-2 transition-all duration-200 ease-out transform rotate-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </h4>
                <p id="showHideQuestion2" class="hidden px-2 pt-0 -mt-2 text-gray-400 sm:text-lg py-7">В течении четырех дней.</p>
            </div>

            <!-- Question 3 -->
            <div class="relative overflow-hidden border-b border-gray-100 select-none">
                <h4 id="question3" class="flex items-center justify-between px-2 text-lg font-medium text-gray-700 cursor-pointer py-2 hover:text-gray-900">
                    <span>Сколько продлится прогулка?</span>
                    <svg class="w-6 h-6 mr-2 transition-all duration-200 ease-out transform rotate-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </h4>
                <p id="showHideQuestion3" class="hidden px-2 pt-0 -mt-2 text-gray-400 sm:text-lg py-7" ve="transition-all ease-in duration-300">Обычно два – два с половиной часа. Но вы всегда можете остановить запись. Отдохнуть. Перекусить. Подумать. А потом продолжить.</p>
            </div>

            <!-- Question 4 -->
            <div class="relative overflow-hidden border-b border-gray-100 select-none">
                <h4 id="question4" class="flex items-center justify-between px-2 text-lg font-medium text-gray-700 cursor-pointer py-2 hover:text-gray-900">
                    <span>А если пойдет дождь? Ветер? Град?</span>
                    <svg class="w-6 h-6 mr-2 transition-all duration-200 ease-out transform rotate-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </h4>
                <p id="showHideQuestion4" class="hidden px-2 pt-0 -mt-2 text-gray-400 sm:text-lg py-7">Что значит если? Это же Питер (детка)! Ветер? Град? А в чем проблема?</p>
            </div>

            <!-- Question 5 -->
            <div class="relative overflow-hidden border-b border-gray-100 select-none">
                <h4 id="question5" class="flex items-center justify-between px-2 text-lg font-medium text-gray-700 cursor-pointer py-2 hover:text-gray-900">
                    <span>Как я могу отменить покупку видеогида?</span>
                    <svg class="w-6 h-6 mr-2 transition-all duration-200 ease-out transform rotate-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </h4>
                <p id="showHideQuestion5" class="hidden px-2 pt-0 -mt-2 text-gray-400 sm:text-lg py-7">Вот тут проблема. Отменить купленный аудиоспектакль можно только по очень уважительной причине. И на сколько она уважительная , будем решать мы. Ну а как по другому? Ждем ваших предложений.</p>
            </div>

            <!-- Question 6 -->
            <div class="relative overflow-hidden border-b border-gray-100 select-none">
                <h4 id="question6" class="flex items-center justify-between px-2 text-lg font-medium text-gray-700 cursor-pointer py-2 hover:text-gray-900">
                    <span>В экскурсии могут участвовать дети?</span>
                    <svg class="w-6 h-6 mr-2 transition-all duration-200 ease-out transform rotate-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </h4>
                <p id="showHideQuestion6" class="hidden px-2 pt-0 -mt-2 text-gray-400 sm:text-lg py-7">Конечно. На каждом спектакле стоит возрастная маркировка!</p>
            </div>

            <!-- Question 7 -->
            <div class="relative overflow-hidden border-b border-gray-100 select-none">
                <h4 id="question7" class="flex items-center justify-between px-2 text-lg font-medium text-gray-700 cursor-pointer py-2 hover:text-gray-900">
                    <span>Мы можем пройти экскурсию группой?</span>
                    <svg class="w-6 h-6 mr-2 transition-all duration-200 ease-out transform rotate-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </h4>
                <p id="showHideQuestion7" class="hidden px-2 pt-0 -mt-2 text-gray-400 sm:text-lg py-7">А то! Обязательно идите группой друзей, но каждому придется купить свой билет.</p>
            </div>

            <!-- Question 8 -->
            <div  class="relative overflow-hidden border-b border-gray-100 select-none">
                <h4 id="question8" class="flex items-center justify-between px-2 text-lg font-medium text-gray-700 cursor-pointer py-2 hover:text-gray-900">
                    <span>Как насчет физической нагрузки? Придется бегать? Могут ли участвовать пожилые люди и беременные женщины?</span>
                    <svg class="w-6 h-6 mr-2 transition-all duration-200 ease-out transform rotate-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </h4>
                <p id="showHideQuestion8" class="hidden px-2 pt-0 -mt-2 text-gray-400 sm:text-lg py-7">Бегать не придется. Это точно. Весь маршрут вы пройдете легким прогулочным шагом с небольшими остановками.</p>
            </div>

            <!-- Question 9 -->
            <div class="relative overflow-hidden border-b border-gray-100 select-none">
                <h4 id="question9" class="flex items-center justify-between px-2 text-lg font-medium text-gray-700 cursor-pointer py-2 hover:text-gray-900">
                    <span>Можно купить доступ к спектаклю дешевле?</span>
                    <svg class="w-6 h-6 mr-2 transition-all duration-200 ease-out transform rotate-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </h4>
                <p id="showHideQuestion9" class="hidden px-2 pt-0 -mt-2 text-gray-400 sm:text-lg py-7">Можно. Мы продумываем систему скидок и акций.</p>
            </div>

        </div>

    </div>
</section>
<!-- finish section 6 -->
 
@endsection

@section('footer')
    @include('include.footer')
@endsection

@push('scriptsFooter')
<!-- Скрипт для "Вопросы и ответы" -->
<script type="text/javascript">
    //question1
    const clickQuestion1 = (event) => {
        const elem = document.getElementById('showHideQuestion1');
        elem.classList.toggle('hidden');
    };
    const question1 = document.getElementById('question1');
    question1.addEventListener('click', clickQuestion1);
    //question2
    const clickQuestion2 = (event) => {
        const elem = document.getElementById('showHideQuestion2');
        elem.classList.toggle('hidden');
    };
    const question2 = document.getElementById('question2');
    question2.addEventListener('click', clickQuestion2);
    //question3
    const clickQuestion3 = (event) => {
        const elem = document.getElementById('showHideQuestion3');
        elem.classList.toggle('hidden');
    };
    const question3 = document.getElementById('question3');
    question3.addEventListener('click', clickQuestion3);
    //question4
    const clickQuestion4 = (event) => {
        const elem = document.getElementById('showHideQuestion4');
        elem.classList.toggle('hidden');
    };
    const question4 = document.getElementById('question4');
    question4.addEventListener('click', clickQuestion4);
    //question5
    const clickQuestion5 = (event) => {
        const elem = document.getElementById('showHideQuestion5');
        elem.classList.toggle('hidden');
    };
    const question5 = document.getElementById('question5');
    question5.addEventListener('click', clickQuestion5);
    //question6
    const clickQuestion6 = (event) => {
        const elem = document.getElementById('showHideQuestion6');
        elem.classList.toggle('hidden');
    };
    const question6 = document.getElementById('question6');
    question6.addEventListener('click', clickQuestion6);
    //question7
    const clickQuestion7 = (event) => {
        const elem = document.getElementById('showHideQuestion7');
        elem.classList.toggle('hidden');
    };
    const question7 = document.getElementById('question7');
    question7.addEventListener('click', clickQuestion7);
    //question8
    const clickQuestion8 = (event) => {
        const elem = document.getElementById('showHideQuestion8');
        elem.classList.toggle('hidden');
    };
    const question8 = document.getElementById('question8');
    question8.addEventListener('click', clickQuestion8);
    //question9
    const clickQuestion9 = (event) => {
        const elem = document.getElementById('showHideQuestion9');
        elem.classList.toggle('hidden');
    };
    const question9 = document.getElementById('question9');
    question9.addEventListener('click', clickQuestion9);
</script>
<!-- Скрипт для "Экскрусии-спекталки в наушниках" -->
<script src="./source/glide.min.js"></script>
<script>
    new Glide('.glide',
    {
        type: 'carousel',
        startAt: 0,
        perView: 3,
        gap: 10,
        autoplay: 5000,
        animationDuration: 1600,
        breakpoints: {
            1280: {
                perView: 2
            },
            600: {
                perView: 1
            }
        } 
    }).mount()
</script>
@endpush('scriptsFooter')
