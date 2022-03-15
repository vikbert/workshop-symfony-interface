<?php

declare(strict_types = 1);

namespace App\Tests\Service;

use App\Event\OrderPaid;
use App\Event\OrderPlaced;
use App\Service\HistoryTracker;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class HistoryTrackerTest extends TestCase
{
    public function testTrackMethod(): void
    {
        $tracker = new HistoryTracker();

        $event = new OrderPlaced('customer-1', 'order-1', new DateTimeImmutable());
        $tracker->trackOrderPlaced($event);

        $event = new OrderPaid('customer-1', 'order-1', 'payment-1', new DateTimeImmutable());
        $tracker->trackOrderPaid($event);

        $this->assertTrue(true);
    }
}
