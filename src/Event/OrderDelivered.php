<?php

declare(strict_types = 1);

namespace App\Event;

use DateTimeImmutable;

final class OrderDelivered
{
    private string $customerId;
    private string $oderId;
    private DateTimeImmutable $deliveredAt;
}
