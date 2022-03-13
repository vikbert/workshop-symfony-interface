<?php

declare(strict_types = 1);

namespace App\Core\ValueObject;

final class TodoId
{
    private int $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }

    private static function fromInt(int $id): self
    {
        return new self($id);
    }

    public function toInt(): int
    {
        return $this->id;
    }
}
