<?php

namespace App\Http\Controllers;

use App\Events\ProductPurchased;
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
        //ep 48
        // request()->user()->notify(new PaymentReceived(900));
        // Notification::send(request()->user(), new PaymentReceived());

        //Eventing Pros and cons
        //process the payment
        //unlock the purchase

        ProductPurchased::dispatch('toy');
        // event(new ProductPurchased('toy'))

        //listeners
        //notify the user about the payment
        //award achievements
        //send shareable coupon to user


    }
}
