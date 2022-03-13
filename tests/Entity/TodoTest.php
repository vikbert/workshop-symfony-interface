<?php

declare(strict_types = 1);

namespace App\Tests\Entity;

use App\Entity\Todo;
use PHPUnit\Framework\TestCase;

class TodoTest extends TestCase
{
    public function testInstantiation(): void
    {
        $todo = new Todo();
        $todo->setId(1);
        $todo->setTask('firefox');

        $this->assertInstanceOf(Todo::class, $todo);
        $this->assertEquals(1, $todo->getId());
        $this->assertEquals('firefox', $todo->getTask());
    }
}
