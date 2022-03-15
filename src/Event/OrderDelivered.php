<?php

declare(strict_types = 1);

namespace App\Event;

use App\Service\JsonSerializableEvent;
use DateTimeImmutable;

final class OrderDelivered implements JsonSerializableEvent
{
    private string $customerId;
    private string $orderId;
    private DateTimeImmutable $deliveredAt;

    public function __construct(string $customerId, string $orderId, DateTimeImmutable $deliveredAt)
    {
        $this->customerId = $customerId;
        $this->orderId = $orderId;
        $this->deliveredAt = $deliveredAt;
    }

    public function toJson(): string
    {
        return json_encode([
            'customer' => $this->customerId,
            'order' => $this->orderId,
            'deliveredAt' => $this->deliveredAt->format('d.m.Y H:i:s'),
        ]);
    }
}
