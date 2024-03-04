<?php

declare(strict_types=1);

namespace Rvvup\PaymentsHyvaCheckout\Magewire\Checkout\Payment;

class ApplePayProcessor extends AbstractProcessor
{
    public function getMethodCode(): string
    {
        return 'rvvup_APPLE_PAY';
    }
}
