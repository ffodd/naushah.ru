<?php

namespace App\Services;

use App\Models\Order;
use App\Models\Ticket;

class TicketService
{
    //Создание билета;
    function createTicket($orderId) {
        //Изменение статуса заказа;
        $order = Order::find($orderId);
        $order->update(['id_status' => "2"]);

        $tickets = $order->tickets();

    }
}