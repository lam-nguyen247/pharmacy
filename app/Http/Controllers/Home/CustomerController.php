<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Notifications\CustomerNotification;
use App\Notifications\FeedbackNotification;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;

class CustomerController extends Controller
{
    public function store(Request $request)
    {
        $customer = Customer::create($request->all());

        Notification::route('mail', 'duocphamttbgroup@gmail.com')->notify(new CustomerNotification($customer));
        Notification::route('mail', $customer->email)->notify(new FeedbackNotification($customer));
        return true;

    }
}
