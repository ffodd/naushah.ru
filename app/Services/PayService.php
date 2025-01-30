<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class PayService
{
    function payInit($request, $orderId, $temporarySignedURL) {
        //Формирование токена
        $forToken = [
            'TerminalKey' => config('payment.terminalKey'),
            'Amount' => ($request->price)*100,
            'OrderId' => $orderId,
            'Description' => 'Спектакли-экскурсии | naushah.ru',
            'Password' => config('payment.password'),
            'SuccessURL' => $temporarySignedURL,
            'FailURL' => config('payment.failURL'),
        ];
        ksort($forToken);
        $stringBody = implode('', $forToken);
        $token = hash('sha256', $stringBody);

        //Формирование тела запроса
        $data = [
            'Token' => $token,
            'Receipt' => [
                'Email' => $request->email,
                'Phone' => $request->phone,
                'Taxation' => config('payment.taxation'),
                'Items' => [
                    [
                        'Name' => $request->eventName,
                        'Price' => ($request->price)*100,
                        'Quantity' => '1',
                        'Amount' => ($request->price)*100,
                        'Tax' => config('payment.tax')
                    ]
                ]
            ]
        ];

        $data = array_merge($forToken, $data);

        //Отправка запроса
        $response = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])->post('https://securepay.tinkoff.ru/v2/Init', $data);

        $response = json_decode($response);

        return($response);
    }
}