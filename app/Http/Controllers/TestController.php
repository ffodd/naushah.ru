<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\LaravelPdf\Facades\Pdf;
use Illuminate\Support\Facades\Mail;

class TestController extends Controller
{
    public function test()
    {
        $pdf = Pdf::view('test')->save('./test/invoice.pdf');

        //Отправка письма
        $to_name = "voronov.vitaly.andreevich@gmail.com";
        $to_email = "voronov.vitaly.andreevich@gmail.com";
        $data = array('name'=>"Виталий", "body" => "");
        Mail::send('emails', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)->subject('Билеты | naushah.ru');
            $message->from('site@naushah.ru','Билеты | naushah.ru');
            $message->attach( './test/invoice.pdf');
        });

    }
}
