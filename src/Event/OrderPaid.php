<?php

declare(strict_types = 1);

namespace App\Event;

use DateTimeImmutable;

final class OrderPaid
{
    private string $customerId;
    private string $oderId;
    private string $paymentId;
    private DateTimeImmutable $paidAt;
}
