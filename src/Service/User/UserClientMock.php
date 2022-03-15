<?php

declare(strict_types = 1);

namespace App\Service\User;

final class UserClientMock implements UserClientInterface
{
    public function fetchProfile(string $userName): array
    {
        return ['avatar_url' => 'http://my_url'];
    }
}
