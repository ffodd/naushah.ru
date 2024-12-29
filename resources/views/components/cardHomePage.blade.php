<!-- component -->
<div class="">
    <a href="{{ url('/event-info/').'/'.$id}}" class="flex flex-col text-gray-700 bg-white shadow-md bg-clip-border rounded-xl">
        <div class="mx-4 mt-4 overflow-hidden text-gray-700 bg-white bg-clip-border rounded-xl">
            <img src="{{ URL::asset($imageLink) }}" alt="" class="object-cover h-full" />
        </div>
        <div class="pl-6 pr-6 mt-3">
            <p class="uppercase block font-sans text-sm antialiased font-medium leading-relaxed text-gray-500">
                    Санкт-Петербург
            </p>
            <div class="flex items-center justify-between mb-2">
                <p class="block font-sans text-sm antialiased font-medium leading-relaxed text-gray-900">
                    {{ $name }}
                </p>
                <p class="block font-sans text-base antialiased font-medium leading-relaxed text-gray-900">
                    {{ $price }} ₽
                </p>
            </div>
        </div>
    </a>
</div>
<!-- component -->