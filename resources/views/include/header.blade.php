<div class="pt-4 bg-gray-50">
</div>
<header class="bg-gray-50 sticky top-0 pt-6 lg:pt-4 pb-2 z-40 ">
    <nav class="container mx-auto flex flex-row justify-between pl-6 pr-6">
        <a class="relative z-10" href="{{ route('home.index') }}" aria-label="logo">
            <img src="{{ URL::asset('/logo.svg') }}" class="h-12" alt="naushah.ru | логотип">
        </a>
        <div class="hidden lg:flex lg:flex-row items-center">
            <div class="flex flex-row">
                <div class="flex items-center space-x-1 text-gray-800 cursor-pointer ml-16 hover:text-gray-500 focus:outline-none">
                    <span>Города</span>
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <a class="ml-10 font-normal text-gray-900 hover:text-gray-500" href="#_">Мероприятия</a>
                <a class="ml-10 font-normal text-gray-900 hover:text-gray-500" href="#_">Байки</a>
                <a class="ml-10 font-normal text-gray-900 hover:text-gray-500" href="{{ route('tourGuides.index') }}">Экскурсоводам</a>
                <a class="ml-10 font-normal text-gray-900 hover:text-gray-500" href="#_">FAQ</a>
                <a class="ml-10 font-normal text-gray-900 hover:text-gray-500" href="#_">Контакты</a>
            </div>
        </div>
         <div class="items-center">
            <a href="#_" class="hidden px-8 py-3 text-sm font-semibold text-center text-gray-500 transition duration-100 bg-gray-100 rounded-md outline-none lg:inline-block hover:bg-gray-200 hover:text-gray-600 md:text-base">Корзина</a>
        </div>
        <!-- Mobile Button -->
        <div class="flex items-center justify-center h-full text-red lg:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-12">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0ZM3.75 12h.007v.008H3.75V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm-.375 5.25h.007v.008H3.75v-.008Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
            </svg>
        </div>
    </nav>
</header>