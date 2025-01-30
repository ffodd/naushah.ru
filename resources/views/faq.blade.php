@extends('layouts.main')

@section('seo')
    <link rel="canonical" href="https://naushah.ru/hotels"/>
    <meta name="description"
        content="Отдых в Санкт-Петербурге: выберите идеальное место для проживания. Отели, хостелы и апартаменты ждут вас в сердце города, рядом с основными достопримечательностями. Узнайте, какие места предлагают лучшие условия для вашего незабываемого путешествия."/>
    <meta name="robots" content="index, follow" />
    <meta name="document-state" content="dynamic" />
    <meta name="creator" content="Воронов Виталий Андреевич" />
@endsection

@push('style')
@endpush

@section('title', 'Санкт-Петербург: где остановиться для полноценного отдыха')

@section('header')
    @include('include.header')
@endsection

@section('content')
<section id="faqs" class="scroll-py-32 bg-white py-32">
    <div class="mx-auto max-w-5xl px-6">
        <div class="grid gap-y-12 px-2 lg:[grid-template-columns:1fr_auto]">
            <div class="text-center lg:text-left">
                <h2 class="text-title mb-4 text-3xl font-semibold md:text-4xl">Frequently <br class="hidden lg:block" /> Asked <br class="hidden lg:block" />Questions</h2>
                <p>Accusantium quisquam. Illo, omnis?</p>
            </div>

            <div class="divide-y divide-dashed sm:mx-auto sm:max-w-lg lg:mx-0">
                <div class="pb-6">
                    <h3 class="text-title font-medium">What is the refund policy?</h3>
                    <p class="text-body mt-4">We offer a 30-day money back guarantee. If you are not satisfied with our product, you can request a refund within 30 days of your purchase.</p>

                    <ol class="list-outside list-decimal space-y-2 pl-4">
                        <li class="text-body mt-4">To request a refund, please contact our support team with your order number and reason for the refund.</li>
                        <li class="text-body mt-4">Refunds will be processed within 3-5 business days.</li>
                        <li class="text-body mt-4">Please note that refunds are only available for new customers and are limited to one per customer.</li>
                    </ol>
                </div>
                <div class="py-6">
                    <h3 class="text-title font-medium">How do I cancel my subscription?</h3>
                    <p class="text-body mt-4">You can cancel your subscription at any time by logging into your account and clicking on the cancel button.</p>
                </div>
                <div class="py-6">
                    <h3 class="text-title font-medium">Can I upgrade my plan?</h3>
                    <p class="text-body my-4">Yes, you can upgrade your plan at any time by logging into your account and selecting the plan you want to upgrade to.</p>
                    <ul class="list-outside list-disc space-y-2 pl-4">
                        <li class="text-body">You will be charged the difference in price between your current plan and the plan you are upgrading to.</li>
                        <li class="text-body">Your new plan will take effect immediately and you will be billed at the new rate on your next billing cycle.</li>
                    </ul>
                </div>
                <div class="py-6">
                    <h3 class="text-title font-medium">Do you offer phone support?</h3>
                    <p class="text-body mt-4">We do not offer phone support at this time. However, you can contact us via email or live chat for any questions or concerns you may have.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('footer')
    @include('include.footer')
@endsection

@push('scriptsFooter')
@endpush('scriptsFooter')
