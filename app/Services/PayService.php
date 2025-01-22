<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use JustCommunication\TinkoffAcquiringAPIClient\TinkoffAcquiringAPIClient;
use JustCommunication\TinkoffAcquiringAPIClient\API\InitRequest;
use JustCommunication\TinkoffAcquiringAPIClient\Exception\TinkoffAPIException;

class PayService
{
    function payInit($request, $orderId) {
        $client = new TinkoffAcquiringAPIClient('1737453783839DEMO', '8D27OvFCF1n#9QSc');
        $initRequest = new InitRequest(($request->price)*100, $orderId);
        $initRequest
            ->setLanguage($initRequest::LANGUAGE_RU)
            ->setDescription('Аудио-экскурсия | '."$request->eventName")
            ->setRecurrent('2')
            ->setCustomerKey('3')
            ->setNotificationURL('https://domain.tld/_api/notifications/124')
            ->setSuccessURL('https://domain.tld/_api/success/124')
            ->setFailURL('https://domain.tld/_api/fail/124')
            ->setData([
                'Foo' => 'bar'
            ])
        ;
        try {
            $response = $client->sendInitRequest($initRequest);
            //$response->getPaymentId() // идентификатор платежа

            header('Location: ' . $response->getPaymentURL()); // перенаправляем пользователя на страницу оплаты
            exit;
        } catch (TinkoffAPIException $e) {
            // обработка ошибки
        }
    }
}