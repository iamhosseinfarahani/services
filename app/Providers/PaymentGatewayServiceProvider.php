<?php

namespace App\Providers;

use App\Contracts\PaymentGatewayInterface;
use App\Services\MellatGateway;
use App\Services\PasargadGateway;
use App\Services\SEPGateway;
use Exception;
use Illuminate\Support\ServiceProvider;

class PaymentGatewayServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(PaymentGatewayInterface::class, function () {
            $preferredGateway = request()->input('gateway');
            $availableGateways = [
                'mellat' => MellatGateway::class,
                'pasargad' => PasargadGateway::class,
                'sep' => SEPGateway::class
            ];

            return $this->app->make($availableGateways[$preferredGateway]) ?? throw new Exception('Invalid gateway');


        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
