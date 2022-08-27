<?php

declare(strict_types = 1);

namespace App\Service;

interface TrackableEvent
{
    public function toJson(): string;
}
