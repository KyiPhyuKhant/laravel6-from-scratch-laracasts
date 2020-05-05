<?php

namespace App\Http\Controllers;

use App\Notifications\PaymentReceived;
// use Illuminate\Support\Facades\Notification;

// use Illuminate\Http\Request;

class PaymentsController
{
    public function create()
    {
        return view('payments.create');
    }

    public function store()
    {
        request()->user()->notify(new PaymentReceived());
        // Notification::send(request()->user(), new PaymentReceived());
    }
}
