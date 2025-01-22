<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PayService;
use App\Services\OrderService;

class PayController extends Controller
{

    public function create(Request $request, PayService $payService, OrderService $orderService)
    {
        $orderId = $orderService->createOrder($request);

        $payService->payInit($request, $orderId);
    }     
}
