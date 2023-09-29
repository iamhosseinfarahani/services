<?php

namespace App\Services;

use App\Contracts\PaymentGatewayInterface;

class PasargadGateway implements PaymentGatewayInterface
{

    public function processPayment(float $amount): array
    {
        return Response::json(200, true,
            [
                'gateway' => 'pasargad',
                'message' => $amount
            ]);
    }
}
