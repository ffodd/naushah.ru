<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\TicketCustomer;

class TicketController extends Controller
{
    public function buy(Request $request)
    {
        return ('Поздравляем! Вы успешно приобрели билет.<br>Ваша ссылка для доступа к билету: http://test-mysite-1.ru/event/sie30908982334982039849788  <br>Обращаем внимание: данная ссылка доступа 3 дня.');
    }
}
