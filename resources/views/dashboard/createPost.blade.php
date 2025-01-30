@extends('layouts.main')

@section('seo')
    <meta name="robots" content="noindex, nofollow" />
    <meta name="creator" content="Воронов Виталий Андреевич" />
@endsection

@push('style')
@endpush

@push('scriptsHead')

@endpush('scriptsHead')

@section('title')
Создать пост
@endsection

@section('header')
@endsection

@section('content')
<section class="py-12">
    <div class="w-full mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <form method="POST" action="{{ route('posts.store') }}">
                    @csrf
                    <div class="mb-4">
                        <label class="text-xl text-gray-600">Название статьи <span class="text-red-500">*</span></label></br>
                        <input type="text" class="border-2 border-gray-300 p-2 w-full" name="name" placeholder="название" required>
                    </div>

                    <div class="mb-4">
                        <label class="text-xl text-gray-600">Описание<span class="text-red-500">*</span></label></br>
                        <input type="text" class="border-2 border-gray-300 p-2 w-full" name="description" placeholder="описание" required>
                    </div>

                    <div class="mb-4">
                        <label class="text-xl text-gray-600">тег title (SEO)<span class="text-red-500">*</span></label></br>
                        <input type="text" class="border-2 border-gray-300 p-2 w-full" name="seoTitle" placeholder="title" required>
                    </div>

                    <div class="mb-4">
                        <label class="text-xl text-gray-600">тег desctiption (SEO)<span class="text-red-500">*</span></label></br>
                        <input type="text" class="border-2 border-gray-300 p-2 w-full" name="seoDescription" placeholder="desctiption" required>
                    </div>

                    <div class="mb-8">
                        <label class="text-xl text-gray-600">Статья <span class="text-red-500">*</span></label></br>
                        <x-wysiwyg-ckeditor/>
                    </div>

                    <div class="flex p-1">
                        <button role="submit" class="p-3 bg-blue-500 text-white hover:bg-blue-400">Опубликовать</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

@section('footer')
@endsection

@push('scriptsFooter')
@endpush('scriptsFooter')
