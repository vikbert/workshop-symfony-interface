<?php

declare(strict_types = 1);

namespace App\Core\Repository;

use App\Core\Entity\Todo;
use App\Core\ValueObject\TodoId;

interface TodoRepositoryInterface
{
    /**
     * @return Todo[]
     */
    public function getAllTodos(): array;

    public function create(Todo $todo): void;

    public function complete(TodoId $todoId): void;

    public function reopen(TodoId $todoId): void;

    public function delete(TodoId $todoId): void;
}
