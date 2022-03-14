<?php

declare(strict_types = 1);

namespace App\Event;

use App\Service\JsonSerializableEvent;
use DateTimeImmutable;

final class CustomerDeleted implements JsonSerializableEvent
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

    public function toJson(): string
    {
        return json_encode([
            'customer' => $this->customer,
            'user' => $this->user,
        ]);
    }
}
