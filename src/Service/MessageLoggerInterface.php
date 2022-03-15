<?php

declare(strict_types = 1);

namespace App\Service;

interface MessageLoggerInterface
{
    /**
     * ⚠️ can be saved to MongoDB or firestore or MySQL or Redis
     */
    public function log(string $message): void;
}
