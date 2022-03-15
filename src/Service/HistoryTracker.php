<?php

declare(strict_types = 1);

namespace App\Service;

use App\Event\OrderPaid;
use App\Event\OrderPlaced;

/**
 * use case:
 * ⚠️ in my Event-driven system, I have more than 80x events for different domains, that need to be tracked and archived.
 * Can we simplify this service by using interface?
 */
final class HistoryTracker
{
    public function trackOrderPlaced(OrderPlaced $event): void
    {
        // serialize the event

        // push serialized message to queue

        // save serialized message to mongoDB
    }

    public function trackOrderPaid(OrderPaid $event): void
    {
        // serialize the event

        // push serialized message to queue

        // save serialized message to mongoDB
    }

    // ...
    // public function trackEvent1(): void
    // public function trackEvent2(): void
    // public function trackEvent3(): void
    // ...
}
