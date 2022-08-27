<?php

declare(strict_types = 1);

namespace App\Event;

use App\Service\TrackableEvent;
use DateTimeImmutable;

final class OrderPaid implements TrackableEvent
{
    private string $customerId;
    private string $orderId;
    private string $paymentId;
    private DateTimeImmutable $paidAt;

    public function __construct(string $customerId, string $orderId, string $paymentId, DateTimeImmutable $paidAt)
    {
        $this->customerId = $customerId;
        $this->orderId = $orderId;
        $this->paymentId = $paymentId;
        $this->paidAt = $paidAt;
    }

    public function toJson(): string
    {
        return json_encode([
            'customer' => $this->customerId,
            'order' => $this->orderId,
            'payment' => $this->paymentId,
            'paidAt' => $this->paidAt->format('d.m.Y H:i:s'),
        ]);
    }
}
