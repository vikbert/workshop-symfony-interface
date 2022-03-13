<?php

declare(strict_types = 1);

namespace App\Core\Entity;

use DateTimeImmutable;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\Uuid;

/**
 * @ORM\Entity
 * @ORM\Table(name="todo")
 */
final class Todo
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\Column(type="string", unique=true)
     */
    private string $id;
    /**
     * @ORM\Column(type="string")
     */
    private string $task;
    /**
     * @ORM\Column(type="boolean")
     */
    private bool $isCompleted;
    /**
     * @ORM\Column(type="datetime")
     */
    private DateTimeImmutable $createdAt;
    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private ?DateTimeImmutable $completedAt;
    /**
     * @ORM\Column(type="datetime")
     */
    private DateTimeImmutable $deletedAt;

    public function __construct(string $task)
    {
        $this->id = (string) Uuid::v4();
        $this->task = $task;

        $this->isCompleted = false;
        $this->deletedAt = new DateTimeImmutable();
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getTask(): string
    {
        return $this->task;
    }

    public function isCompleted(): bool
    {
        return $this->isCompleted;
    }
}
