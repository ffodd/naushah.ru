@extends('layouts.main')

@section('seo')
    <meta name="description"
        content="Погрузитесь в мир аудиопрогулок и спектаклей в наушниках: ваша возможность насладиться культурными событиями где угодно. Исследуйте новые маршруты и позвольте знакомым произведениям вдохновлять вас на каждом шагу. Приятные голоса и качественный звук — всё, что нужно для полного погружения." />
    <meta name="robots" content="index, follow" />
    <meta name="document-state" content="dynamic" />
    <meta name="creator" content="Воронов Виталий Андреевич" />
@endsection

@push('style')
@endpush

@section('title')
{{$event->eventType->name}} | {{$event->name}}
@endsection

@section('header')
    @include('include.header')
@endsection

@section('content')
<!-- start section 1 -->
<section class="text-gray-600 overflow-hidden">
  <div class="mx-8 lg:container lg:mx-auto px-5 py-24">
    <div class="xl:w-4/5 mx-auto flex">
      <img alt="{{$event->eventType->name}} | {{$event->name}}" class="hidden md:block h-64 object-cover object-center rounded-lg" src="{{ URL::asset($event->eventImages[0]->link) }}">
      <div class="md:pl-10 lg:py-6 mt-6 md:mt-0">
        <div class="flex flex-row">
          <img alt="{{$event->eventType->name}} | {{$event->name}}" class="md:hidden h-32 object-cover object-center rounded-lg" src="{{ URL::asset($event->eventImages[0]->link) }}">
          <div class="ml-6 md:ml-0">
            <h2 class="uppercase text-xs sm:text-sm title-font text-gray-500 tracking-widest">{{$event->eventType->name}}</h2>
            <h1 class="text-gray-900 text-xl sm:text-2xl title-font font-medium mb-1">{{$event->name}}</h1>
            <div class="flex mb-4">
              <span class="flex items-center">
                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-black" viewBox="0 0 24 24">
                  <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                </svg>
                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-black" viewBox="0 0 24 24">
                  <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                </svg>
                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-black" viewBox="0 0 24 24">
                  <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                </svg>
                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-black" viewBox="0 0 24 24">
                  <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                </svg>
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-black" viewBox="0 0 24 24">
                  <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                </svg>
                <span class="text-gray-600 ml-3 text-sm">Отзывы: 0</span>
              </span>
              <span class="flex ml-3 pl-3 py-2 border-l-2 border-gray-200 space-x-2s">
                <a class="text-gray-500">
                  <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                  </svg>
                </a>
                <a class="text-gray-500">
                  <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                  </svg>
                </a>
                <a class="text-gray-500">
                  <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                  </svg>
                </a>
              </span>
            </div>
          </div>
        </div>
        <p class="mt-4 md:mt-0 leading-relaxed text-sm md:text-base text-justify">{{$event->short_desc}}</p>
        <div class="flex flex-col mt-6 pl-3 pb-2 mb-2 border-b-[1px] rounded-lg border-gray-400 bg-slate-50">
          <div class="flex gap-2 mt-3">
            <img alt="" class="h-8 border-[1px] rounded-lg border-gray-200" src="{{ URL::asset('/theme/icons/iconPayMir.webp') }}">
            <img alt="" class="h-8 rounded-lg" src="{{ URL::asset('/theme/icons/iconPayUnion.webp') }}">
          </div>
          <span class="text-sm text-black">Гарантия безопасного оформления заказа</span>
        </div>
        <div class="flex mt-6">
          <span class="w-1/4 font-medium text-2xl text-gray-900">{{$event->price}} ₽</span>
          <a href="{{ url('/shopcart/').'/'.$event->id}}" class="bg-gray-900 rounded-full hover:bg-gray-800 focus:ring-4 focus:ring-gray-200 text-white font-semibold w-full px-7 py-2 flex items-center justify-center gap-2 transition duration-200">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none" data-config-id="svg-322435-13">
              <path d="M21.6479 16H7.64795C7.38273 16 7.12838 15.8946 6.94084 15.7071C6.75331 15.5196 6.64795 15.2652 6.64795 15C6.64795 14.7348 6.75331 14.4804 6.94084 14.2929C7.12838 14.1054 7.38273 14 7.64795 14H18.0879C18.7566 14 19.4061 13.7767 19.9333 13.3654C20.4605 12.9542 20.8352 12.3786 20.9979 11.73L22.6479 5.24C22.6854 5.09241 22.6887 4.93821 22.6575 4.78917C22.6263 4.64013 22.5614 4.50018 22.4679 4.38C22.3707 4.25673 22.2458 4.1581 22.1033 4.09208C21.9609 4.02606 21.8049 3.99452 21.6479 4H7.40795C7.20164 3.41645 6.81988 2.911 6.31501 2.55294C5.81015 2.19488 5.20689 2.00174 4.58795 2H3.64795C3.38273 2 3.12838 2.10536 2.94084 2.29289C2.75331 2.48043 2.64795 2.73478 2.64795 3C2.64795 3.26522 2.75331 3.51957 2.94084 3.70711C3.12838 3.89464 3.38273 4 3.64795 4H4.58795C4.81638 3.99334 5.04021 4.06513 5.22215 4.20341C5.4041 4.34169 5.5332 4.53812 5.58795 4.76L5.64795 5.24L7.37795 12C6.5823 12.0358 5.83346 12.3862 5.29617 12.9741C4.75888 13.5621 4.47714 14.3394 4.51295 15.135C4.54875 15.9306 4.89916 16.6795 5.48709 17.2168C6.07501 17.7541 6.8523 18.0358 7.64795 18H7.82795C7.66348 18.4531 7.61064 18.9392 7.67388 19.4171C7.73712 19.895 7.9146 20.3506 8.19127 20.7454C8.46794 21.1401 8.83566 21.4624 9.2633 21.6849C9.69094 21.9074 10.1659 22.0235 10.6479 22.0235C11.13 22.0235 11.605 21.9074 12.0326 21.6849C12.4602 21.4624 12.828 21.1401 13.1046 20.7454C13.3813 20.3506 13.5588 19.895 13.622 19.4171C13.6853 18.9392 13.6324 18.4531 13.4679 18H15.8279C15.6635 18.4531 15.6106 18.9392 15.6739 19.4171C15.7371 19.895 15.9146 20.3506 16.1913 20.7454C16.4679 21.1401 16.8357 21.4624 17.2633 21.6849C17.6909 21.9074 18.1659 22.0235 18.6479 22.0235C19.13 22.0235 19.605 21.9074 20.0326 21.6849C20.4602 21.4624 20.828 21.1401 21.1046 20.7454C21.3813 20.3506 21.5588 19.895 21.622 19.4171C21.6853 18.9392 21.6324 18.4531 21.4679 18H21.6479C21.9132 18 22.1675 17.8946 22.3551 17.7071C22.5426 17.5196 22.6479 17.2652 22.6479 17C22.6479 16.7348 22.5426 16.4804 22.3551 16.2929C22.1675 16.1054 21.9132 16 21.6479 16ZM20.3679 6L19.0579 11.24C19.0032 11.4619 18.8741 11.6583 18.6922 11.7966C18.5102 11.9349 18.2864 12.0067 18.0579 12H9.42795L7.92795 6H20.3679ZM10.6479 20C10.4502 20 10.2568 19.9414 10.0924 19.8315C9.92793 19.7216 9.79976 19.5654 9.72407 19.3827C9.64838 19.2 9.62858 18.9989 9.66716 18.8049C9.70575 18.6109 9.80099 18.4327 9.94084 18.2929C10.0807 18.153 10.2589 18.0578 10.4529 18.0192C10.6468 17.9806 10.8479 18.0004 11.0306 18.0761C11.2134 18.1518 11.3695 18.28 11.4794 18.4444C11.5893 18.6089 11.6479 18.8022 11.6479 19C11.6479 19.2652 11.5426 19.5196 11.3551 19.7071C11.1675 19.8946 10.9132 20 10.6479 20ZM18.6479 20C18.4502 20 18.2568 19.9414 18.0924 19.8315C17.9279 19.7216 17.7998 19.5654 17.7241 19.3827C17.6484 19.2 17.6286 18.9989 17.6672 18.8049C17.7057 18.6109 17.801 18.4327 17.9408 18.2929C18.0807 18.153 18.2589 18.0578 18.4529 18.0192C18.6468 17.9806 18.8479 18.0004 19.0306 18.0761C19.2134 18.1518 19.3695 18.28 19.4794 18.4444C19.5893 18.6089 19.6479 18.8022 19.6479 19C19.6479 19.2652 19.5426 19.5196 19.3551 19.7071C19.1675 19.8946 18.9132 20 18.6479 20Z" fill="#F0FDF4"></path>
            </svg>
            <span>Купить</span>
          </a>
          <a href="" class="bg-white ml-4 border border-gray-200 rounded-full hover:bg-gray-50 focus:ring-4 focus:ring-gray-200 text-black text-sm font-semibold w-10 h-10 flex items-center justify-center transition duration-200">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" data-config-id="svg-322435-14">
              <path d="M20.1603 5.00004C19.1002 3.93725 17.6951 3.28858 16.1986 3.17121C14.7021 3.05384 13.213 3.47551 12.0003 4.36004C10.7279 3.41368 9.14427 2.98455 7.5682 3.15908C5.99212 3.33361 4.54072 4.09882 3.50625 5.30063C2.47178 6.50244 1.9311 8.05156 1.99308 9.63606C2.05506 11.2206 2.71509 12.7227 3.84028 13.84L10.0503 20.06C10.5703 20.5718 11.2707 20.8587 12.0003 20.8587C12.7299 20.8587 13.4303 20.5718 13.9503 20.06L20.1603 13.84C21.3279 12.6653 21.9832 11.0763 21.9832 9.42004C21.9832 7.76377 21.3279 6.17478 20.1603 5.00004ZM18.7503 12.46L12.5403 18.67C12.4696 18.7414 12.3855 18.798 12.2928 18.8367C12.2001 18.8753 12.1007 18.8953 12.0003 18.8953C11.8999 18.8953 11.8004 18.8753 11.7077 18.8367C11.615 18.798 11.5309 18.7414 11.4603 18.67L5.25028 12.43C4.46603 11.6284 4.02689 10.5515 4.02689 9.43004C4.02689 8.30858 4.46603 7.2317 5.25028 6.43004C6.04943 5.64103 7.12725 5.19861 8.25028 5.19861C9.3733 5.19861 10.4511 5.64103 11.2503 6.43004C11.3432 6.52377 11.4538 6.59817 11.5757 6.64893C11.6976 6.6997 11.8283 6.72584 11.9603 6.72584C12.0923 6.72584 12.223 6.6997 12.3449 6.64893C12.4667 6.59817 12.5773 6.52377 12.6703 6.43004C13.4694 5.64103 14.5472 5.19861 15.6703 5.19861C16.7933 5.19861 17.8711 5.64103 18.6703 6.43004C19.4653 7.22119 19.9189 8.29223 19.9338 9.41373C19.9488 10.5352 19.5239 11.618 18.7503 12.43V12.46Z" fill="#D62323"></path>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- finish section 1 -->
<!-- start section 2 -->
<section class="mx-8 lg:container lg:mx-auto">
  <div class="overflow-hidden xl:w-4/5 mx-auto rounded-xl border border-gray-100 bg-gray-50 p-1">
    <ul class="flex lg:flex-row flex-col items-center gap-2 text-sm font-medium">
      <li id="tab1" onclick="clickTab(1)" class="cursor-pointer w-full lg:flex-1 relative flex items-center justify-center gap-2 rounded-lg bg-white px-3 py-2 shadow hover:bg-white hover:text-gray-700">
        <p class="">Описание</p>
      </li>
      <li id="tab2" onclick="clickTab(2)" class="cursor-pointer w-full lg:flex-1 flex items-center justify-center gap-2 rounded-lg px-3 py-2 text-gray-500 bg-gray-100 hover:bg-white hover:text-gray-700 hover:shadow">
        <p href="#" class="">Политика отмены</p>
      </li>
      <li id="tab3"onclick="clickTab(3)" class="cursor-pointer w-full lg:flex-1 flex items-center justify-center gap-2 rounded-lg px-3 py-2 text-gray-500 bg-gray-100 hover:bg-white hover:text-gray-700 hover:shadow">
        <p href="#" class="">Отзывы<span class="rounded-full bg-gray-100 px-2 py-0.5 text-xs font-semibold text-gray-500"> 0 </span></p>
      </li>
      <li id="tab4" onclick="clickTab(4)" class="cursor-pointer w-full lg:flex-1 flex items-center justify-center gap-2 rounded-lg px-3 py-2 text-gray-500 bg-gray-100 hover:bg-white hover:text-gray-700 hover:shadow">
        <p href="#" class="">Вопросы</p>
      </li>
    </ul>
    <div id="tabContens1" class="flex flex-col">
      <div class="ml-6 mr-6 mt-7 mb-6 text-gray-600 text-justify items-center flex flex-col lg:flex-row gap-10">
        <p class="lg:w-3/4 leading-relaxed self-start">{{$event->desc}}</p>
        <div class="w-3/4 lg:w-1/4">
          <video controls class="rounded-xl">
            <source src="{{$event->url_preview}}" type="video/mp4">
          </video>
        </div>
      </div>
    </div>
    <div id="tabContens2" class="hidden flex-col">
      <div class="ml-6 mr-6 mt-7 mb-6 text-gray-600 text-justify">
      </div>
    </div>
    <div id="tabContens3" class="hidden flex-col">
      <div class="ml-6 mr-6 mt-7 mb-6 text-gray-600 text-justify">
      </div>
    </div>
    <div id="tabContens4" class="hidden flex-col">
      <div class="ml-6 mr-6 mt-7 mb-6 text-gray-600 text-justify">
      </div>
    </div>
  </div>
</section>
<!-- finish section 2 -->
@endsection

@section('footer')
    @include('include.footer')
@endsection

@push('scriptsFooter')
<!-- Скрипт для tabs -->
<script type="text/javascript">
  let gActiveTab = 1;
  function clickTab(clickTab) {
    const previousTab = document.getElementById('tab'+gActiveTab);
    const currentTab = document.getElementById('tab'+clickTab);
    
    previousTab.classList.toggle('relative');
    previousTab.classList.toggle('bg-white');
    previousTab.classList.toggle('shadow');
    previousTab.classList.toggle('text-gray-500');
    previousTab.classList.toggle('bg-gray-100');
    previousTab.classList.toggle('hover:shadow');

    currentTab.classList.toggle('relative');
    currentTab.classList.toggle('bg-white');
    currentTab.classList.toggle('shadow');
    currentTab.classList.toggle('text-gray-500');
    currentTab.classList.toggle('bg-gray-100');
    currentTab.classList.toggle('hover:shadow');

    const previousTabContent = document.getElementById('tabContens'+gActiveTab);
    const currentTabContent = document.getElementById('tabContens'+clickTab);

    previousTabContent.classList.toggle('hidden');
    currentTabContent.classList.toggle('hidden');

    gActiveTab = clickTab;
  }

</script>
@endpush('scriptsFooter')
