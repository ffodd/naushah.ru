<!-- component -->
<div class="relative h-full flex flex-col justify-between rounded-2xl border-[1px] bg-clip-border text-gray-700 bg-gray-100">
  <div class="flex flex-col">
    <div class="relative mx-4 -mt-6 h-auto overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40">
      <img src="{{ URL::asset($imageLink) }}" alt="img-blur-shadow" layout="fill"/>
    </div>
    <div class="pl-6 pr-6 pt-6">
      <h5 class="mb-2 font-serif text-base text-gray-900">
        {{$name}}
      </h5>
      <div class="relative h-32 overflow-hidden">
        <p class="font-sans text-sm text-justify font-light leading-relaxed text-inherit antialiased">
          {{$description}}
        </p>
        <div class="absolute inset-x-0 bottom-0 h-24 bg-gradient-to-t from-gray-50"></div>
      </div>
    </div>
  </div>
  <div class="pl-6 pb-6 pt-0">
    <a href="{{ url('/posts/').'/'.$id}}" class="inline-flex items-center ml-1 text-xs text-gray-500 underline">
      <span>Подробнее</span>
      <svg class="w-3 h-3 ml-1 transform -rotate-45" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
    </a>
  </div>
</div>
<!-- component -->