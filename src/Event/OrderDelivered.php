<?php

declare(strict_types = 1);

namespace App\Event;

use DateTimeImmutable;

final class OrderDelivered
{
    private string $customerId;
    private string $oderId;
    private DateTimeImmutable $deliveredAt;

    public function __construct(string $customerId, string $oderId, DateTimeImmutable $deliveredAt)
    {
        $this->customerId = $customerId;
        $this->oderId = $oderId;
        $this->deliveredAt = $deliveredAt;
    }
}
