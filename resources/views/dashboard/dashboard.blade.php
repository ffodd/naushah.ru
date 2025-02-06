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
  Административная панель | naushah.ru
@endsection

@section('header')
@endsection

@section('content')
  @include('include.aside')
@endsection

@section('footer')
@endsection

@push('scriptsFooter')
@endpush('scriptsFooter')
