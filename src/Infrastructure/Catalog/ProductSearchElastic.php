<?php

declare(strict_types = 1);

namespace App\Infrastructure\Catalog;

use App\Application\Catalog\ProductSearch;
use App\Domain\Product;

final class ProductSearchElastic implements ProductSearch
{
    /**
     * @return Product[]
     */
    public function searchProducts(string $keyWord): array
    {
        // awesome full-text search powered by Elastic-Search
    }
}
