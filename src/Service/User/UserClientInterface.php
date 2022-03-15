<?php

declare(strict_types = 1);

namespace App\Service\User;

interface UserClientInterface
{
    public function fetchProfile(string $userName): array;
}
