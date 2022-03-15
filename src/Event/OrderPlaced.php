<?php

declare(strict_types = 1);

namespace App\Event;

use DateTimeImmutable;

final class OrderPlaced
{
    private string $customerId;
    private string $oderId;
    private DateTimeImmutable $placedAt;

    public function __construct(string $customerId, string $oderId, DateTimeImmutable $placedAt)
    {
        $this->customerId = $customerId;
        $this->oderId = $oderId;
        $this->placedAt = $placedAt;
    }
}
