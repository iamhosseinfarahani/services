<?php

namespace App\Services;

use App\Contracts\PaymentGatewayInterface;

class MellatGateway implements PaymentGatewayInterface
{

    public function processPayment(float $amount): array
    {
        return Response::json(200, true,
            [
                'gateway' => 'mellat',
                'message' => $amount
            ]);
    }
}
