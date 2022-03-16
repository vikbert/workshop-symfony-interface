<?php

declare(strict_types = 1);

namespace App\Presentation\Controller;

use App\Application\Catalog\ProductList;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

final class ProductController extends AbstractController
{
    /**
     * Presentation layer follows the contract defined by Application layer
     * Presentation layer can switch very easily to different service, which has different infrastructure support
     *
     * -- business strategy --
     * ✅ We use ProductListMySQL service for daily business
     * 🔥 We switch to ProductListRedis service for BLACK FRIDAY because of high traffic
     *
     * Such switch can be done just by changing a single line in services.yml
     * without touch any logic in the core
     */
    public function catalog(ProductList $productList): Response
    {
        return new Response('some products returned');
    }
}
