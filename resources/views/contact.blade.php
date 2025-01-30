@extends('layouts.main')

@section('seo')
    <meta name="description"
        content="Наслаждайтесь комфортом и удобством аудиогидов, оставляйте обратную связь и помогайте другим путешественникам выбирать лучший контент для незабываемых впечатлений. Нам важно Ваше мнение! Сделаем данный ресурс лучше!"/>
    <meta name="robots" content="index, follow" />
    <meta name="document-state" content="dynamic" />
    <meta name="creator" content="Воронов Виталий Андреевич" />
@endsection

@push('style')
@endpush

@section('title')

@endsection

@section('header')
    @include('include.header')
@endsection

@section('content')
<!-- start section 1 -->
<section class="flex lg:mt-12 justify-center items-center w-screen bg-white">
	<div class="container mx-auto my-4 px-4 lg:px-20">

		<div class="w-full p-8 my-4 md:px-12 xl:w-9/12 xl:pl-20 xl:pr-40 mr-auto rounded-2xl shadow-2xl">
			<div class="flex flex-col">
				<h3 class="font-bold uppercase text-lg md:text-2xl lg:text-3xl">Есть вопросы или предложения?</h3>
                <p class="font-bold uppercase text-base md:text-xl lg:text-2xl">Напиши нам!</p>
			</div>
			<div class="grid grid-cols-1 gap-5 md:grid-cols-2 mt-5">
                <input class="bg-gray-50 w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500" type="_text" name="name" placeholder="Имя">
                <input class="bg-gray-50 w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500" type="_text" name="surname" placeholder="Фамилия">
                <input class="bg-gray-50 w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500" type="_text" name="email" placeholder="Email получателя">
                <input class="bg-gray-50 w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500" type="_text" name="phone" placeholder="Телефон">
            </div>
			<div class="my-4">
				<textarea class="bg-gray-50 w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500" placeholder="Введите Ваши комментарии"></textarea>
			</div>
			<div class="my-2 w-1/2 lg:w-2/6">
				<button class="uppercase text-xs lg:text-sm font-bold tracking-wide bg-blue-900 text-gray-100 p-3 rounded-lg w-full focus:outline-none focus:shadow-outline">Отправить сообщение</button>
			</div>
		</div>

		<div class="w-full xl:-mt-96 xl:w-2/6 px-8 py-12 ml-auto bg-blue-900 rounded-2xl">
			<div class="flex flex-col text-white">
				<h1 class="font-bold uppercase text-lg md:text-xl lg:text-2xl my-4">Мир аудио экскурсий</h1>
				<p class="text-gray-400">Наши гиды гарантируют захватывающее путешествие с элементами интерактива. Обратная связь позволяет улучшить каждую экскурсию, чтобы вы всегда получали максимум от своего опыта. Откройте для себя новые горизонты с нами!</p>
				<div class="flex my-4">
                    <div class="flex flex-col">
                        <h2 class="text-base md:text-lg lg:text-xl">ООО "ОНЛАЙН ТУР"</h2>
                        <p class="text-gray-400">Санкт-Петербург; Большая Московская улица дом 18 пом.8</p>
                    </div>
                </div>
          
                <div class="flex my-4 w-2/3 lg:w-1/2">
                    <div class="flex flex-col">
                        <h2 class="text-lg md:text-xl lg:text-2xl">Контакты</h2>
                        <a href="https://vk.com/na_ushah" class="text-gray-400">vk.com/na_ushah</a>
                        <a href="https://t.me/na_ushah" class="text-gray-400">@na_ushah</a>
                        <a href="mailto:info.naushah@gmail.com" class="text-gray-400">info.naushah@gmail.com</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- finish section 1 -->
<!-- start section 2 -->
<section class="w-full px-8 py-16 bg-white xl:px-0">
  <div class="flex flex-col max-w-6xl mx-auto md:flex-row">
    <div class="w-full pr-5 md:w-3/12 xl:pr-12">
      <h3 class="text-2xl font-bold leading-7">Мы будем рады ответить на любые вопросы</h3>
    </div>

    <div class="w-full mt-5 md:mt-0 md:w-4/5 md:pl-2">
      <p class="text-base font-normal leading-none text-gray-700 md:text-lg">Ваше мнение ценно, и оно нас вдохновляет на совершенствование.</p>
      <p class="text-base font-normal leading-none text-gray-700 md:text-lg">Забота о клиенте, индивидуальный подход и внимание к деталям — в центре нашей философии.</p>
      <p class="text-base font-normal leading-none text-gray-700 md:text-lg">Воспользуйтесь нашими услугами и убедитесь в нашем стремлении к качеству и безупречному сервису.</p>
    </div>
  </div>
</section>
<!-- finish section 2 -->
@endsection

@section('footer')
    @include('include.footer')
@endsection

@push('scriptsFooter')
@endpush('scriptsFooter')
