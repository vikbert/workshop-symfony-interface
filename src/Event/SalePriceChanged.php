<?php

declare(strict_types = 1);

namespace App\Event;

use App\Service\JsonSerializableEvent;

final class SalePriceChanged implements JsonSerializableEvent
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

    public function toJson(): string
    {
        return json_encode([
            'previousPrice' => $this->previousPrice,
            'user' => $this->user,
        ]);
    }
}
