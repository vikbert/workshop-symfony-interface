<?php

declare(strict_types = 1);

namespace App\Tests\Service;

use App\Event\CustomerDeleted;
use App\Event\SalePriceChanged;
use App\Service\HistoryTracker;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class HistoryTrackerTest extends TestCase
{
    public function testTrackMethod(): void
    {
        $tracker = new HistoryTracker();

        $customerDeleted = new CustomerDeleted(new DateTimeImmutable(), 'Tom Jerry', 'admin');
        $tracker->track($customerDeleted);

        $priceChanged = new SalePriceChanged(100.00, 200.00, 'admin');
        $tracker->track($priceChanged);

        $this->assertTrue(true);
    }
}
