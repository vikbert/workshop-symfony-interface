<?php

declare(strict_types = 1);

namespace App\Service;

use App\Event\CustomerDeleted;
use App\Event\SalePriceChanged;

final class HistoryTracker
{
    public function trackCustomerDeleted(CustomerDeleted $event): void
    {
        // serialize the event, and save it
    }

    public function trackSalePriceChanged(SalePriceChanged $event): void
    {
        // serialize the event, and save it
    }
}
