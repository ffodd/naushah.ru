<?php

namespace App\Services;

use Spatie\LaravelPdf\Facades\Pdf;

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

        Pdf::view('sampleTicket-1', $tickets)->save('./tickets/ticket-'.$tickets->id.'.pdf');

        return($order);
    }
}