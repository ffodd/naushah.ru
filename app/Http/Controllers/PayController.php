<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

use App\Services\PayService;
use App\Services\OrderService;
use App\Services\TicketService;

class PayController extends Controller
{

    public function create(Request $request, PayService $payService, OrderService $orderService)
    {
        $orderId = $orderService->createOrder($request);

        //Генерация подписанной ссылки;
        $temporarySignedURL = URL::temporarySignedRoute('pays.createTicket', now()->addHours(1), ['orderId' => $orderId]);

        $response = $payService->payInit($request, $orderId, $temporarySignedURL); 

       if ($response->Success === TRUE ) {
            $orderService->updateOrder($orderId, $response->PaymentId);
            return Redirect::away("$response->PaymentURL");
        }
    }
    
    public function createTicket(TicketService $ticketService, $orderId)
    {
        $ticketService->createTicket($orderId);
    }   
}
