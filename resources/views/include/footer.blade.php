<footer class="box-border pt-5 leading-7 text-gray-900 bg-white border-0 border-gray-200 border-solid pb-7">
    <div class="box-border px-4 mx-auto border-solid md:px-6 lg:px-8 max-w-7xl">
        <div class="relative flex flex-col items-start justify-between leading-7 text-gray-900 border-0 border-gray-200 md:flex-row md:items-center">
            <a href="#_" class="left-0 flex items-center justify-center order-first w-full mb-4 font-medium text-gray-900 md:justify-start md:absolute md:w-64 lg:order-none lg:w-auto title-font lg:items-center lg:justify-center md:mb-0">
                <img src="{{ URL::asset('/logo.svg') }}" class="h-12" alt="naushah.ru | логотип">
            </a>
            <ul class="box-border flex mx-auto my-6 space-x-6">
                <li class="relative mt-2 leading-7 text-left text-gray-900 border-0 border-gray-200 md:border-b-0 md:mt-0">
                    <a href="#_" class="box-border items-center block w-full px-4 text-base font-normal leading-normal text-gray-900 no-underline border-solid cursor-pointer hover:text-blue-600 focus-within:text-blue-700 sm:px-0 sm:text-left">Мероприятия</a>
                </li>
                <li class="relative mt-2 leading-7 text-left text-gray-900 border-0 border-gray-200 md:border-b-0 md:mt-0">
                    <a href="#_" class="box-border items-center block w-full px-4 text-base font-normal leading-normal text-gray-900 no-underline border-solid cursor-pointer hover:text-blue-600 focus-within:text-blue-700 sm:px-0 sm:text-left">Байки</a>
                </li>
                <li class="hidden sm:block relative mt-2 leading-7 text-left text-gray-900 border-0 border-gray-200 md:border-b-0 md:mt-0">
                    <a href="{{ route('tourGuides.index') }}" class="box-border items-center block w-full px-4 text-base font-normal leading-normal text-gray-900 no-underline border-solid cursor-pointer hover:text-blue-600 focus-within:text-blue-700 sm:px-0 sm:text-left">Экскурсоводам</a>
                </li>
                <li class="relative mt-2 leading-7 text-left text-gray-900 border-0 border-gray-200 md:border-b-0 md:mt-0">
                    <a href="#_" class="box-border items-center block w-full px-4 text-base font-normal leading-normal text-gray-900 no-underline border-solid cursor-pointer hover:text-blue-600 focus-within:text-blue-700 sm:px-0 sm:text-left">Контакты</a>
                </li>
            </ul>
            <div class="box-border right-0 flex justify-center w-full mt-4 space-x-3 border-solid md:w-auto md:justify-end md:absolute md:mt-0">
                <a href="https://vk.com/na_ushah" class="inline-flex items-center leading-7 text-gray-900 no-underline border-0 border-gray-200 cursor-pointer hover:text-blue-700 focus-within:text-blue-700">
                    <img src="{{ URL::asset('theme/icons/iconVK.webp') }}" class="h-8" alt="naushah.ru | вконтакте">
                </a>
                <a href="https://t.me/na_ushah" class="inline-flex items-center leading-7 text-gray-900 no-underline border-0 border-gray-200 cursor-pointer hover:text-blue-700 focus-within:text-blue-700">
                    <img src="{{ URL::asset('theme/icons/iconTelegram.webp') }}" class="h-8" alt="naushah.ru | вконтакте">
                </a>
            </div>
        </div>
        <div class="pt-4 mt-4 leading-7 text-center text-gray-600 border-t border-gray-200 md:pt-5">
            <p class="box-border mt-0 text-sm border-0 border-solid">
                © 2025 НА УШАХ
            </p>
        </div>
    </div>
</footer>