<!-- component -->
<div class="mb-1">
    <a href="{{ url('/event-info/').'/'.$id}}" class="flex flex-col text-gray-700 bg-white shadow-md bg-clip-border border-[1px] rounded-xl">
        <div class="mx-4 mt-4 overflow-hidden text-gray-700 bg-white bg-clip-border rounded-xl">
            <img src="{{ URL::asset($imageLink) }}" alt="{{$alt}}" class="object-cover"/>
        </div>
        <div class="pl-2 pr-2 mt-1">
            <p class="block font-sans text-xs antialiased font-medium leading-relaxed text-gray-500">
                {{ $location }}
            </p>
            <p class="block font-sans text-[11px] md:text-xs antialiased font-medium leading-relaxed text-gray-900">
                {{ $name }}
            </p>
            <div class="flex">
                <p class="block font-sans text-sm antialiased font-medium leading-relaxed text-gray-900">
                    {{ $price }} ₽
                </p>
            </div>
        </div>
    </a>
</div>
<!-- component -->