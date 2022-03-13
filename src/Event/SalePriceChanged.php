<?php

declare(strict_types = 1);

namespace App\Event;

final class SalePriceChanged
{
    private float $previousPrice;
    private float $currentPrice;
    private string $user;

    public function __construct(float $previousPrice, float $currentPrice, string $user)
    {
        $this->previousPrice = $previousPrice;
        $this->currentPrice = $currentPrice;
        $this->user = $user;
    }

    public function getPreviousPrice(): float
    {
        return $this->previousPrice;
    }

    public function getCurrentPrice(): float
    {
        return $this->currentPrice;
    }

    public function getUser(): string
    {
        return $this->user;
    }
}
