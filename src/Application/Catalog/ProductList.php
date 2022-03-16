<?php

declare(strict_types = 1);

namespace App\Application\Catalog;

use App\Domain\Product;

interface ProductList
{
    /**
     * @return Product[]
     */
    public function listProducts(): array;
}
