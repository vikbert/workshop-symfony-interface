<?php

declare(strict_types = 1);

namespace App\Module\ESB;

interface TimingSecuredRestInterface extends SecuredRestInterface
{
    public function openingTimes(string $countryCode): iterable;

    public function specialOpeningTimes(string $countryCode): iterable;

    public function holidayOpeningTimes(string $countryCode): iterable;
}
