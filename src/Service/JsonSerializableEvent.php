<?php

declare(strict_types = 1);

namespace App\Service;

interface JsonSerializableEvent
{
    public function toJson(): string;
}
