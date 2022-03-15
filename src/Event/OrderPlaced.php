<?php

declare(strict_types = 1);

namespace App\Event;

use App\Service\JsonSerializableEvent;
use DateTimeImmutable;

final class OrderPlaced implements JsonSerializableEvent
{
    private string $customerId;
    private string $orderId;
    private DateTimeImmutable $placedAt;

    public function __construct(string $customerId, string $orderId, DateTimeImmutable $placedAt)
    {
        $this->customerId = $customerId;
        $this->orderId = $orderId;
        $this->placedAt = $placedAt;
    }

    public function toJson(): string
    {
        return json_encode([
            'customer' => $this->customerId,
            'order' => $this->orderId,
            'placedAt' => $this->placedAt->format('d.m.Y H:i:s'),
        ]);
    }
}
