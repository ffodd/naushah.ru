<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\EgoPayService;
use Illuminate\Support\Facades\Redirect;

class PayController extends Controller
{
    public function create(Request $request, EgoPayService $servicePay)
    {
        $servicePay->createClient();
        $urlPay = $servicePay->createPayment();
        return Redirect::to("$urlPay");
    }
}
