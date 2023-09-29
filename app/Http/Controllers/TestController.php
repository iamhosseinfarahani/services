<?php

namespace App\Http\Controllers;

use App\Contracts\PaymentGatewayInterface;
use App\Http\Requests\PaymentRequest;

class TestController extends Controller
{
    public function store(PaymentRequest $request, PaymentGatewayInterface $paymentGateway)
    {
        return $paymentGateway->processPayment($request->amount);
    }
}
