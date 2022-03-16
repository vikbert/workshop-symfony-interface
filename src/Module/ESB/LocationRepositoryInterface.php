<?php

declare(strict_types = 1);

namespace App\Module\ESB;

interface LocationRepositoryInterface
{
    public function listCountries(): iterable;

    public function listStores(string $countryCode): iterable;
}
