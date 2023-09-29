<?php

namespace App\Services;

use App\Contracts\PaymentGatewayInterface;

class SEPGateway implements PaymentGatewayInterface
{

    public function processPayment(float $amount): array
    {
        return Response::json(200, true,
            [
                'gateway' => 'sep',
                'message' => $amount
            ]);
    }
}
