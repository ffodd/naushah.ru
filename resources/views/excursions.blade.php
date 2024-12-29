@extends('layouts.main')

@section('seo')
    <link rel="canonical" href="https://naushah.ru"/>
    <meta name="description"
        content="Погрузитесь в мир аудиопрогулок и спектаклей в наушниках: ваша возможность насладиться культурными событиями где угодно. Исследуйте новые маршруты и позвольте знакомым произведениям вдохновлять вас на каждом шагу. Приятные голоса и качественный звук — всё, что нужно для полного погружения." />
    <meta name="robots" content="index, follow" />
    <meta name="document-state" content="dynamic" />
    <meta name="creator" content="Воронов Виталий Андреевич" />
@endsection

@push('style')
@endpush

@section('title', 'На ушах по Санкт-Петербургу - Спекталки-прогулки в наушниках!')

@section('header')
    @include('include.header')
@endsection

@section('content')
<x-card>
</x-card>
@endsection

@section('footer')
    @include('include.footer')
@endsection

@push('scriptsFooter')
<script type="text/javascript">
    const url = 'https://naushah.ru/';
    async function fetchRequest() {
        const response = await fetch(url);
        const event = await response.json();
        consloe.log('event');
    }
    fetchRequest();
</script>
@endpush('scriptsFooter')
