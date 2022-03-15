<?php

declare(strict_types = 1);

namespace App\Event;

use DateTimeImmutable;

final class OrderPaid
{
    private string $customerId;
    private string $oderId;
    private string $paymentId;
    private DateTimeImmutable $paidAt;

    public function __construct(string $customerId, string $oderId, string $paymentId, DateTimeImmutable $paidAt)
    {
        $this->customerId = $customerId;
        $this->oderId = $oderId;
        $this->paymentId = $paymentId;
        $this->paidAt = $paidAt;
    }
}
