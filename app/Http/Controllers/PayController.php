<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Mail;

use App\Services\PayService;
use App\Services\OrderService;
use App\Services\TicketService;

class PayController extends Controller
{

    public function create(Request $request, PayService $payService, OrderService $orderService)
    {
        $orderId = $orderService->createOrder($request);

        //Генерация подписанной ссылки;
        $temporarySignedURL = URL::temporarySignedRoute('pays.createTicket', now()->addMinutes(5), ['orderId' => $orderId]);

        $response = $payService->payInit($request, $orderId, $temporarySignedURL); 

       if ($response->Success === TRUE ) {
            $orderService->updateOrder($orderId, $response->PaymentId);
            return Redirect::away("$response->PaymentURL");
        }
    }
    
    public function createTicket(TicketService $ticketService, $orderId)
    {
        $order = $ticketService->createTicket($orderId);

        //Отправка письма
        $to_name = "$order->customer_email";
        $to_email = "$order->customer_email";
        $data = array('name'=>"$order->customer_name", "body" => "");
        Mail::send('emails', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)->subject('Билеты | naushah.ru');
            $message->from('site@naushah.ru','Билеты | naushah.ru');
        });

        return view('successPay');
    }  
}
