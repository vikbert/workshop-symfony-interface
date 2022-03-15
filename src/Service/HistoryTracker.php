<?php

declare(strict_types = 1);

namespace App\Service;

use App\Event\OrderPaid;
use App\Event\OrderPlaced;
use http\Message;

/**
 * use case:
 * ⚠️ in my Event-driven system, I have more than 80x events for different domains, that need to be tracked and archived.
 * Can we simplify this service by using interface?
 */
final class HistoryTracker
{
    private MessagePublisherInterface $publisher;
    private MessageLoggerInterface $logger;

    public function __construct(MessagePublisherInterface $publisher, MessageLoggerInterface $logger)
    {
        $this->publisher = $publisher;
        $this->logger = $logger;
    }

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

    /**
     * Conform typing by using interface
     * ✅ Single responsibility
     * the logic for serializing event is located within event itself
     *
     */
    public function track(JsonSerializableEvent $event): void
    {
        /**
         * other awesome logic here
         */

        dump(get_class($event));

        $message = $event->toJson();
        $this->publisher->publish($message);
        $this->logger->log($message);

        /**
         * other awesome logic here
         */
    }
}
