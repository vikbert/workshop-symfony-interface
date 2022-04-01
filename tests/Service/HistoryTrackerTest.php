<?php

declare(strict_types = 1);

namespace App\Tests\Service;

use App\Event\OrderPaid;
use App\Event\OrderPlaced;
use App\Service\HistoryTracker;
use App\Service\MessageLoggerInterface;
use App\Service\MessagePublisherInterface;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class HistoryTrackerTest extends TestCase
{
    /**
     * previous Demo.
     */
    public function disabledTestTrackMethod(): void
    {
        $tracker = new HistoryTracker();

        $event = new OrderPlaced('customer-1', 'order-1', new DateTimeImmutable());
        $tracker->trackOrderPlaced($event);

        $event = new OrderPaid('customer-1', 'order-1', 'payment-1', new DateTimeImmutable());
        $tracker->trackOrderPaid($event);

        $this->assertTrue(true);
    }

    /**
     * Demo: conformed typing with interface.
     */
    public function testTrackMethodWithConformedTyping(): void
    {
        $tracker = new HistoryTracker(
            $this->createMock(MessagePublisherInterface::class),
            $this->createMock(MessageLoggerInterface::class)
        );

        $current = new DateTimeImmutable();
        $event1 = new OrderPlaced('customer-1', 'order-1', $current);
        $event2 = new OrderPaid('customer-1', 'order-1', 'payment-1', $current);

        $tracker->track($event1);
        $tracker->track($event2);

        $this->assertTrue(true);
    }
}
