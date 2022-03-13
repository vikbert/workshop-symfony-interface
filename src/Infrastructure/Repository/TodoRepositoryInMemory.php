<?php

declare(strict_types = 1);

namespace App\Infrastructure\Repository;

use App\Core\Entity\Todo;
use App\Core\Repository\TodoRepositoryInterface;
use App\Core\ValueObject\TodoId;

final class TodoRepositoryInMemory implements TodoRepositoryInterface
{
    public function getAllTodos(): array
    {
        return [
            new Todo('firefox'),
        ];
    }

    public function create(Todo $todo): void
    {
        // TODO: Implement create() method.
    }

    public function complete(TodoId $todoId): void
    {
        // TODO: Implement complete() method.
    }

    public function reopen(TodoId $todoId): void
    {
        // TODO: Implement reopen() method.
    }

    public function delete(TodoId $todoId): void
    {
        // TODO: Implement delete() method.
    }
}
