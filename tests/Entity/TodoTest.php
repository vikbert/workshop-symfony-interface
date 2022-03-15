<?php

declare(strict_types = 1);

namespace App\Tests\Entity;

use App\Entity\Country;
use PHPUnit\Framework\TestCase;

class TodoTest extends TestCase
{
    public function testInstantiation(): void
    {
        $todo = new Country();
        $todo->setId(1);
        $todo->setCode('DE');

        $this->assertInstanceOf(Country::class, $todo);
        $this->assertEquals(1, $todo->getId());
        $this->assertEquals('DE', $todo->getCode());
    }
}
