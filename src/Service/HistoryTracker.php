<?php

declare(strict_types = 1);

namespace App\Service;

use App\Event\CustomerDeleted;
use App\Event\SalePriceChanged;

/**
 * ⚠️ in my Event-driven system, there are more than 80x events for different domains, that need to be tracked and archived.
 * Can we simplify this service by using interface?
 */
final class HistoryTracker
{
    public function trackCustomerDeleted(CustomerDeleted $event): void
    {
        // serialize the event

        // push serialized message to queue

        // save serialized message to mongoDB
    }

    public function trackSalePriceChanged(SalePriceChanged $event): void
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

    public function track(JsonSerializableEvent $event): void
    {
        $message = $event->toJson();
        dump($message);

        $this->pushMessage($message);
        $this->saveMessage($message);
    }

    private function pushMessage(string $message): void
    {
        // push serialized message to queue
    }

    private function saveMessage(string $message): void
    {
        // save serialized message to mongoDB
    }
}
