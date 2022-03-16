<?php

declare(strict_types = 1);

namespace App\Infrastructure\Catalog;

use App\Application\Catalog\ProductList;

final class ProductListRedis implements ProductList
{
    public function listProducts(): array
    {
        // provide the cached product catalog data by using scalable redis server
        // special scalable solution for high traffic on Black Friday
    }
}
