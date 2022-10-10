<?php

declare(strict_types=1);

namespace Rvvup\Payments\Api;

interface GuestPaymentActionsGetInterface
{
    /**
     * Get the payment actions for the masked cart ID.
     *
     * @param string $cartId
     * @return \Rvvup\Payments\Api\Data\PaymentActionInterface[]
     */
    public function execute(string $cartId): array;
}
