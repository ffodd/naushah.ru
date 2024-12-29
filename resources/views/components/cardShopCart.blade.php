<!-- component -->
<div class="p-1 rounded-xl group flex space-x-6 bg-gray-50 bg-opacity-50 shadow-xl hover:rounded-2xl pb-4 sm:pb-0">
    <img src="{{ URL::asset($imageLink) }}" alt="" loading="lazy" class="hidden sm:block h-52 object-cover object-top rounded-lg transition duration-500 group-hover:rounded-xl">
    <div class="">
        <div class="space-y-2">
            <div class="space-y-4">
                <h4 class="text-xl sm:text-2xl font-semibold text-cyan-900">{{ $name }}</h4>
                <p class="text-justify text-sm md:text-base text-gray-600 mr-4">{{ $desc }}</p>
            </div>
        </div>
    </div>
</div>
<!-- component -->