<?php

declare(strict_types = 1);

namespace App\Entity;

/**
 * designed for demo only.
 */
final class Order
{
    private int $total;
    private Customer $customer;

    /**
     * @param int $total
     */
    public function __construct(int $total)
    {
        $this->total = $total;
    }

    public function setCustomer(Customer $customer): void
    {
        $this->customer = $customer;
    }

    public function getCustomer(): Customer
    {
        return $this->customer;
    }

    public function getTotal(): int
    {
        return $this->total;
    }

    public function setTotal(int $total): void
    {
        $this->total = $total;
    }
}
