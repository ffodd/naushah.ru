<?php

namespace App\Services;

use App\Models\TicketCustomer;
use App\Models\Order;
use App\Models\Ticket;

class OrderService
{
    //Формирование заказа в бд;
    function createOrder($request) {
        //Создаем клиента
        $ticketCustomer = TicketCustomer::FirstOrCreate([
            'phone' => $request->input('phone')
        ]);
        $ticketCustomer->name = $request->input('name');
        $ticketCustomer->surname = $request->input('surname');
        $ticketCustomer->email = $request->input('email');
        $ticketCustomer->save();
        //Созданем заказ
        $order = new Order();
        $order->id_status = '1';
        $order->customer_name = ($request->input('surname').' '.$request->input('name'));
        $order->customer_phone = $request->input('phone');
        $order->customer_email = $request->input('email');
        $ticketCustomer->orders()->save($order);

        //Создаем билеты
        $ticket = new Ticket();
        $ticket->id_event_names = $request->input('iventid');
        $order->tickets()->save($ticket);

        return($order->id);
    }
}