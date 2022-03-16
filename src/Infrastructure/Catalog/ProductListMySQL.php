<?php

declare(strict_types = 1);

namespace App\Infrastructure\Catalog;

use App\Application\Catalog\ProductList;
use App\Domain\Product;

final class ProductListMySQL implements ProductList
{
    /**
     * @return Product[]
     */
    public function listProducts(): array
    {
        /**
         * Doctrine ORM implementation based on MySQL
         *
         * Normal Betrieb
         */
    }
}
