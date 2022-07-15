<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

class ControllerMail extends Controller
{
    public function sendMail()
    {
        //destinataire
        Mail::to('sedrarabemananjara@gmail.com')->send(new TestMail());
        
    }
}
