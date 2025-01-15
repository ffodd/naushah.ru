<?php

namespace App\Services;

use mTresk\EgoPayClient\EgoPay;

class EgoPayService
{
    private EgoPay $client;

    public function __construct()
    {
        $this->client = $this->createClient();
    }

    // Создаем клиент
    public function createClient(): EgoPay
    {
        $login = config('payment.login');
        $password = config('payment.password');
        $shopId = config('payment.shop_id');
        $location = config('payment.url');
        $uri = config('payment.urlSite');
        $urlOk = config('payment.urlPayOk');
        $urlFault = config('payment.urlPayFault');

        return new EgoPay($shopId, $login, $password, $location, $uri, $urlOk, $urlFault);
    }

    // Создаем платеж
    public function createPayment()
    {
        $payment = [
            'amount' => 1000,
            'order_number' => 001,
            // Опционально
            'customer_id' => 1,
            'customer_name' => 'Maxim Tresk',
            'customer_phone' => '+7(999)999-99-99',
            'customer_email' => 'test@test.ru',
        ];
        // Возвращаем ссылку на оплату
        return $this->client->register($payment);
    }

    public function updateStatus()
    {
        // Получаем статус заказа
        return $this->client->getStatus(001);
    }
}