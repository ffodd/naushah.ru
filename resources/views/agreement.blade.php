@extends('layouts.main')

@section('seo')
    <link rel="canonical" href="https://naushah.ru/shopcart"/>
    <meta name="description"
        content="Пользовательское соглашение" />
    <meta name="robots" content="index, follow" />
    <meta name="document-state" content="dynamic" />
    <meta name="creator" content="Воронов Виталий Андреевич" />
@endsection

@push('style')
@endpush

@section('title', 'Пользовательское соглашение | Аудиоспектакли в наушниках')

@section('header')
    @include('include.header')
@endsection

@section('content')
<section class="relative block py-20 overflow-hidden leading-6 text-left bg-whit">
    <div class="w-full max-w-5xl px-8 mx-auto leading-6 text-left xl:px-12">
        <div class="relative w-full xs:px-4 leading-6 text-center xl:flex-grow-0 xl:flex-shrink-0 lg:flex-grow-0 lg:flex-shrink-0">
            <div class="box-border text-sm font-semibold text-black uppercase">
                Пользовательское соглашение
            </div>
            <p class="box-border mx-0 mt-6 mb-0 text-justify text-xs font-normal leading-normal text-black sm:text-sm">
            Настоящее Пользовательское Соглашение (Далее Соглашение) регулирует отношения между ООО «ОНЛАЙН ТУР» (далее  или Администрация) с одной стороны и пользователем сайта с другой.
            </p>
            <p class="box-border mx-0 mb-0 text-justify text-xs font-normal leading-normal text-black sm:text-sm">
            Сайт ООО «ОНЛАЙН ТУР» не является средством массовой информации.
            </p>
            <p class="box-border mx-0 mt-6 mb-0 text-justify text-xs font-normal leading-normal text-black sm:text-sm">
            Используя сайт, Вы соглашаетесь с условиями данного соглашения. Если Вы не согласны с условиями данного соглашения, не используйте сайт ООО «ОНЛАЙН ТУР»!
            </p>
            <div class="box-border text-sm font-semibold text-black uppercase mt-3">Права и обязанности сторон</div>
            <p class="box-border mx-0 mt-6 text-justify text-sm mb-2 font-normal leading-normal text-black sm:text-sm">Пользователь имеет право:</p>
            <ul class="list-disc text-left text-xs font-normal leading-normal text-black sm:text-sm">
                <li>осуществлять поиск информации на сайте;</li>
                <li>получать информацию на сайте;</li>
                <li>комментировать контент, выложенный на сайт;</li>
                <li>требовать от администрации скрытия любой информации о пользователе;</li>
                <li>требовать от администрации скрытия любой информации переданной пользователем сайту;</li>
                <li>использовать информацию сайта исключительно для личного просмотра и прослушивания , без права копирования и передачи третьим лицам;</li>
            </ul>
            <p class="box-border mx-0 mt-6 text-justify text-sm mb-2 font-normal leading-normal text-black sm:text-sm">Администрация имеет право:</p>
            <ul class="list-disc text-left text-xs font-normal leading-normal text-black sm:text-sm">
                <li>по своему усмотрению и необходимости создавать, изменять, отменять правила;</li>
                <li>ограничивать доступ к любой информации на сайте;</li>
                <li>создавать, изменять, удалять информацию;</li>
                <li>требовать от администрации скрытия любой информации о пользователе;</li>
                <li>удалять учетные записи;</li>
                <li>отказывать в регистрации без объяснения причин;</li>
            </ul>
            <p class="box-border mx-0 mt-6 text-justify text-sm mb-2 font-normal leading-normal text-black sm:text-sm">Пользователь обязуется:</p>
            <ul class="list-disc text-left text-xs font-normal leading-normal text-black sm:text-sm">
                <li>обеспечить достоверность предоставляемой информации;</li>
                <li>обеспечивать сохранность личных данных от доступа третьих лиц;</li>
                <li>обновлять Персональные данные, предоставленные при регистрации, в случае их изменения;</li>
                <li>не копировать информацию с других источников;</li>
                <li>при копировании информации с других источников, включать в её состав информацию об авторе;</li>
                <li>не распространять информацию, которая направлена на пропаганду войны, разжигание национальной, расовой или религиозной ненависти и вражды, а также иной информации, за распространение которой предусмотрена уголовная или административная ответственность;</li>
                <li>не нарушать работоспособность сайта;</li>
                <li>не создавать несколько учётных записей на Сайте, если фактически они принадлежат одному и тому же лицу;</li>
                <li>не совершать действия, направленные на введение других Пользователей в заблуждение;</li>
                <li>не передавать в пользование свою учетную запись и/или логин и пароль своей учетной записи третьим лицам;</li>
                <li>не регистрировать учетную запись от имени или вместо другого лица за исключением случаев, предусмотренных законодательством РФ;</li>
                <li>не размещать материалы рекламного, эротического, порнографического или оскорбительного характера, а также иную информацию, размещение которой запрещено или противоречит нормам действующего законодательства РФ;</li>
                <li>не использовать скрипты (программы) для автоматизированного сбора информации и/или взаимодействия с Сайтом и его Сервисами;</li>
            </ul>
            <p class="box-border mx-0 mt-6 text-justify text-sm mb-2 font-normal leading-normal text-black sm:text-sm">Администрация обязуется:</p>
            <ul class="list-disc text-left text-xs font-normal leading-normal text-black sm:text-sm">
                <li>поддерживать работоспособность сайта за исключением случаев, когда это невозможно по независящим от Администрации причинам;</li>
                <li>осуществлять разностороннюю защиту учетной записи Пользователя;</li>
                <li>защищать информацию, распространение которой ограничено или запрещено законами путем вынесения предупреждения либо удалением учетной записи пользователя, нарушившего правила;</li>
                <li>предоставить всю доступную информацию о Пользователе уполномоченным на то органам государственной власти в случаях, установленных законом;</li>
            </ul>
            <p class="box-border mx-0 mt-6 text-justify text-sm mb-2 font-normal leading-normal text-black sm:text-sm">Ответственность сторон:</p>
            <ul class="list-disc text-left text-xs font-normal leading-normal text-black sm:text-sm">
                <li>пользователь лично несет полную ответственность за распространяемую им информацию;</li>
                <li>администрация не несет никакой ответственности за достоверность информации, скопированной из других источников;</li>
                <li>администрация не несёт ответственность за несовпадение ожидаемых Пользователем и реально полученных услуг;</li>
                <li>администрация не несет никакой ответственности за услуги, предоставляемые третьими лицами;</li>
                <li>в случае возникновения форс-мажорной ситуации (боевые действия, чрезвычайное положение, стихийное бедствие и т. д.) Администрация не гарантирует сохранность информации, размещённой Пользователем, а также бесперебойную работу информационного ресурса;</li>
            </ul>
            <p class="box-border text-xs font-semibold text-black uppercase mt-3">Условия действия Соглашения</p>
            <p class="box-border mx-0 mt-6 mb-0 text-justify text-xs font-normal leading-normal text-black sm:text-sm">
            Данное Соглашение вступает в силу при любом использовании данного сайта. Соглашение перестает действовать при появлении его новой версии. Администрация оставляет за собой право в одностороннем порядке изменять данное соглашение по своему усмотрению. Администрация не оповещает пользователей об изменении в Соглашении.
            </p>
        </div>
    </div>
</section>
@endsection

@section('footer')
    @include('include.footer')
@endsection

@push('scriptsFooter')
@endpush('scriptsFooter')
