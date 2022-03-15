<?php

declare(strict_types = 1);

namespace App\Service;

interface MessagePublisherInterface
{
    /**
     * ⚠️ can be published to RabbitMQ or PubSub
     */
    public function publish(string $message): void;
}
