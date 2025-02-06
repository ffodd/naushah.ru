@extends('layouts.main')

@section('seo')
  <meta name="description" content="Административная панель"/>
  <meta name="robots" content="noindex, nofollow" />
  <meta name="creator" content="Воронов Виталий Андреевич" />
@endsection

@push('style')
@endpush

@push('scriptsHead')
@endpush('scriptsHead')

@section('title')
  Экскурсии | naushah.ru
@endsection

@section('header')
@endsection

@section('content')
<main class="flex flex-row">
    @include('include.aside')
    <section class="py-12 w-full">
        <div class="w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('eventsBack.update') }}">
                        @csrf
                        <input hidden type="text" value="{{$event->id}}" name="id">
                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Название экскурсии <span class="text-red-500">*</span></label>
                            <input type="text" value="{{$event->name}}" class="border-2 border-gray-300 p-2 w-full" name="name" placeholder="название" required>
                        </div>

                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Стоимость экскурсии <span class="text-red-500">*</span></label>
                            <input type="text" value="{{$event->price}}" class="border-2 border-gray-300 p-2 w-full" name="price" placeholder="название" required>
                        </div>

                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Продолжительность<span class="text-red-500">*</span></label>
                            <input type="text" value="{{$event->duration}}" class="border-2 border-gray-300 p-2 w-full" name="duration" placeholder="название" required>
                        </div>

                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Протяженность<span class="text-red-500">*</span></label>
                            <input type="text" value="{{$event->length}}" class="border-2 border-gray-300 p-2 w-full" name="length" placeholder="название" required>
                        </div>

                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Время доступности<span class="text-red-500">*</span></label>
                            <input type="text" value="{{$event->availability_time}}" class="border-2 border-gray-300 p-2 w-full" name="availability_time" placeholder="название" required>
                        </div>

                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Начало маршрута<span class="text-red-500">*</span></label>
                            <input type="text" value="{{$event->starting_point}}" class="border-2 border-gray-300 p-2 w-full" name="starting_point" placeholder="название" required>
                        </div>

                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Конец маршрута<span class="text-red-500">*</span></label>
                            <input type="text" value="{{$event->finish_point}}" class="border-2 border-gray-300 p-2 w-full" name="finish_point" placeholder="название" required>
                        </div>

                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Описание<span class="text-red-500">*</span></label>
                            <textarea name="content" class="border-2 border-gray-500">{{$event->desc}}</textarea>
                        </div>

                        <div class="flex p-1">
                            <button role="submit" class="p-3 bg-blue-500 text-white hover:bg-blue-400">Сохранить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@section('footer')
@endsection

@push('scriptsFooter')
<script src="https://cdn.ckeditor.com/4.22.0/full/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>
@endpush('scriptsFooter')