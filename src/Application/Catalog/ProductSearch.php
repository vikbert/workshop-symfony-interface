<?php

declare(strict_types = 1);

namespace App\Application\Catalog;

use App\Domain\Product;

interface ProductSearch
{
    /**
     * @return Product[]
     */
    public function searchProducts(string $keyWord): array;
}
