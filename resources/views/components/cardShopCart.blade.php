<!-- component -->
<div class="rounded-xl group flex sm:space-x-6 bg-gray-50 bg-opacity-50 shadow-xl hover:rounded-2xl pb-4 sm:pb-0">
    <img src="{{ URL::asset($imageLink) }}" alt="" loading="lazy" class="hidden sm:block h-52 object-cover object-top rounded-lg transition duration-500 group-hover:rounded-xl">
    <div class="pl-2 pr-2 sm:pl-0">
        <div class="space-y-2">
            <div class="space-y-4">
                <h4 class="font-serif font-thin text-gray-900 text-xl sm:text-2xl ">{{ $name }}</h4>
                <p class="text-justify text-sm text-gray-800">{{ $desc }}</p>
            </div>
        </div>
    </div>
</div>
<!-- component -->