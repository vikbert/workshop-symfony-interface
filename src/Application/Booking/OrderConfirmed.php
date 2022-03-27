<?php

declare(strict_types = 1);

namespace App\Application\Booking;

use App\Application\EventGroup\AsyncEvent;

/**
 * can be async
 */
final class OrderConfirmed implements AsyncEvent
{
}
