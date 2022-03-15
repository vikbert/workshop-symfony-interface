<?php

declare(strict_types = 1);

namespace App\Event;

use DateTimeImmutable;

final class CustomerDeleted
{
    private DateTimeImmutable $deletedAt;
    private string $customer;
    private string $user;

    public function __construct(DateTimeImmutable $deletedAt, string $customer, string $user)
    {
        $this->deletedAt = $deletedAt;
        $this->customer = $customer;
        $this->user = $user;
    }

    public function getDeletedAt(): DateTimeImmutable
    {
        return $this->deletedAt;
    }

    public function getCustomer(): string
    {
        return $this->customer;
    }

    public function getUser(): string
    {
        return $this->user;
    }
}
